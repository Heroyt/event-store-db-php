<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GRPC\EventStore\Projections\CreateReq\Options;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.projections.CreateReq.Options.Continuous</code>
 */
class Continuous extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>bool emit_enabled = 2;</code>
     */
    protected $emit_enabled = false;
    /**
     * Generated from protobuf field <code>bool track_emitted_streams = 3;</code>
     */
    protected $track_emitted_streams = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *     @type bool $emit_enabled
     *     @type bool $track_emitted_streams
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
     * Generated from protobuf field <code>bool emit_enabled = 2;</code>
     * @return bool
     */
    public function getEmitEnabled()
    {
        return $this->emit_enabled;
    }

    /**
     * Generated from protobuf field <code>bool emit_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setEmitEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->emit_enabled = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>bool track_emitted_streams = 3;</code>
     * @return bool
     */
    public function getTrackEmittedStreams()
    {
        return $this->track_emitted_streams;
    }

    /**
     * Generated from protobuf field <code>bool track_emitted_streams = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setTrackEmittedStreams($var)
    {
        GPBUtil::checkBool($var);
        $this->track_emitted_streams = $var;

        return $this;
    }

}

