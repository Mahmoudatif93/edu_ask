<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.SubnetworksSetPrivateIpGoogleAccessRequest</code>
 */
class SubnetworksSetPrivateIpGoogleAccessRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>optional bool private_ip_google_access = 421491790;</code>
     */
    private $private_ip_google_access = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $private_ip_google_access
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>optional bool private_ip_google_access = 421491790;</code>
     * @return bool
     */
    public function getPrivateIpGoogleAccess()
    {
        return isset($this->private_ip_google_access) ? $this->private_ip_google_access : false;
    }

    public function hasPrivateIpGoogleAccess()
    {
        return isset($this->private_ip_google_access);
    }

    public function clearPrivateIpGoogleAccess()
    {
        unset($this->private_ip_google_access);
    }

    /**
     * Generated from protobuf field <code>optional bool private_ip_google_access = 421491790;</code>
     * @param bool $var
     * @return $this
     */
    public function setPrivateIpGoogleAccess($var)
    {
        GPBUtil::checkBool($var);
        $this->private_ip_google_access = $var;

        return $this;
    }

}

