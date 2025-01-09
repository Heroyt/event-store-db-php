<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions\UpdateReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.UpdateReq.AllOptions</code>
 */
class AllOptions extends \Google\Protobuf\Internal\Message
{
    protected $all_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Position $position
     *     @type \GRPC\EventStore\Shared\PBEmpty $start
     *     @type \GRPC\EventStore\Shared\PBEmpty $end
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Position position = 1;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Position|null
     */
    public function getPosition()
    {
        return $this->readOneof(1);
    }

    public function hasPosition()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Position position = 1;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Position $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Position::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty start = 2;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getStart()
    {
        return $this->readOneof(2);
    }

    public function hasStart()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty start = 2;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setStart($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty end = 3;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getEnd()
    {
        return $this->readOneof(3);
    }

    public function hasEnd()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty end = 3;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setEnd($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getAllOption()
    {
        return $this->whichOneof("all_option");
    }

}
