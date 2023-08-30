<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An [ObjectId][google.cloud.security.privateca.v1.ObjectId] specifies an object identifier (OID). These provide context
 * and describe types in ASN.1 messages.
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.ObjectId</code>
 */
class ObjectId extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The parts of an OID path. The most significant parts of the path come
     * first.
     *
     * Generated from protobuf field <code>repeated int32 object_id_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $object_id_path;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<int>|\Google\Protobuf\Internal\RepeatedField $object_id_path
     *           Required. The parts of an OID path. The most significant parts of the path come
     *           first.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The parts of an OID path. The most significant parts of the path come
     * first.
     *
     * Generated from protobuf field <code>repeated int32 object_id_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getObjectIdPath()
    {
        return $this->object_id_path;
    }

    /**
     * Required. The parts of an OID path. The most significant parts of the path come
     * first.
     *
     * Generated from protobuf field <code>repeated int32 object_id_path = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param array<int>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setObjectIdPath($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::INT32);
        $this->object_id_path = $arr;

        return $this;
    }

}

