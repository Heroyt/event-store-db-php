<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cluster.proto

namespace GRPC\EventStore\Cluster;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.cluster.AcceptRequest</code>
 */
class AcceptRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.UUID server_id = 1;</code>
     */
    protected $server_id = null;
    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint server_http = 2;</code>
     */
    protected $server_http = null;
    /**
     * Generated from protobuf field <code>.event_store.client.UUID leader_id = 3;</code>
     */
    protected $leader_id = null;
    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint leader_http = 4;</code>
     */
    protected $leader_http = null;
    /**
     * Generated from protobuf field <code>int32 view = 5;</code>
     */
    protected $view = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Shared\UUID $server_id
     *     @type \GRPC\EventStore\Cluster\EndPoint $server_http
     *     @type \GRPC\EventStore\Shared\UUID $leader_id
     *     @type \GRPC\EventStore\Cluster\EndPoint $leader_http
     *     @type int $view
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cluster::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID server_id = 1;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getServerId()
    {
        return $this->server_id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID server_id = 1;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setServerId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->server_id = $var;

        return $this;
    }

    public function hasServerId()
    {
        return isset($this->server_id);
    }

    public function clearServerId()
    {
        unset($this->server_id);
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint server_http = 2;</code>
     * @return \GRPC\EventStore\Cluster\EndPoint|null
     */
    public function getServerHttp()
    {
        return $this->server_http;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint server_http = 2;</code>
     * @param \GRPC\EventStore\Cluster\EndPoint $var
     * @return $this
     */
    public function setServerHttp($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Cluster\EndPoint::class);
        $this->server_http = $var;

        return $this;
    }

    public function hasServerHttp()
    {
        return isset($this->server_http);
    }

    public function clearServerHttp()
    {
        unset($this->server_http);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID leader_id = 3;</code>
     * @return \GRPC\EventStore\Shared\UUID|null
     */
    public function getLeaderId()
    {
        return $this->leader_id;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.UUID leader_id = 3;</code>
     * @param \GRPC\EventStore\Shared\UUID $var
     * @return $this
     */
    public function setLeaderId($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\UUID::class);
        $this->leader_id = $var;

        return $this;
    }

    public function hasLeaderId()
    {
        return isset($this->leader_id);
    }

    public function clearLeaderId()
    {
        unset($this->leader_id);
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint leader_http = 4;</code>
     * @return \GRPC\EventStore\Cluster\EndPoint|null
     */
    public function getLeaderHttp()
    {
        return $this->leader_http;
    }

    /**
     * Generated from protobuf field <code>.event_store.cluster.EndPoint leader_http = 4;</code>
     * @param \GRPC\EventStore\Cluster\EndPoint $var
     * @return $this
     */
    public function setLeaderHttp($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Cluster\EndPoint::class);
        $this->leader_http = $var;

        return $this;
    }

    public function hasLeaderHttp()
    {
        return isset($this->leader_http);
    }

    public function clearLeaderHttp()
    {
        unset($this->leader_http);
    }

    /**
     * Generated from protobuf field <code>int32 view = 5;</code>
     * @return int
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Generated from protobuf field <code>int32 view = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setView($var)
    {
        GPBUtil::checkInt32($var);
        $this->view = $var;

        return $this;
    }

}

