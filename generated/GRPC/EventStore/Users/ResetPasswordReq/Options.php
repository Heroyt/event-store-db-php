<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: users.proto

namespace GRPC\EventStore\Users\ResetPasswordReq;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>event_store.client.users.ResetPasswordReq.Options</code>
 */
class Options extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string login_name = 1;</code>
     */
    protected $login_name = '';
    /**
     * Generated from protobuf field <code>string new_password = 2;</code>
     */
    protected $new_password = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $login_name
     *     @type string $new_password
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Users::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string login_name = 1;</code>
     * @return string
     */
    public function getLoginName()
    {
        return $this->login_name;
    }

    /**
     * Generated from protobuf field <code>string login_name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setLoginName($var)
    {
        GPBUtil::checkString($var, True);
        $this->login_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string new_password = 2;</code>
     * @return string
     */
    public function getNewPassword()
    {
        return $this->new_password;
    }

    /**
     * Generated from protobuf field <code>string new_password = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNewPassword($var)
    {
        GPBUtil::checkString($var, True);
        $this->new_password = $var;

        return $this;
    }

}

