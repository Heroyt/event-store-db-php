<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: ClientMessageDtos.proto

namespace GRPC\EventStore\Client\DeletePersistentSubscriptionCompleted;

use UnexpectedValueException;

/**
 * Protobuf type <code>EventStore.Client.Messages.DeletePersistentSubscriptionCompleted.DeletePersistentSubscriptionResult</code>
 */
class DeletePersistentSubscriptionResult
{
    /**
     * Generated from protobuf enum <code>Success = 0;</code>
     */
    const Success = 0;
    /**
     * Generated from protobuf enum <code>DoesNotExist = 1;</code>
     */
    const DoesNotExist = 1;
    /**
     * Generated from protobuf enum <code>Fail = 2;</code>
     */
    const Fail = 2;
    /**
     * Generated from protobuf enum <code>AccessDenied = 3;</code>
     */
    const AccessDenied = 3;

    private static $valueToName = [
        self::Success => 'Success',
        self::DoesNotExist => 'DoesNotExist',
        self::Fail => 'Fail',
        self::AccessDenied => 'AccessDenied',
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

