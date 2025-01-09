<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.CreateReq.AllOptions.FilterOptions</code>
 */
class FilterOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>uint32 checkpointIntervalMultiplier = 5;</code>
     */
    protected $checkpointIntervalMultiplier = 0;
    protected $filter;
    protected $window;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression $stream_identifier
     *     @type \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression $event_type
     *     @type int $max
     *     @type \GRPC\EventStore\Shared\PBEmpty $count
     *     @type int $checkpointIntervalMultiplier
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.CreateReq.AllOptions.FilterOptions.Expression stream_identifier = 1;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression|null
     */
    public function getStreamIdentifier()
    {
        return $this->readOneof(1);
    }

    public function hasStreamIdentifier()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.CreateReq.AllOptions.FilterOptions.Expression stream_identifier = 1;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression $var
     * @return $this
     */
    public function setStreamIdentifier($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.CreateReq.AllOptions.FilterOptions.Expression event_type = 2;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression|null
     */
    public function getEventType()
    {
        return $this->readOneof(2);
    }

    public function hasEventType()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.CreateReq.AllOptions.FilterOptions.Expression event_type = 2;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\CreateReq\AllOptions\FilterOptions\Expression::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 max = 3;</code>
     * @return int
     */
    public function getMax()
    {
        return $this->readOneof(3);
    }

    public function hasMax()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>uint32 max = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setMax($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty count = 4;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getCount()
    {
        return $this->readOneof(4);
    }

    public function hasCount()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty count = 4;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setCount($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 checkpointIntervalMultiplier = 5;</code>
     * @return int
     */
    public function getCheckpointIntervalMultiplier()
    {
        return $this->checkpointIntervalMultiplier;
    }

    /**
     * Generated from protobuf field <code>uint32 checkpointIntervalMultiplier = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckpointIntervalMultiplier($var)
    {
        GPBUtil::checkUint32($var);
        $this->checkpointIntervalMultiplier = $var;

        return $this;
    }

    /**
     * @return string
     */
    public function getFilter()
    {
        return $this->whichOneof("filter");
    }

    /**
     * @return string
     */
    public function getWindow()
    {
        return $this->whichOneof("window");
    }

}

