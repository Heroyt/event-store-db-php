<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.ReadStreamEventsCompleted</code>
 */
class ReadStreamEventsCompleted extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.ReadStreamEventsCompleted.ReadStreamResult result = 2;</code>
     */
    protected $result = 0;
    /**
     * Generated from protobuf field <code>int64 next_event_number = 3;</code>
     */
    protected $next_event_number = 0;
    /**
     * Generated from protobuf field <code>int64 last_event_number = 4;</code>
     */
    protected $last_event_number = 0;
    /**
     * Generated from protobuf field <code>bool is_end_of_stream = 5;</code>
     */
    protected $is_end_of_stream = false;
    /**
     * Generated from protobuf field <code>int64 last_commit_position = 6;</code>
     */
    protected $last_commit_position = 0;
    /**
     * Generated from protobuf field <code>string error = 7;</code>
     */
    protected $error = '';
    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.ResolvedIndexedEvent events = 1;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GRPC\EventStore\Client\ResolvedIndexedEvent>|\Google\Protobuf\Internal\RepeatedField $events
     *     @type int $result
     *     @type int|string $next_event_number
     *     @type int|string $last_event_number
     *     @type bool $is_end_of_stream
     *     @type int|string $last_commit_position
     *     @type string $error
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.ResolvedIndexedEvent events = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.ResolvedIndexedEvent events = 1;</code>
     * @param array<\GRPC\EventStore\Client\ResolvedIndexedEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GRPC\EventStore\Client\ResolvedIndexedEvent::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.ReadStreamEventsCompleted.ReadStreamResult result = 2;</code>
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.ReadStreamEventsCompleted.ReadStreamResult result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkEnum($var, \GRPC\EventStore\Client\ReadStreamEventsCompleted\ReadStreamResult::class);
        $this->result = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 next_event_number = 3;</code>
     * @return int|string
     */
    public function getNextEventNumber()
    {
        return $this->next_event_number;
    }

    /**
     * Generated from protobuf field <code>int64 next_event_number = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNextEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->next_event_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_number = 4;</code>
     * @return int|string
     */
    public function getLastEventNumber()
    {
        return $this->last_event_number;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_number = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_event_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_end_of_stream = 5;</code>
     * @return bool
     */
    public function getIsEndOfStream()
    {
        return $this->is_end_of_stream;
    }

    /**
     * Generated from protobuf field <code>bool is_end_of_stream = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsEndOfStream($var)
    {
        GPBUtil::checkBool($var);
        $this->is_end_of_stream = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 6;</code>
     * @return int|string
     */
    public function getLastCommitPosition()
    {
        return $this->last_commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string error = 7;</code>
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Generated from protobuf field <code>string error = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkString($var, True);
        $this->error = $var;

        return $this;
    }

}

