<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cluster.proto

namespace GRPC\EventStore\Cluster;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.cluster.MemberInfo</code>
 */
class MemberInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.UUID instance_id = 1;</code>
     */
    protected $instance_id = null;
    /**
     * Generated from protobuf field <code>int64 time_stamp = 2;</code>
     */
    protected $time_stamp = 0;
    /**
     * Generated from protobuf field <code>.event_store.cluster.MemberInfo.VNodeState state = 3;</code>
     */
    protected $state = 0;
    /**
     * Generated from protobuf field <code>bool is_alive = 4;</code>
     */
    protected $is_alive = false;
    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint http_end_point = 5;</code>
     */
    protected $http_end_point = null;
    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint internal_tcp = 6;</code>
     */
    protected $internal_tcp = null;
    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint external_tcp = 7;</code>
     */
    protected $external_tcp = null;
    /**
     * Generated from protobuf field <code>bool internal_tcp_uses_tls = 8;</code>
     */
    protected $internal_tcp_uses_tls = false;
    /**
     * Generated from protobuf field <code>bool external_tcp_uses_tls = 9;</code>
     */
    protected $external_tcp_uses_tls = false;
    /**
     * Generated from protobuf field <code>int64 last_commit_position = 10;</code>
     */
    protected $last_commit_position = 0;
    /**
     * Generated from protobuf field <code>int64 writer_checkpoint = 11;</code>
     */
    protected $writer_checkpoint = 0;
    /**
     * Generated from protobuf field <code>int64 chaser_checkpoint = 12;</code>
     */
    protected $chaser_checkpoint = 0;
    /**
     * Generated from protobuf field <code>int64 epoch_position = 13;</code>
     */
    protected $epoch_position = 0;
    /**
     * Generated from protobuf field <code>int32 epoch_number = 14;</code>
     */
    protected $epoch_number = 0;
    /**
     * Generated from protobuf field <code>.event_store.client.UUID epoch_id = 15;</code>
     */
    protected $epoch_id = null;
    /**
     * Generated from protobuf field <code>int32 node_priority = 16;</code>
     */
    protected $node_priority = 0;
    /**
     * Generated from protobuf field <code>bool is_read_only_replica = 17;</code>
     */
    protected $is_read_only_replica = false;
    /**
     * Generated from protobuf field <code>string advertise_host_to_client_as = 18;</code>
     */
    protected $advertise_host_to_client_as = '';
    /**
     * Generated from protobuf field <code>uint32 advertise_http_port_to_client_as = 19;</code>
     */
    protected $advertise_http_port_to_client_as = 0;
    /**
     * Generated from protobuf field <code>uint32 advertise_tcp_port_to_client_as = 20;</code>
     */
    protected $advertise_tcp_port_to_client_as = 0;
    /**
     * Generated from protobuf field <code>string es_version = 21;</code>
     */
    protected $es_version = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Shared\UUID $instance_id
     *     @type int|string $time_stamp
     *     @type int $state
     *     @type bool $is_alive
     *     @type \GRPC\EventStore\Cluster\EndPoint $http_end_point
     *     @type \GRPC\EventStore\Cluster\EndPoint $internal_tcp
     *     @type \GRPC\EventStore\Cluster\EndPoint $external_tcp
     *     @type bool $internal_tcp_uses_tls
     *     @type bool $external_tcp_uses_tls
     *     @type int|string $last_commit_position
     *     @type int|string $writer_checkpoint
     *     @type int|string $chaser_checkpoint
     *     @type int|string $epoch_position
     *     @type int $epoch_number
     *     @type \GRPC\EventStore\Shared\UUID $epoch_id
     *     @type int $node_priority
     *     @type bool $is_read_only_replica
     *     @type string $advertise_host_to_client_as
     *     @type int $advertise_http_port_to_client_as
     *     @type int $advertise_tcp_port_to_client_as
     *     @type string $es_version
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID instance_id = 1;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getInstanceId()
    {
        return $this->instance_id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID instance_id = 1;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setInstanceId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->instance_id = $var;

        return $this;
    }

    public function hasInstanceId()
    {
        return isset($this->instance_id);
    }

    public function clearInstanceId()
    {
        unset($this->instance_id);
    }

    /**
     * Generated from protobuf field <code>int64 time_stamp = 2;</code>
     * @return int|string
     */
    public function getTimeStamp()
    {
        return $this->time_stamp;
    }

    /**
     * Generated from protobuf field <code>int64 time_stamp = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setTimeStamp($var)
    {
        GPBUtil::checkInt64($var);
        $this->time_stamp = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.MemberInfo.VNodeState state = 3;</code>
     * @return int
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.MemberInfo.VNodeState state = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkEnum($var, \GRPC\EventStore\Cluster\MemberInfo\VNodeState::class);
        $this->state = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_alive = 4;</code>
     * @return bool
     */
    public function getIsAlive()
    {
        return $this->is_alive;
    }

    /**
     * Generated from protobuf field <code>bool is_alive = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsAlive($var)
    {
        GPBUtil::checkBool($var);
        $this->is_alive = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint http_end_point = 5;</code>
     * @return \GRPC\EventStore\Cluster\EndPoint|null
     */
    public function getHttpEndPoint()
    {
        return $this->http_end_point;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint http_end_point = 5;</code>
     * @param \GRPC\EventStore\Cluster\EndPoint $var
     * @return $this
     */
    public function setHttpEndPoint($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Cluster\EndPoint::class);
        $this->http_end_point = $var;

        return $this;
    }

    public function hasHttpEndPoint()
    {
        return isset($this->http_end_point);
    }

    public function clearHttpEndPoint()
    {
        unset($this->http_end_point);
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint internal_tcp = 6;</code>
     * @return \GRPC\EventStore\Cluster\EndPoint|null
     */
    public function getInternalTcp()
    {
        return $this->internal_tcp;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint internal_tcp = 6;</code>
     * @param \GRPC\EventStore\Cluster\EndPoint $var
     * @return $this
     */
    public function setInternalTcp($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Cluster\EndPoint::class);
        $this->internal_tcp = $var;

        return $this;
    }

    public function hasInternalTcp()
    {
        return isset($this->internal_tcp);
    }

    public function clearInternalTcp()
    {
        unset($this->internal_tcp);
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint external_tcp = 7;</code>
     * @return \GRPC\EventStore\Cluster\EndPoint|null
     */
    public function getExternalTcp()
    {
        return $this->external_tcp;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint external_tcp = 7;</code>
     * @param \GRPC\EventStore\Cluster\EndPoint $var
     * @return $this
     */
    public function setExternalTcp($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Cluster\EndPoint::class);
        $this->external_tcp = $var;

        return $this;
    }

    public function hasExternalTcp()
    {
        return isset($this->external_tcp);
    }

    public function clearExternalTcp()
    {
        unset($this->external_tcp);
    }

    /**
     * Generated from protobuf field <code>bool internal_tcp_uses_tls = 8;</code>
     * @return bool
     */
    public function getInternalTcpUsesTls()
    {
        return $this->internal_tcp_uses_tls;
    }

    /**
     * Generated from protobuf field <code>bool internal_tcp_uses_tls = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setInternalTcpUsesTls($var)
    {
        GPBUtil::checkBool($var);
        $this->internal_tcp_uses_tls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool external_tcp_uses_tls = 9;</code>
     * @return bool
     */
    public function getExternalTcpUsesTls()
    {
        return $this->external_tcp_uses_tls;
    }

    /**
     * Generated from protobuf field <code>bool external_tcp_uses_tls = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setExternalTcpUsesTls($var)
    {
        GPBUtil::checkBool($var);
        $this->external_tcp_uses_tls = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 10;</code>
     * @return int|string
     */
    public function getLastCommitPosition()
    {
        return $this->last_commit_position;
    }

    /**
     * Generated from protobuf field <code>int64 last_commit_position = 10;</code>
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
     * Generated from protobuf field <code>int64 writer_checkpoint = 11;</code>
     * @return int|string
     */
    public function getWriterCheckpoint()
    {
        return $this->writer_checkpoint;
    }

    /**
     * Generated from protobuf field <code>int64 writer_checkpoint = 11;</code>
     * @param int|string $var
     * @return $this
     */
    public function setWriterCheckpoint($var)
    {
        GPBUtil::checkInt64($var);
        $this->writer_checkpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 chaser_checkpoint = 12;</code>
     * @return int|string
     */
    public function getChaserCheckpoint()
    {
        return $this->chaser_checkpoint;
    }

    /**
     * Generated from protobuf field <code>int64 chaser_checkpoint = 12;</code>
     * @param int|string $var
     * @return $this
     */
    public function setChaserCheckpoint($var)
    {
        GPBUtil::checkInt64($var);
        $this->chaser_checkpoint = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 epoch_position = 13;</code>
     * @return int|string
     */
    public function getEpochPosition()
    {
        return $this->epoch_position;
    }

    /**
     * Generated from protobuf field <code>int64 epoch_position = 13;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEpochPosition($var)
    {
        GPBUtil::checkInt64($var);
        $this->epoch_position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 epoch_number = 14;</code>
     * @return int
     */
    public function getEpochNumber()
    {
        return $this->epoch_number;
    }

    /**
     * Generated from protobuf field <code>int32 epoch_number = 14;</code>
     * @param int $var
     * @return $this
     */
    public function setEpochNumber($var)
    {
        GPBUtil::checkInt32($var);
        $this->epoch_number = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID epoch_id = 15;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getEpochId()
    {
        return $this->epoch_id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID epoch_id = 15;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setEpochId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->epoch_id = $var;

        return $this;
    }

    public function hasEpochId()
    {
        return isset($this->epoch_id);
    }

    public function clearEpochId()
    {
        unset($this->epoch_id);
    }

    /**
     * Generated from protobuf field <code>int32 node_priority = 16;</code>
     * @return int
     */
    public function getNodePriority()
    {
        return $this->node_priority;
    }

    /**
     * Generated from protobuf field <code>int32 node_priority = 16;</code>
     * @param int $var
     * @return $this
     */
    public function setNodePriority($var)
    {
        GPBUtil::checkInt32($var);
        $this->node_priority = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool is_read_only_replica = 17;</code>
     * @return bool
     */
    public function getIsReadOnlyReplica()
    {
        return $this->is_read_only_replica;
    }

    /**
     * Generated from protobuf field <code>bool is_read_only_replica = 17;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsReadOnlyReplica($var)
    {
        GPBUtil::checkBool($var);
        $this->is_read_only_replica = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string advertise_host_to_client_as = 18;</code>
     * @return string
     */
    public function getAdvertiseHostToClientAs()
    {
        return $this->advertise_host_to_client_as;
    }

    /**
     * Generated from protobuf field <code>string advertise_host_to_client_as = 18;</code>
     * @param string $var
     * @return $this
     */
    public function setAdvertiseHostToClientAs($var)
    {
        GPBUtil::checkString($var, True);
        $this->advertise_host_to_client_as = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 advertise_http_port_to_client_as = 19;</code>
     * @return int
     */
    public function getAdvertiseHttpPortToClientAs()
    {
        return $this->advertise_http_port_to_client_as;
    }

    /**
     * Generated from protobuf field <code>uint32 advertise_http_port_to_client_as = 19;</code>
     * @param int $var
     * @return $this
     */
    public function setAdvertiseHttpPortToClientAs($var)
    {
        GPBUtil::checkUint32($var);
        $this->advertise_http_port_to_client_as = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 advertise_tcp_port_to_client_as = 20;</code>
     * @return int
     */
    public function getAdvertiseTcpPortToClientAs()
    {
        return $this->advertise_tcp_port_to_client_as;
    }

    /**
     * Generated from protobuf field <code>uint32 advertise_tcp_port_to_client_as = 20;</code>
     * @param int $var
     * @return $this
     */
    public function setAdvertiseTcpPortToClientAs($var)
    {
        GPBUtil::checkUint32($var);
        $this->advertise_tcp_port_to_client_as = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string es_version = 21;</code>
     * @return string
     */
    public function getEsVersion()
    {
        return $this->es_version;
    }

    /**
     * Generated from protobuf field <code>string es_version = 21;</code>
     * @param string $var
     * @return $this
     */
    public function setEsVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->es_version = $var;

        return $this;
    }

}

