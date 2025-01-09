<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: status.proto

namespace Google\Rpc;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The `Status` type defines a logical error model that is suitable for
 * different programming environments, including REST APIs and RPC APIs. It is
 * used by [gRPC](https://github.com/grpc). Each `Status` message contains
 * three pieces of data: error code, error message, and error details.
 * You can find out more about this error model and how to work with it in the
 * [API Design Guide](https://cloud.google.com/apis/design/errors).
 *
 * Generated from protobuf message <code>google.rpc.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * The status code, which should be an enum value of [google.rpc.Code][google.rpc.Code].
     *
     * Generated from protobuf field <code>.google.rpc.Code code = 1;</code>
     */
    protected $code = 0;
    /**
     * A developer-facing error message, which should be in English. Any
     * user-facing error message should be localized and sent in the
     * [google.rpc.Status.details][google.rpc.Status.details] field, or localized by the client.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     */
    protected $message = '';
    /**
     * A list of messages that carry the error details.  There is a common set of
     * message types for APIs to use.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 3;</code>
     */
    protected $details = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $code
     *           The status code, which should be an enum value of [google.rpc.Code][google.rpc.Code].
     *     @type string $message
     *           A developer-facing error message, which should be in English. Any
     *           user-facing error message should be localized and sent in the
     *           [google.rpc.Status.details][google.rpc.Status.details] field, or localized by the client.
     *     @type \Google\Protobuf\Any $details
     *           A list of messages that carry the error details.  There is a common set of
     *           message types for APIs to use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Status::initOnce();
        parent::__construct($data);
    }

    /**
     * The status code, which should be an enum value of [google.rpc.Code][google.rpc.Code].
     *
     * Generated from protobuf field <code>.google.rpc.Code code = 1;</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * The status code, which should be an enum value of [google.rpc.Code][google.rpc.Code].
     *
     * Generated from protobuf field <code>.google.rpc.Code code = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkEnum($var, \Google\Rpc\Code::class);
        $this->code = $var;

        return $this;
    }

    /**
     * A developer-facing error message, which should be in English. Any
     * user-facing error message should be localized and sent in the
     * [google.rpc.Status.details][google.rpc.Status.details] field, or localized by the client.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * A developer-facing error message, which should be in English. Any
     * user-facing error message should be localized and sent in the
     * [google.rpc.Status.details][google.rpc.Status.details] field, or localized by the client.
     *
     * Generated from protobuf field <code>string message = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * A list of messages that carry the error details.  There is a common set of
     * message types for APIs to use.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 3;</code>
     * @return \Google\Protobuf\Any|null
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * A list of messages that carry the error details.  There is a common set of
     * message types for APIs to use.
     *
     * Generated from protobuf field <code>.google.protobuf.Any details = 3;</code>
     * @param \Google\Protobuf\Any $var
     * @return $this
     */
    public function setDetails($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Any::class);
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

