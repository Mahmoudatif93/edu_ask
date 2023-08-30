<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/compute/v1/compute.proto

namespace Google\Cloud\Compute\V1\RouterNat;

use UnexpectedValueException;

/**
 * Specify the Nat option, which can take one of the following values: - ALL_SUBNETWORKS_ALL_IP_RANGES: All of the IP ranges in every Subnetwork are allowed to Nat. - ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES: All of the primary IP ranges in every Subnetwork are allowed to Nat. - LIST_OF_SUBNETWORKS: A list of Subnetworks are allowed to Nat (specified in the field subnetwork below) The default is SUBNETWORK_IP_RANGE_TO_NAT_OPTION_UNSPECIFIED. Note that if this field contains ALL_SUBNETWORKS_ALL_IP_RANGES or ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES, then there should not be any other Router.Nat section in any Router for this network in this region.
 *
 * Protobuf type <code>google.cloud.compute.v1.RouterNat.SourceSubnetworkIpRangesToNat</code>
 */
class SourceSubnetworkIpRangesToNat
{
    /**
     * A value indicating that the enum field is not set.
     *
     * Generated from protobuf enum <code>UNDEFINED_SOURCE_SUBNETWORK_IP_RANGES_TO_NAT = 0;</code>
     */
    const UNDEFINED_SOURCE_SUBNETWORK_IP_RANGES_TO_NAT = 0;
    /**
     * All the IP ranges in every Subnetwork are allowed to Nat.
     *
     * Generated from protobuf enum <code>ALL_SUBNETWORKS_ALL_IP_RANGES = 179964376;</code>
     */
    const ALL_SUBNETWORKS_ALL_IP_RANGES = 179964376;
    /**
     * All the primary IP ranges in every Subnetwork are allowed to Nat.
     *
     * Generated from protobuf enum <code>ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES = 185573819;</code>
     */
    const ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES = 185573819;
    /**
     * A list of Subnetworks are allowed to Nat (specified in the field subnetwork below)
     *
     * Generated from protobuf enum <code>LIST_OF_SUBNETWORKS = 517542270;</code>
     */
    const LIST_OF_SUBNETWORKS = 517542270;

    private static $valueToName = [
        self::UNDEFINED_SOURCE_SUBNETWORK_IP_RANGES_TO_NAT => 'UNDEFINED_SOURCE_SUBNETWORK_IP_RANGES_TO_NAT',
        self::ALL_SUBNETWORKS_ALL_IP_RANGES => 'ALL_SUBNETWORKS_ALL_IP_RANGES',
        self::ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES => 'ALL_SUBNETWORKS_ALL_PRIMARY_IP_RANGES',
        self::LIST_OF_SUBNETWORKS => 'LIST_OF_SUBNETWORKS',
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


