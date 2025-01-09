<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions\UpdateReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.UpdateReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $stream_identifier = null;
    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     */
    protected $group_name = '';
    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Settings settings = 3;</code>
     */
    protected $settings = null;
    protected $stream_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\PersistentSubscriptions\UpdateReq\StreamOptions $stream
     *     @type \GRPC\EventStore\PersistentSubscriptions\UpdateReq\AllOptions $all
     *     @type \GRPC\EventStore\Shared\StreamIdentifier $stream_identifier
     *     @type string $group_name
     *     @type \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Settings $settings
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.StreamOptions stream = 4;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\UpdateReq\StreamOptions|null
     */
    public function getStream()
    {
        return $this->readOneof(4);
    }

    public function hasStream()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.StreamOptions stream = 4;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\UpdateReq\StreamOptions $var
     * @return $this
     */
    public function setStream($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\UpdateReq\StreamOptions::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.AllOptions all = 5;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\UpdateReq\AllOptions|null
     */
    public function getAll()
    {
        return $this->readOneof(5);
    }

    public function hasAll()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.AllOptions all = 5;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\UpdateReq\AllOptions $var
     * @return $this
     */
    public function setAll($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\UpdateReq\AllOptions::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1 [deprecated = true];</code>
     * @return \GRPC\EventStore\Shared\StreamIdentifier|null
     * @deprecated
     */
    public function getStreamIdentifier()
    {
        @trigger_error('stream_identifier is deprecated.', E_USER_DEPRECATED);
        return $this->stream_identifier;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.StreamIdentifier stream_identifier = 1 [deprecated = true];</code>
     * @param \GRPC\EventStore\Shared\StreamIdentifier $var
     * @return $this
     * @deprecated
     */
    public function setStreamIdentifier($var)
    {
        @trigger_error('stream_identifier is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\StreamIdentifier::class);
        $this->stream_identifier = $var;

        return $this;
    }

    public function hasStreamIdentifier()
    {
        @trigger_error('stream_identifier is deprecated.', E_USER_DEPRECATED);
        return isset($this->stream_identifier);
    }

    public function clearStreamIdentifier()
    {
        @trigger_error('stream_identifier is deprecated.', E_USER_DEPRECATED);
        unset($this->stream_identifier);
    }

    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     * @return string
     */
    public function getGroupName()
    {
        return $this->group_name;
    }

    /**
     * Generated from protobuf field <code>string group_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setGroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->group_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Settings settings = 3;</code>
     * @return \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Settings|null
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.persistent_subscriptions.UpdateReq.Settings settings = 3;</code>
     * @param \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Settings $var
     * @return $this
     */
    public function setSettings($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\PersistentSubscriptions\UpdateReq\Settings::class);
        $this->settings = $var;

        return $this;
    }

    public function hasSettings()
    {
        return isset($this->settings);
    }

    public function clearSettings()
    {
        unset($this->settings);
    }

    /**
     * @return string
     */
    public function getStreamOption()
    {
        return $this->whichOneof("stream_option");
    }

}
