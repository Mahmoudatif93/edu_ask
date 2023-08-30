<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/securitycenter/v1/vulnerability.proto

namespace Google\Cloud\SecurityCenter\V1\Cvssv3;

use UnexpectedValueException;

/**
 * This metric describes the level of privileges an attacker must possess
 * before successfully exploiting the vulnerability.
 *
 * Protobuf type <code>google.cloud.securitycenter.v1.Cvssv3.PrivilegesRequired</code>
 */
class PrivilegesRequired
{
    /**
     * Invalid value.
     *
     * Generated from protobuf enum <code>PRIVILEGES_REQUIRED_UNSPECIFIED = 0;</code>
     */
    const PRIVILEGES_REQUIRED_UNSPECIFIED = 0;
    /**
     * The attacker is unauthorized prior to attack, and therefore does not
     * require any access to settings or files of the vulnerable system to
     * carry out an attack.
     *
     * Generated from protobuf enum <code>PRIVILEGES_REQUIRED_NONE = 1;</code>
     */
    const PRIVILEGES_REQUIRED_NONE = 1;
    /**
     * The attacker requires privileges that provide basic user capabilities
     * that could normally affect only settings and files owned by a user.
     * Alternatively, an attacker with Low privileges has the ability to access
     * only non-sensitive resources.
     *
     * Generated from protobuf enum <code>PRIVILEGES_REQUIRED_LOW = 2;</code>
     */
    const PRIVILEGES_REQUIRED_LOW = 2;
    /**
     * The attacker requires privileges that provide significant (e.g.,
     * administrative) control over the vulnerable component allowing access to
     * component-wide settings and files.
     *
     * Generated from protobuf enum <code>PRIVILEGES_REQUIRED_HIGH = 3;</code>
     */
    const PRIVILEGES_REQUIRED_HIGH = 3;

    private static $valueToName = [
        self::PRIVILEGES_REQUIRED_UNSPECIFIED => 'PRIVILEGES_REQUIRED_UNSPECIFIED',
        self::PRIVILEGES_REQUIRED_NONE => 'PRIVILEGES_REQUIRED_NONE',
        self::PRIVILEGES_REQUIRED_LOW => 'PRIVILEGES_REQUIRED_LOW',
        self::PRIVILEGES_REQUIRED_HIGH => 'PRIVILEGES_REQUIRED_HIGH',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PrivilegesRequired::class, \Google\Cloud\SecurityCenter\V1\Cvssv3_PrivilegesRequired::class);

