<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1\ReauthSettings;

use UnexpectedValueException;

/**
 * Type of policy in the case of hierarchical policies.
 *
 * Protobuf type <code>google.cloud.iap.v1.ReauthSettings.PolicyType</code>
 */
class PolicyType
{
    /**
     * Default value. This value is unused.
     *
     * Generated from protobuf enum <code>POLICY_TYPE_UNSPECIFIED = 0;</code>
     */
    const POLICY_TYPE_UNSPECIFIED = 0;
    /**
     * This policy acts as a minimum to other policies, lower in the hierarchy.
     * Effective policy may only be the same or stricter.
     *
     * Generated from protobuf enum <code>MINIMUM = 1;</code>
     */
    const MINIMUM = 1;
    /**
     * This policy acts as a default if no other reauth policy is set.
     *
     * Generated from protobuf enum <code>DEFAULT = 2;</code>
     */
    const PBDEFAULT = 2;

    private static $valueToName = [
        self::POLICY_TYPE_UNSPECIFIED => 'POLICY_TYPE_UNSPECIFIED',
        self::MINIMUM => 'MINIMUM',
        self::PBDEFAULT => 'DEFAULT',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}


