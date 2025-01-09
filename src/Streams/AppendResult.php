<?php

declare(strict_types=1);

namespace EventStoreDb\Streams;

use EventStoreDb\Status;
use GRPC\EventStore\Streams\AppendResp;

class AppendResult
{
    public bool $success {
        get {
            return $this->response !== null && $this->response->hasSuccess();
        }
    }

    public ?int $revision {
        get {
            $revision = $this->response?->getSuccess()?->getCurrentRevision();
            assert($revision === null || is_int($revision));
            return $revision;
        }
    }

    public ?int $position {
        get {
            $position = $this->response?->getSuccess()?->getPosition()?->getCommitPosition();
            assert($position === null || is_int($position));
            return $position;
        }
    }

    public function __construct(
        public readonly string       $uuid,
        public readonly string       $eventType,
        public readonly string       $streamName,
        private readonly ?AppendResp $response,
        public readonly Status       $status,
    ) {
    }
}
