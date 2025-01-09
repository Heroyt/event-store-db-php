<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.WriteEvents</code>
 */
class WriteEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     */
    protected $event_stream_id = '';
    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     */
    protected $expected_version = 0;
    /**
     * Generated from protobuf field <code>bool require_leader = 4;</code>
     */
    protected $require_leader = false;
    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.NewEvent events = 3;</code>
     */
    private $events;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_stream_id
     *     @type int|string $expected_version
     *     @type array<\GRPC\EventStore\Client\NewEvent>|\Google\Protobuf\Internal\RepeatedField $events
     *     @type bool $require_leader
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->event_stream_id;
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEventStreamId($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_stream_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     * @return int|string
     */
    public function getExpectedVersion()
    {
        return $this->expected_version;
    }

    /**
     * Generated from protobuf field <code>int64 expected_version = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExpectedVersion($var)
    {
        GPBUtil::checkInt64($var);
        $this->expected_version = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.NewEvent events = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEvents()
    {
        return $this->events;
    }

    /**
     * Generated from protobuf field <code>repeated .EventStore.Client.Messages.NewEvent events = 3;</code>
     * @param array<\GRPC\EventStore\Client\NewEvent>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEvents($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GRPC\EventStore\Client\NewEvent::class);
        $this->events = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool require_leader = 4;</code>
     * @return bool
     */
    public function getRequireLeader()
    {
        return $this->require_leader;
    }

    /**
     * Generated from protobuf field <code>bool require_leader = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRequireLeader($var)
    {
        GPBUtil::checkBool($var);
        $this->require_leader = $var;

        return $this;
    }

}
