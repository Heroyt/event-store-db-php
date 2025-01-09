<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.ReadStreamEvents</code>
 */
class ReadStreamEvents extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     */
    protected $event_stream_id = '';
    /**
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     */
    protected $from_event_number = 0;
    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     */
    protected $max_count = 0;
    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     */
    protected $resolve_link_tos = false;
    /**
     * Generated from protobuf field <code>bool require_leader = 5;</code>
     */
    protected $require_leader = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_stream_id
     *     @type int|string $from_event_number
     *     @type int $max_count
     *     @type bool $resolve_link_tos
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
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     * @return int|string
     */
    public function getFromEventNumber()
    {
        return $this->from_event_number;
    }

    /**
     * Generated from protobuf field <code>int64 from_event_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setFromEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->from_event_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     * @return int
     */
    public function getMaxCount()
    {
        return $this->max_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_count = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->resolve_link_tos;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setResolveLinkTos($var)
    {
        GPBUtil::checkBool($var);
        $this->resolve_link_tos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool require_leader = 5;</code>
     * @return bool
     */
    public function getRequireLeader()
    {
        return $this->require_leader;
    }

    /**
     * Generated from protobuf field <code>bool require_leader = 5;</code>
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

