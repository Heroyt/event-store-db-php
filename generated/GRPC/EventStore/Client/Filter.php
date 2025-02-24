<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.Filter</code>
 */
class Filter extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterContext context = 1;</code>
     */
    protected $context = 0;
    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterType type = 2;</code>
     */
    protected $type = 0;
    /**
     * Generated from protobuf field <code>repeated string data = 3;</code>
     */
    private $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $context
     *     @type int $type
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterContext context = 1;</code>
     * @return int
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterContext context = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setContext($var)
    {
        GPBUtil::checkEnum($var, \GRPC\EventStore\Client\Filter\FilterContext::class);
        $this->context = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterType type = 2;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Generated from protobuf field <code>.EventStore.Client.Messages.Filter.FilterType type = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \GRPC\EventStore\Client\Filter\FilterType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated string data = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>repeated string data = 3;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setData($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->data = $arr;

        return $this;
    }

}

