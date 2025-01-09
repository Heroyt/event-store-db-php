<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: streams.proto

namespace GRPC\EventStore\Streams;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.streams.BatchAppendResp</code>
 */
class BatchAppendResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.UUID correlation_id = 1;</code>
     */
    protected $correlation_id = null;
    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 4;</code>
     */
    protected $stream_identifier = null;
    protected $result;
    protected $expected_stream_position;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Shared\UUID $correlation_id
     *     @type \Google\Rpc\Status $error
     *     @type \GRPC\EventStore\Streams\BatchAppendResp\Success $success
     *     @type \GRPC\EventStore\Shared\StreamIdentifier $stream_identifier
     *     @type int|string $stream_position
     *     @type \Google\Protobuf\GPBEmpty $no_stream
     *     @type \Google\Protobuf\GPBEmpty $any
     *     @type \Google\Protobuf\GPBEmpty $stream_exists
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Streams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID correlation_id = 1;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getCorrelationId()
    {
        return $this->correlation_id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID correlation_id = 1;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setCorrelationId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->correlation_id = $var;

        return $this;
    }

    public function hasCorrelationId()
    {
        return isset($this->correlation_id);
    }

    public function clearCorrelationId()
    {
        unset($this->correlation_id);
    }

    /**
     * Generated from protobuf field <code>.google.rpc.Status error = 2;</code>
     * @return \Google\Rpc\Status|null
     */
    public function getError()
    {
        return $this->readOneof(2);
    }

    public function hasError()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.google.rpc.Status error = 2;</code>
     * @param \Google\Rpc\Status $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Rpc\Status::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.streams.BatchAppendResp.Success success = 3;</code>
     * @return \GRPC\EventStore\Streams\BatchAppendResp\Success|null
     */
    public function getSuccess()
    {
        return $this->readOneof(3);
    }

    public function hasSuccess()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.streams.BatchAppendResp.Success success = 3;</code>
     * @param \GRPC\EventStore\Streams\BatchAppendResp\Success $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Streams\BatchAppendResp\Success::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 4;</code>
     * @return \GRPC\EventStore\Shared\StreamIdentifier|null
     */
    public function getStreamIdentifier()
    {
        return $this->stream_identifier;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 4;</code>
     * @param \GRPC\EventStore\Shared\StreamIdentifier $var
     * @return $this
     */
    public function setStreamIdentifier($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\StreamIdentifier::class);
        $this->stream_identifier = $var;

        return $this;
    }

    public function hasStreamIdentifier()
    {
        return isset($this->stream_identifier);
    }

    public function clearStreamIdentifier()
    {
        unset($this->stream_identifier);
    }

    /**
     * Generated from protobuf field <code>uint64 stream_position = 5;</code>
     * @return int|string
     */
    public function getStreamPosition()
    {
        return $this->readOneof(5);
    }

    public function hasStreamPosition()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>uint64 stream_position = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStreamPosition($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty no_stream = 6;</code>
     * @return \Google\Protobuf\GPBEmpty|null
     */
    public function getNoStream()
    {
        return $this->readOneof(6);
    }

    public function hasNoStream()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty no_stream = 6;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setNoStream($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty any = 7;</code>
     * @return \Google\Protobuf\GPBEmpty|null
     */
    public function getAny()
    {
        return $this->readOneof(7);
    }

    public function hasAny()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty any = 7;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setAny($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty stream_exists = 8;</code>
     * @return \Google\Protobuf\GPBEmpty|null
     */
    public function getStreamExists()
    {
        return $this->readOneof(8);
    }

    public function hasStreamExists()
    {
        return $this->hasOneof(8);
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Empty stream_exists = 8;</code>
     * @param \Google\Protobuf\GPBEmpty $var
     * @return $this
     */
    public function setStreamExists($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\GPBEmpty::class);
        $this->writeOneof(8, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getResult()
    {
        return $this->whichOneof("result");
    }

    /**
     * @return string
     */
    public function getExpectedStreamPosition()
    {
        return $this->whichOneof("expected_stream_position");
    }

}
