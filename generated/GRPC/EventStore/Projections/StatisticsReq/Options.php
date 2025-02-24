<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GRPC\EventStore\Projections\StatisticsReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.projections.StatisticsReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    protected $mode;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type \GRPC\EventStore\Shared\PBEmpty $all
     *     @type \GRPC\EventStore\Shared\PBEmpty $transient
     *     @type \GRPC\EventStore\Shared\PBEmpty $continuous
     *     @type \GRPC\EventStore\Shared\PBEmpty $one_time
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Projections::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->readOneof(1);
    }

    public function hasName()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty all = 2;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getAll()
    {
        return $this->readOneof(2);
    }

    public function hasAll()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty all = 2;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty transient = 3;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getTransient()
    {
        return $this->readOneof(3);
    }

    public function hasTransient()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty transient = 3;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setTransient($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty continuous = 4;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getContinuous()
    {
        return $this->readOneof(4);
    }

    public function hasContinuous()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty continuous = 4;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setContinuous($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty one_time = 5;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getOneTime()
    {
        return $this->readOneof(5);
    }

    public function hasOneTime()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty one_time = 5;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setOneTime($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getMode()
    {
        return $this->whichOneof("mode");
    }

}

