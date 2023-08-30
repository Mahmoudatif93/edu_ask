<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents a Zone resource. A zone is a deployment area. These deployment areas are subsets of a region. For example the zone us-east1-a is located in the us-east1 region. For more information, read Regions and Zones.
 *
 * Generated from protobuf message <code>google.cloud.compute.v1.Zone</code>
 */
class Zone extends \Google\Protobuf\Internal\Message
{
    /**
     * [Output Only] Available cpu/platform selections for the zone.
     *
     * Generated from protobuf field <code>repeated string available_cpu_platforms = 175536531;</code>
     */
    private $available_cpu_platforms;
    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     */
    private $creation_timestamp = null;
    /**
     * [Output Only] The deprecation status associated with this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     */
    private $deprecated = null;
    /**
     * [Output Only] Textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     */
    private $description = null;
    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     */
    private $id = null;
    /**
     * [Output Only] Type of the resource. Always compute#zone for zones.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     */
    private $kind = null;
    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     */
    private $name = null;
    /**
     * [Output Only] Full URL reference to the region which hosts the zone.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     */
    private $region = null;
    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     */
    private $self_link = null;
    /**
     * [Output Only] Status of the zone, either UP or DOWN.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     */
    private $status = null;
    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool supports_pzs = 83983214;</code>
     */
    private $supports_pzs = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $available_cpu_platforms
     *           [Output Only] Available cpu/platform selections for the zone.
     *     @type string $creation_timestamp
     *           [Output Only] Creation timestamp in RFC3339 text format.
     *     @type \Google\Cloud\Compute\V1\DeprecationStatus $deprecated
     *           [Output Only] The deprecation status associated with this zone.
     *     @type string $description
     *           [Output Only] Textual description of the resource.
     *     @type int|string $id
     *           [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *     @type string $kind
     *           [Output Only] Type of the resource. Always compute#zone for zones.
     *     @type string $name
     *           [Output Only] Name of the resource.
     *     @type string $region
     *           [Output Only] Full URL reference to the region which hosts the zone.
     *     @type string $self_link
     *           [Output Only] Server-defined URL for the resource.
     *     @type string $status
     *           [Output Only] Status of the zone, either UP or DOWN.
     *           Check the Status enum for the list of possible values.
     *     @type bool $supports_pzs
     *           [Output Only] Reserved for future use.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Compute\V1\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * [Output Only] Available cpu/platform selections for the zone.
     *
     * Generated from protobuf field <code>repeated string available_cpu_platforms = 175536531;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getAvailableCpuPlatforms()
    {
        return $this->available_cpu_platforms;
    }

    /**
     * [Output Only] Available cpu/platform selections for the zone.
     *
     * Generated from protobuf field <code>repeated string available_cpu_platforms = 175536531;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setAvailableCpuPlatforms($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->available_cpu_platforms = $arr;

        return $this;
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @return string
     */
    public function getCreationTimestamp()
    {
        return isset($this->creation_timestamp) ? $this->creation_timestamp : '';
    }

    public function hasCreationTimestamp()
    {
        return isset($this->creation_timestamp);
    }

    public function clearCreationTimestamp()
    {
        unset($this->creation_timestamp);
    }

    /**
     * [Output Only] Creation timestamp in RFC3339 text format.
     *
     * Generated from protobuf field <code>optional string creation_timestamp = 30525366;</code>
     * @param string $var
     * @return $this
     */
    public function setCreationTimestamp($var)
    {
        GPBUtil::checkString($var, True);
        $this->creation_timestamp = $var;

        return $this;
    }

    /**
     * [Output Only] The deprecation status associated with this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     * @return \Google\Cloud\Compute\V1\DeprecationStatus|null
     */
    public function getDeprecated()
    {
        return $this->deprecated;
    }

    public function hasDeprecated()
    {
        return isset($this->deprecated);
    }

    public function clearDeprecated()
    {
        unset($this->deprecated);
    }

    /**
     * [Output Only] The deprecation status associated with this zone.
     *
     * Generated from protobuf field <code>optional .google.cloud.compute.v1.DeprecationStatus deprecated = 515138995;</code>
     * @param \Google\Cloud\Compute\V1\DeprecationStatus $var
     * @return $this
     */
    public function setDeprecated($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Compute\V1\DeprecationStatus::class);
        $this->deprecated = $var;

        return $this;
    }

