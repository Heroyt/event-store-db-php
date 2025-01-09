<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: gossip.proto

namespace GRPC\EventStore\Gossip;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.gossip.ClusterInfo</code>
 */
class ClusterInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .event_store.client.gossip.MemberInfo members = 1;</code>
     */
    private $members;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GRPC\EventStore\Gossip\MemberInfo>|\Google\Protobuf\Internal\RepeatedField $members
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Gossip::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.gossip.MemberInfo members = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMembers()
    {
        return $this->members;
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.gossip.MemberInfo members = 1;</code>
     * @param array<\GRPC\EventStore\Gossip\MemberInfo>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMembers($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GRPC\EventStore\Gossip\MemberInfo::class);
        $this->members = $arr;

        return $this;
    }

}

