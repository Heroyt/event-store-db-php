<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.EventRecord</code>
 */
class EventRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string event_stream_id = 1;</code>
     */
    protected $event_stream_id = '';
    /**
     * Generated from protobuf field <code>int64 event_number = 2;</code>
     */
    protected $event_number = 0;
    /**
     * Generated from protobuf field <code>bytes event_id = 3;</code>
     */
    protected $event_id = '';
    /**
     * Generated from protobuf field <code>string event_type = 4;</code>
     */
    protected $event_type = '';
    /**
     * Generated from protobuf field <code>int32 data_content_type = 5;</code>
     */
    protected $data_content_type = 0;
    /**
     * Generated from protobuf field <code>int32 metadata_content_type = 6;</code>
     */
    protected $metadata_content_type = 0;
    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     */
    protected $data = '';
    /**
     * Generated from protobuf field <code>bytes metadata = 8;</code>
     */
    protected $metadata = '';
    /**
     * Generated from protobuf field <code>int64 created = 9;</code>
     */
    protected $created = 0;
    /**
     * Generated from protobuf field <code>int64 created_epoch = 10;</code>
     */
    protected $created_epoch = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $event_stream_id
     *     @type int|string $event_number
     *     @type string $event_id
     *     @type string $event_type
     *     @type int $data_content_type
     *     @type int $metadata_content_type
     *     @type string $data
     *     @type string $metadata
     *     @type int|string $created
     *     @type int|string $created_epoch
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
     * Generated from protobuf field <code>int64 event_number = 2;</code>
     * @return int|string
     */
    public function getEventNumber()
    {
        return $this->event_number;
    }

    /**
     * Generated from protobuf field <code>int64 event_number = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->event_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes event_id = 3;</code>
     * @return string
     */
    public function getEventId()
    {
        return $this->event_id;
    }

    /**
     * Generated from protobuf field <code>bytes event_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setEventId($var)
    {
        GPBUtil::checkString($var, False);
        $this->event_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event_type = 4;</code>
     * @return string
     */
    public function getEventType()
    {
        return $this->event_type;
    }

    /**
     * Generated from protobuf field <code>string event_type = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEventType($var)
    {
        GPBUtil::checkString($var, True);
        $this->event_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 data_content_type = 5;</code>
     * @return int
     */
    public function getDataContentType()
    {
        return $this->data_content_type;
    }

    /**
     * Generated from protobuf field <code>int32 data_content_type = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setDataContentType($var)
    {
        GPBUtil::checkInt32($var);
        $this->data_content_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 metadata_content_type = 6;</code>
     * @return int
     */
    public function getMetadataContentType()
    {
        return $this->metadata_content_type;
    }

    /**
     * Generated from protobuf field <code>int32 metadata_content_type = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setMetadataContentType($var)
    {
        GPBUtil::checkInt32($var);
        $this->metadata_content_type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Generated from protobuf field <code>bytes data = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bytes metadata = 8;</code>
     * @return string
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    /**
     * Generated from protobuf field <code>bytes metadata = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkString($var, False);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created = 9;</code>
     * @return int|string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Generated from protobuf field <code>int64 created = 9;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreated($var)
    {
        GPBUtil::checkInt64($var);
        $this->created = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 created_epoch = 10;</code>
     * @return int|string
     */
    public function getCreatedEpoch()
    {
        return $this->created_epoch;
    }

    /**
     * Generated from protobuf field <code>int64 created_epoch = 10;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCreatedEpoch($var)
    {
        GPBUtil::checkInt64($var);
        $this->created_epoch = $var;

        return $this;
    }

}

