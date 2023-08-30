<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/accessapproval/v1/accessapproval.proto

namespace Google\Cloud\AccessApproval\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The properties associated with the resource of the request.
 *
 * Generated from protobuf message <code>google.cloud.accessapproval.v1.ResourceProperties</code>
 */
class ResourceProperties extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether an approval will exclude the descendants of the resource being
     * requested.
     *
     * Generated from protobuf field <code>bool excludes_descendants = 1;</code>
     */
    private $excludes_descendants = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $excludes_descendants
     *           Whether an approval will exclude the descendants of the resource being
     *           requested.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Accessapproval\V1\Accessapproval::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether an approval will exclude the descendants of the resource being
     * requested.
     *
     * Generated from protobuf field <code>bool excludes_descendants = 1;</code>
     * @return bool
     */
    public function getExcludesDescendants()
    {
        return $this->excludes_descendants;
    }

    /**
     * Whether an approval will exclude the descendants of the resource being
     * requested.
     *
     * Generated from protobuf field <code>bool excludes_descendants = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setExcludesDescendants($var)
    {
        GPBUtil::checkBool($var);
        $this->excludes_descendants = $var;

        return $this;
    }

}
