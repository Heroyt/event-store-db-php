<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GRPC\EventStore\Projections;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.projections.CreateReq</code>
 */
class CreateReq extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.projections.CreateReq.Options options = 1;</code>
     */
    protected $options = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Projections\CreateReq\Options $options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Projections::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.projections.CreateReq.Options options = 1;</code>
     * @return \GRPC\EventStore\Projections\CreateReq\Options|null
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.projections.CreateReq.Options options = 1;</code>
     * @param \GRPC\EventStore\Projections\CreateReq\Options $var
     * @return $this
     */
    public function setOptions($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Projections\CreateReq\Options::class);
        $this->options = $var;

        return $this;
    }

    public function hasOptions()
    {
        return isset($this->options);
    }

    public function clearOptions()
    {
        unset($this->options);
    }

}
