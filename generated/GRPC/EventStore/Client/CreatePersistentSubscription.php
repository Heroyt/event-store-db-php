<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.CreatePersistentSubscription</code>
 */
class CreatePersistentSubscription extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string subscription_group_name = 1;</code>
     */
    protected $subscription_group_name = '';
    /**
     * Generated from protobuf field <code>string event_stream_id = 2;</code>
     */
    protected $event_stream_id = '';
    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 3;</code>
     */
    protected $resolve_link_tos = false;
    /**
     * Generated from protobuf field <code>int64 start_from = 4;</code>
     */
    protected $start_from = 0;
    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 5;</code>
     */
    protected $message_timeout_milliseconds = 0;
    /**
     * Generated from protobuf field <code>bool record_statistics = 6;</code>
     */
    protected $record_statistics = false;
    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 7;</code>
     */
    protected $live_buffer_size = 0;
    /**
     * Generated from protobuf field <code>int32 read_batch_size = 8;</code>
     */
    protected $read_batch_size = 0;
    /**
     * Generated from protobuf field <code>int32 buffer_size = 9;</code>
     */
    protected $buffer_size = 0;
    /**
     * Generated from protobuf field <code>int32 max_retry_count = 10;</code>
     */
    protected $max_retry_count = 0;
    /**
     * Generated from protobuf field <code>bool prefer_round_robin = 11;</code>
     */
    protected $prefer_round_robin = false;
    /**
     * Generated from protobuf field <code>int32 checkpoint_after_time = 12;</code>
     */
    protected $checkpoint_after_time = 0;
    /**
     * Generated from protobuf field <code>int32 checkpoint_max_count = 13;</code>
     */
    protected $checkpoint_max_count = 0;
    /**
     * Generated from protobuf field <code>int32 checkpoint_min_count = 14;</code>
     */
    protected $checkpoint_min_count = 0;
    /**
     * Generated from protobuf field <code>int32 subscriber_max_count = 15;</code>
     */
    protected $subscriber_max_count = 0;
    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 16;</code>
     */
    protected $named_consumer_strategy = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $subscription_group_name
     *     @type string $event_stream_id
     *     @type bool $resolve_link_tos
     *     @type int|string $start_from
     *     @type int $message_timeout_milliseconds
     *     @type bool $record_statistics
     *     @type int $live_buffer_size
     *     @type int $read_batch_size
     *     @type int $buffer_size
     *     @type int $max_retry_count
     *     @type bool $prefer_round_robin
     *     @type int $checkpoint_after_time
     *     @type int $checkpoint_max_count
     *     @type int $checkpoint_min_count
     *     @type int $subscriber_max_count
     *     @type string $named_consumer_strategy
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string subscription_group_name = 1;</code>
     * @return string
     */
    public function getSubscriptionGroupName()
    {
        return $this->subscription_group_name;
    }

    /**
     * Generated from protobuf field <code>string subscription_group_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriptionGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription_group_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 2;</code>
     * @return string
     */
    public function getEventStreamId()
    {
        return $this->event_stream_id;
    }

    /**
     * Generated from protobuf field <code>string event_stream_id = 2;</code>
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
     * Generated from protobuf field <code>bool resolve_link_tos = 3;</code>
     * @return bool
     */
    public function getResolveLinkTos()
    {
        return $this->resolve_link_tos;
    }

    /**
     * Generated from protobuf field <code>bool resolve_link_tos = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setResolveLinkTos($var)
    {
        GPBUtil::checkBool($var);
        $this->resolve_link_tos = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 start_from = 4;</code>
     * @return int|string
     */
    public function getStartFrom()
    {
        return $this->start_from;
    }

    /**
     * Generated from protobuf field <code>int64 start_from = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setStartFrom($var)
    {
        GPBUtil::checkInt64($var);
        $this->start_from = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 5;</code>
     * @return int
     */
    public function getMessageTimeoutMilliseconds()
    {
        return $this->message_timeout_milliseconds;
    }

    /**
     * Generated from protobuf field <code>int32 message_timeout_milliseconds = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setMessageTimeoutMilliseconds($var)
    {
        GPBUtil::checkInt32($var);
        $this->message_timeout_milliseconds = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool record_statistics = 6;</code>
     * @return bool
     */
    public function getRecordStatistics()
    {
        return $this->record_statistics;
    }

    /**
     * Generated from protobuf field <code>bool record_statistics = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setRecordStatistics($var)
    {
        GPBUtil::checkBool($var);
        $this->record_statistics = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 7;</code>
     * @return int
     */
    public function getLiveBufferSize()
    {
        return $this->live_buffer_size;
    }

    /**
     * Generated from protobuf field <code>int32 live_buffer_size = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLiveBufferSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->live_buffer_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 read_batch_size = 8;</code>
     * @return int
     */
    public function getReadBatchSize()
    {
        return $this->read_batch_size;
    }

    /**
     * Generated from protobuf field <code>int32 read_batch_size = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setReadBatchSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->read_batch_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 buffer_size = 9;</code>
     * @return int
     */
    public function getBufferSize()
    {
        return $this->buffer_size;
    }

    /**
     * Generated from protobuf field <code>int32 buffer_size = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setBufferSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->buffer_size = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 max_retry_count = 10;</code>
     * @return int
     */
    public function getMaxRetryCount()
    {
        return $this->max_retry_count;
    }

    /**
     * Generated from protobuf field <code>int32 max_retry_count = 10;</code>
     * @param int $var
     * @return $this
     */
    public function setMaxRetryCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->max_retry_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool prefer_round_robin = 11;</code>
     * @return bool
     */
    public function getPreferRoundRobin()
    {
        return $this->prefer_round_robin;
    }

    /**
     * Generated from protobuf field <code>bool prefer_round_robin = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setPreferRoundRobin($var)
    {
        GPBUtil::checkBool($var);
        $this->prefer_round_robin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_after_time = 12;</code>
     * @return int
     */
    public function getCheckpointAfterTime()
    {
        return $this->checkpoint_after_time;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_after_time = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckpointAfterTime($var)
    {
        GPBUtil::checkInt32($var);
        $this->checkpoint_after_time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_max_count = 13;</code>
     * @return int
     */
    public function getCheckpointMaxCount()
    {
        return $this->checkpoint_max_count;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_max_count = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckpointMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->checkpoint_max_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_min_count = 14;</code>
     * @return int
     */
    public function getCheckpointMinCount()
    {
        return $this->checkpoint_min_count;
    }

    /**
     * Generated from protobuf field <code>int32 checkpoint_min_count = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setCheckpointMinCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->checkpoint_min_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 subscriber_max_count = 15;</code>
     * @return int
     */
    public function getSubscriberMaxCount()
    {
        return $this->subscriber_max_count;
    }

    /**
     * Generated from protobuf field <code>int32 subscriber_max_count = 15;</code>
     * @param int $var
     * @return $this
     */
    public function setSubscriberMaxCount($var)
    {
        GPBUtil::checkInt32($var);
        $this->subscriber_max_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 16;</code>
     * @return string
     */
    public function getNamedConsumerStrategy()
    {
        return $this->named_consumer_strategy;
    }

    /**
     * Generated from protobuf field <code>string named_consumer_strategy = 16;</code>
     * @param string $var
     * @return $this
     */
    public function setNamedConsumerStrategy($var)
    {
        GPBUtil::checkString($var, True);
        $this->named_consumer_strategy = $var;

        return $this;
    }

}

