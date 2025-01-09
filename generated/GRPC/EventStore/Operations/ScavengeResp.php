<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: operations.proto

namespace GRPC\EventStore\Operations;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.operations.ScavengeResp</code>
 */
class ScavengeResp extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string scavenge_id = 1;</code>
     */
    protected $scavenge_id = '';
    /**
     * Generated from protobuf field <code>.event_store.client.operations.ScavengeResp.ScavengeResult scavenge_result = 2;</code>
     */
    protected $scavenge_result = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $scavenge_id
     *     @type int $scavenge_result
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string scavenge_id = 1;</code>
     * @return string
     */
    public function getScavengeId()
    {
        return $this->scavenge_id;
    }

    /**
     * Generated from protobuf field <code>string scavenge_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setScavengeId($var)
    {
        GPBUtil::checkString($var, True);
        $this->scavenge_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.operations.ScavengeResp.ScavengeResult scavenge_result = 2;</code>
     * @return int
     */
    public function getScavengeResult()
    {
        return $this->scavenge_result;
    }

    /**
     * Generated from protobuf field <code>.event_store.client.operations.ScavengeResp.ScavengeResult scavenge_result = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setScavengeResult($var)
    {
        GPBUtil::checkEnum($var, \GRPC\EventStore\Operations\ScavengeResp\ScavengeResult::class);
        $this->scavenge_result = $var;

        return $this;
    }

}

