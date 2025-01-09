<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.persistent_subscriptions.ListResp</code>
 */
class ListResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo subscriptions = 1;</code>
     */
    private $subscriptions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GRPC\EventStore\PersistentSubscriptions\SubscriptionInfo>|\Google\Protobuf\Internal\RepeatedField $subscriptions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Persistent::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo subscriptions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.persistent_subscriptions.SubscriptionInfo subscriptions = 1;</code>
     * @param array<\GRPC\EventStore\PersistentSubscriptions\SubscriptionInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setSubscriptions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GRPC\EventStore\PersistentSubscriptions\SubscriptionInfo::class);
        $this->subscriptions = $arr;

        return $this;
    }

}

