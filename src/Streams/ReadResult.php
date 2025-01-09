<?php

declare(strict_types=1);

namespace EventStoreDb\Streams;

use EventStoreDb\Event;
use EventStoreDb\Events\GenericEvent;
use EventStoreDb\EventWrapper;
use EventStoreDb\Exceptions\Logic\InvalidEventData;
use EventStoreDb\Exceptions\ReadErrorException;
use EventStoreDb\Status;
use Generator;
use GRPC\EventStore\Streams\ReadResp;
use Grpc\ServerStreamingCall;
use Symfony\Component\Serializer\Encoder\DecoderInterface;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * @template E of Event
 */
readonly class ReadResult
{
    public function __construct(
        private ServerStreamingCall $call,
        private SerializerInterface&DecoderInterface $serializer,
    ) {
    }

    /**
     * @return Generator<EventWrapper<E>>
     */
    public function get(): Generator {
        $responses = $this->call->responses();
        assert(is_iterable($responses));
        foreach ($responses as $response) {
            assert($response instanceof ReadResp);
            $eventData = $response->getEvent();
            if ($eventData !== null) {
                $event = $eventData->getEvent();
                if ($event === null) {
                    continue;
                }
                $meta = $event->getMetadata();
                /** @var class-string<E> $type */
                $type = $meta['type'];
                $data = $event->getData();
                if (class_exists($type)) {
                    $class = $type;
                } else {
                    // TODO: Maybe map specific system events to specific system DTOs
                    $class = match ($type) {
                        default => GenericEvent::class,
                    };
                }
                if (empty($data) || !json_validate($data)) {
                    continue;
                }
                if ($class === GenericEvent::class) {
                    $decodedData = $this->serializer->decode($data, 'json');
                    if (!is_array($decodedData)) {
                        throw new InvalidEventData('Invalid event data - ' . $data);
                    }
                    /** @var array<string,mixed> $decodedData */
                    $eventClass = GenericEvent::fromData($decodedData, $type);
                } else {
                    /** @var E $eventClass */
                    $eventClass = $this->serializer->deserialize($data, $class, 'json');
                }
                /** @phpstan-ignore generator.valueType */
                yield new EventWrapper(
                    $eventClass,
                    $event->getId()?->getString(),
                    (int) $event->getStreamRevision(),
                    (int) $event->getCommitPosition(),
                );
            }
        }
        $status = Status::fromObject($this->call->getStatus());
        if ($status->code !== Status::CODE_OK) {
            throw new ReadErrorException($status);
        }
    }
}
