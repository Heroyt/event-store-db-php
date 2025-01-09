<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: streams.proto

namespace GRPC\EventStore\Streams\BatchAppendReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.streams.BatchAppendReq.ProposedMessage</code>
 */
class ProposedMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     */
    protected $id = null;
    /**
     * Generated from protobuf field <code>bytes custom_metadata = 3;</code>
     */
    protected $custom_metadata = '';
    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     */
    private $metadata;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Shared\UUID $id
     *     @type array|\Google\Protobuf\Internal\MapField $metadata
     *     @type string $custom_metadata
     *     @type string $data
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Streams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID id = 1;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->id = $var;

        return $this;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>map<string, string> metadata = 2;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setMetadata($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->metadata = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes custom_metadata = 3;</code>
     * @return string
     */
    public function getCustomMetadata()
    {
        return $this->custom_metadata;
    }

    /**
     * Generated from protobuf field <code>bytes custom_metadata = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCustomMetadata($var)
    {
        GPBUtil::checkString($var, False);
        $this->custom_metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}
