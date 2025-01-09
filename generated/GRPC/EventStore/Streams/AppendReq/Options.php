<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: streams.proto

namespace GRPC\EventStore\Streams\AppendReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.streams.AppendReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1;</code>
     */
    protected $stream_identifier = null;
    protected $expected_stream_revision;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Shared\StreamIdentifier $stream_identifier
     *     @type int|string $revision
     *     @type \GRPC\EventStore\Shared\PBEmpty $no_stream
     *     @type \GRPC\EventStore\Shared\PBEmpty $any
     *     @type \GRPC\EventStore\Shared\PBEmpty $stream_exists
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Streams::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1;</code>
     * @return \GRPC\EventStore\Shared\StreamIdentifier|null
     */
    public function getStreamIdentifier()
    {
        return $this->stream_identifier;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1;</code>
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
     * Generated from protobuf field <code>uint64 revision = 2;</code>
     * @return int|string
     */
    public function getRevision()
    {
        return $this->readOneof(2);
    }

    public function hasRevision()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>uint64 revision = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setRevision($var)
    {
        GPBUtil::checkUint64($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_stream = 3;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getNoStream()
    {
        return $this->readOneof(3);
    }

    public function hasNoStream()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_stream = 3;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setNoStream($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty any = 4;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getAny()
    {
        return $this->readOneof(4);
    }

    public function hasAny()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty any = 4;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setAny($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty stream_exists = 5;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getStreamExists()
    {
        return $this->readOneof(5);
    }

    public function hasStreamExists()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty stream_exists = 5;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setStreamExists($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getExpectedStreamRevision()
    {
        return $this->whichOneof("expected_stream_revision");
    }

}

