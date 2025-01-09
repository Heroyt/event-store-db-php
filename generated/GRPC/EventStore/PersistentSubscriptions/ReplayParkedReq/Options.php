<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions\ReplayParkedReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.ReplayParkedReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string group_name = 1;</code>
     */
    protected $group_name = '';
    protected $stream_option;
    protected $stop_at_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $group_name
     *     @type \GRPC\EventStore\Shared\StreamIdentifier $stream_identifier
     *     @type \GRPC\EventStore\Shared\PBEmpty $all
     *     @type int|string $stop_at
     *     @type \GRPC\EventStore\Shared\PBEmpty $no_limit
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string group_name = 1;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Generated from protobuf field <code>string group_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 2;</code>
     * @return \GRPC\EventStore\Shared\StreamIdentifier|null
     */
    public function getStreamIdentifier()
    {
        return $this->readOneof(2);
    }

    public function hasStreamIdentifier()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 2;</code>
     * @param \GRPC\EventStore\Shared\StreamIdentifier $var
     * @return $this
     */
    public function setStreamIdentifier($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\StreamIdentifier::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty all = 3;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getAll()
    {
        return $this->readOneof(3);
    }

    public function hasAll()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty all = 3;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 stop_at = 4;</code>
     * @return int|string
     */
    public function getStopAt()
    {
        return $this->readOneof(4);
    }

    public function hasStopAt()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>int64 stop_at = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStopAt($var)
    {
        GPBUtil::checkInt64($var);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_limit = 5;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getNoLimit()
    {
        return $this->readOneof(5);
    }

    public function hasNoLimit()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_limit = 5;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setNoLimit($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getStreamOption()
    {
        return $this->whichOneof("stream_option");
    }

    /**
     * @return string
     */
    public function getStopAtOption()
    {
        return $this->whichOneof("stop_at_option");
    }

}

