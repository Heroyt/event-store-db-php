<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>EventStore.Client.Messages.PersistentSubscriptionConfirmation</code>
 */
class PersistentSubscriptionConfirmation extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>int64 last_commit_position = 1;</code>
     */
    protected $last_commit_position = 0;
    /**
     * Generated from protobuf field <code>string subscription_id = 2;</code>
     */
    protected $subscription_id = '';
    /**
     * Generated from protobuf field <code>int64 last_event_number = 3;</code>
     */
    protected $last_event_number = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $last_commit_position
     *     @type string $subscription_id
     *     @type int|string $last_event_number
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\ClientMessageDtos::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 1;</code>
     * @return int|string
     */
    public function getLastCommitPosition()
    {
        return $this->last_commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastCommitPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_commit_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string subscription_id = 2;</code>
     * @return string
     */
    public function getSubscriptionId()
    {
        return $this->subscription_id;
    }

    /**
     * Generated from protobuf field <code>string subscription_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSubscriptionId($var)
    {
        GPBUtil::checkString($var, True);
        $this->subscription_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_number = 3;</code>
     * @return int|string
     */
    public function getLastEventNumber()
    {
        return $this->last_event_number;
    }

    /**
     * Generated from protobuf field <code>int64 last_event_number = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastEventNumber($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_event_number = $var;

        return $this;
    }

}

