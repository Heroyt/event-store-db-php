<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GRPC\EventStore\Projections\UpdateReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.projections.UpdateReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string query = 2;</code>
     */
    protected $query = '';
    protected $emit_option;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type string $query
     *     @type bool $emit_enabled
     *     @type \GRPC\EventStore\Shared\PBEmpty $no_emit_options
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Projections::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string query = 2;</code>
     * @return string
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * Generated from protobuf field <code>string query = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setQuery($var)
    {
        GPBUtil::checkString($var, True);
        $this->query = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool emit_enabled = 3;</code>
     * @return bool
     */
    public function getEmitEnabled()
    {
        return $this->readOneof(3);
    }

    public function hasEmitEnabled()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>bool emit_enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmitEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_emit_options = 4;</code>
     * @return \GRPC\EventStore\Shared\PBEmpty|null
     */
    public function getNoEmitOptions()
    {
        return $this->readOneof(4);
    }

    public function hasNoEmitOptions()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.Empty no_emit_options = 4;</code>
     * @param \GRPC\EventStore\Shared\PBEmpty $var
     * @return $this
     */
    public function setNoEmitOptions($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Shared\PBEmpty::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getEmitOption()
    {
        return $this->whichOneof("emit_option");
    }

}
