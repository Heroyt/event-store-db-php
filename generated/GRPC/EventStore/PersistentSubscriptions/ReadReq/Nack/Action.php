<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: persistent.proto

namespace GRPC\EventStore\PersistentSubscriptions\ReadReq\Nack;

use UnexpectedValueException;

/**
 * Protobuf type <code>event_store.client.persistent_subscriptions.ReadReq.Nack.Action</code>
 */
class Action
{
    /**
     * Generated from protobuf enum <code>Unknown = 0;</code>
     */
    const Unknown = 0;
    /**
     * Generated from protobuf enum <code>Park = 1;</code>
     */
    const Park = 1;
    /**
     * Generated from protobuf enum <code>Retry = 2;</code>
     */
    const Retry = 2;
    /**
     * Generated from protobuf enum <code>Skip = 3;</code>
     */
    const Skip = 3;
    /**
     * Generated from protobuf enum <code>Stop = 4;</code>
     */
    const Stop = 4;

    private static $valueToName = [
        self::Unknown => 'Unknown',
        self::Park => 'Park',
        self::Retry => 'Retry',
        self::Skip => 'Skip',
        self::Stop => 'Stop',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}
