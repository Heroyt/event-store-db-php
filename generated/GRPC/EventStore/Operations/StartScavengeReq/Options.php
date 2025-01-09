<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: operations.proto

namespace GRPC\EventStore\Operations\StartScavengeReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.operations.StartScavengeReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int32 thread_count = 1;</code>
     */
    protected $thread_count = 0;
    /**
     * Generated from protobuf field <code>int32 start_from_chunk = 2;</code>
     */
    protected $start_from_chunk = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $thread_count
     *     @type int $start_from_chunk
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int32 thread_count = 1;</code>
     * @return int
     */
    public function getThreadCount()
    {
        return $this->thread_count;
    }

    /**
     * Generated from protobuf field <code>int32 thread_count = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setThreadCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->thread_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 start_from_chunk = 2;</code>
     * @return int
     */
    public function getStartFromChunk()
    {
        return $this->start_from_chunk;
    }

    /**
     * Generated from protobuf field <code>int32 start_from_chunk = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setStartFromChunk($var)
    {
        GPBUtil::checkInt32($var);
        $this->start_from_chunk = $var;

        return $this;
    }

}

