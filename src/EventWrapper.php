<?php

declare(strict_types=1);

namespace EventStoreDb;

/**
 * @template E of Event
 */
readonly class EventWrapper
{
    /**
     * @param  E  $event
     */
    public function __construct(
        public Event $event,
        public ?string $id,
        public int $revision,
        public int $commitPosition,
    ) {
    }
}
