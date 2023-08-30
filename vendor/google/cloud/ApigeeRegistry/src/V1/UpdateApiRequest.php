<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/apigeeregistry/v1/registry_service.proto

namespace Google\Cloud\ApigeeRegistry\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for UpdateApi.
 *
 * Generated from protobuf message <code>google.cloud.apigeeregistry.v1.UpdateApiRequest</code>
 */
class UpdateApiRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The API to update.
     * The `name` field is used to identify the API to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $api = null;
    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     */
    private $update_mask = null;
    /**
     * If set to true, and the API is not found, a new API will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     */
    private $allow_missing = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\ApigeeRegistry\V1\Api $api
     *           Required. The API to update.
     *           The `name` field is used to identify the API to update.
     *           Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *     @type \Google\Protobuf\FieldMask $update_mask
     *           The list of fields to be updated. If omitted, all fields are updated that
     *           are set in the request message (fields set to default values are ignored).
     *           If an asterisk "*" is specified, all fields are updated, including fields
     *           that are unspecified/default in the request.
     *     @type bool $allow_missing
     *           If set to true, and the API is not found, a new API will be created.
     *           In this situation, `update_mask` is ignored.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Apigeeregistry\V1\RegistryService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The API to update.
     * The `name` field is used to identify the API to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\ApigeeRegistry\V1\Api|null
     */
    public function getApi()
    {
        return $this->api;
    }

    public function hasApi()
    {
        return isset($this->api);
    }

    public function clearApi()
    {
        unset($this->api);
    }

    /**
     * Required. The API to update.
     * The `name` field is used to identify the API to update.
     * Format: `projects/&#42;&#47;locations/&#42;&#47;apis/&#42;`
     *
     * Generated from protobuf field <code>.google.cloud.apigeeregistry.v1.Api api = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\ApigeeRegistry\V1\Api $var
     * @return $this
     */
    public function setApi($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\ApigeeRegistry\V1\Api::class);
        $this->api = $var;

        return $this;
    }

    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getUpdateMask()
    {
        return $this->update_mask;
    }

    public function hasUpdateMask()
    {
        return isset($this->update_mask);
    }

    public function clearUpdateMask()
    {
        unset($this->update_mask);
    }

    /**
     * The list of fields to be updated. If omitted, all fields are updated that
     * are set in the request message (fields set to default values are ignored).
     * If an asterisk "*" is specified, all fields are updated, including fields
     * that are unspecified/default in the request.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask update_mask = 2;</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setUpdateMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->update_mask = $var;

        return $this;
    }

    /**
     * If set to true, and the API is not found, a new API will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @return bool
     */
    public function getAllowMissing()
    {
        return $this->allow_missing;
    }

    /**
     * If set to true, and the API is not found, a new API will be created.
     * In this situation, `update_mask` is ignored.
     *
     * Generated from protobuf field <code>bool allow_missing = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowMissing($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_missing = $var;

        return $this;
    }

}
