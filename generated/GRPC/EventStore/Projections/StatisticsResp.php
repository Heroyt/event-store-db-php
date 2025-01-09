<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: projections.proto

namespace GRPC\EventStore\Projections;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.projections.StatisticsResp</code>
 */
class StatisticsResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.event_store.client.projections.StatisticsResp.Details details = 1;</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \GRPC\EventStore\Projections\StatisticsResp\Details $details
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Projections::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.event_store.client.projections.StatisticsResp.Details details = 1;</code>
     * @return \GRPC\EventStore\Projections\StatisticsResp\Details|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.projections.StatisticsResp.Details details = 1;</code>
     * @param \GRPC\EventStore\Projections\StatisticsResp\Details $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \GRPC\EventStore\Projections\StatisticsResp\Details::class);
        $this->details = $var;

        return $this;
    }

    public function hasDetails()
    {
        return isset($this->details);
    }

    public function clearDetails()
    {
        unset($this->details);
    }

}