    /**
     * [Output Only] Textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @return string
     */
    public function getDescription()
    {
        return isset($this->description) ? $this->description : '';
    }

    public function hasDescription()
    {
        return isset($this->description);
    }

    public function clearDescription()
    {
        unset($this->description);
    }

    /**
     * [Output Only] Textual description of the resource.
     *
     * Generated from protobuf field <code>optional string description = 422937596;</code>
     * @param string $var
     * @return $this
     */
    public function setDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->description = $var;

        return $this;
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @return int|string
     */
    public function getId()
    {
        return isset($this->id) ? $this->id : 0;
    }

    public function hasId()
    {
        return isset($this->id);
    }

    public function clearId()
    {
        unset($this->id);
    }

    /**
     * [Output Only] The unique identifier for the resource. This identifier is defined by the server.
     *
     * Generated from protobuf field <code>optional uint64 id = 3355;</code>
     * @param int|string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkUint64($var);
        $this->id = $var;

        return $this;
    }

    /**
     * [Output Only] Type of the resource. Always compute#zone for zones.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @return string
     */
    public function getKind()
    {
        return isset($this->kind) ? $this->kind : '';
    }

    public function hasKind()
    {
        return isset($this->kind);
    }

    public function clearKind()
    {
        unset($this->kind);
    }

    /**
     * [Output Only] Type of the resource. Always compute#zone for zones.
     *
     * Generated from protobuf field <code>optional string kind = 3292052;</code>
     * @param string $var
     * @return $this
     */
    public function setKind($var)
    {
        GPBUtil::checkString($var, True);
        $this->kind = $var;

        return $this;
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @return string
     */
    public function getName()
    {
        return isset($this->name) ? $this->name : '';
    }

    public function hasName()
    {
        return isset($this->name);
    }

    public function clearName()
    {
        unset($this->name);
    }

    /**
     * [Output Only] Name of the resource.
     *
     * Generated from protobuf field <code>optional string name = 3373707;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * [Output Only] Full URL reference to the region which hosts the zone.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @return string
     */
    public function getRegion()
    {
        return isset($this->region) ? $this->region : '';
    }

    public function hasRegion()
    {
        return isset($this->region);
    }

    public function clearRegion()
    {
        unset($this->region);
    }

    /**
     * [Output Only] Full URL reference to the region which hosts the zone.
     *
     * Generated from protobuf field <code>optional string region = 138946292;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->region = $var;

        return $this;
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @return string
     */
    public function getSelfLink()
    {
        return isset($this->self_link) ? $this->self_link : '';
    }

    public function hasSelfLink()
    {
        return isset($this->self_link);
    }

    public function clearSelfLink()
    {
        unset($this->self_link);
    }

    /**
     * [Output Only] Server-defined URL for the resource.
     *
     * Generated from protobuf field <code>optional string self_link = 456214797;</code>
     * @param string $var
     * @return $this
     */
    public function setSelfLink($var)
    {
        GPBUtil::checkString($var, True);
        $this->self_link = $var;

        return $this;
    }

    /**
     * [Output Only] Status of the zone, either UP or DOWN.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @return string
     */
    public function getStatus()
    {
        return isset($this->status) ? $this->status : '';
    }

    public function hasStatus()
    {
        return isset($this->status);
    }

    public function clearStatus()
    {
        unset($this->status);
    }

    /**
     * [Output Only] Status of the zone, either UP or DOWN.
     * Check the Status enum for the list of possible values.
     *
     * Generated from protobuf field <code>optional string status = 181260274;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->status = $var;

        return $this;
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool supports_pzs = 83983214;</code>
     * @return bool
     */
    public function getSupportsPzs()
    {
        return isset($this->supports_pzs) ? $this->supports_pzs : false;
    }

    public function hasSupportsPzs()
    {
        return isset($this->supports_pzs);
    }

    public function clearSupportsPzs()
    {
        unset($this->supports_pzs);
    }

    /**
     * [Output Only] Reserved for future use.
     *
     * Generated from protobuf field <code>optional bool supports_pzs = 83983214;</code>
     * @param bool $var
     * @return $this
     */
    public function setSupportsPzs($var)
    {
        GPBUtil::checkBool($var);
        $this->supports_pzs = $var;

        return $this;
    }

}

