<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: redaction.proto

namespace GRPC\EventStore\Redaction;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.redaction.GetEventPositionResp</code>
 */
class GetEventPositionResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .event_store.client.redaction.EventPosition event_positions = 1;</code>
     */
    private $event_positions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\GRPC\EventStore\Redaction\EventPosition>|\Google\Protobuf\Internal\RepeatedField $event_positions
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Redaction::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.redaction.EventPosition event_positions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEventPositions()
    {
        return $this->event_positions;
    }

    /**
     * Generated from protobuf field <code>repeated .event_store.client.redaction.EventPosition event_positions = 1;</code>
     * @param array<\GRPC\EventStore\Redaction\EventPosition>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEventPositions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \GRPC\EventStore\Redaction\EventPosition::class);
        $this->event_positions = $arr;

        return $this;
    }

}

