<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/enums/product_bidding_category_status.proto

namespace Google\Ads\GoogleAds\V6\Enums\ProductBiddingCategoryStatusEnum;

use UnexpectedValueException;

/**
 * Enum describing the status of the product bidding category.
 *
 * Protobuf type <code>google.ads.googleads.v6.enums.ProductBiddingCategoryStatusEnum.ProductBiddingCategoryStatus</code>
 */
class ProductBiddingCategoryStatus
{
    /**
     * Not specified.
     *
     * Generated from protobuf enum <code>UNSPECIFIED = 0;</code>
     */
    const UNSPECIFIED = 0;
    /**
     * Used for return value only. Represents value unknown in this version.
     *
     * Generated from protobuf enum <code>UNKNOWN = 1;</code>
     */
    const UNKNOWN = 1;
    /**
     * The category is active and can be used for bidding.
     *
     * Generated from protobuf enum <code>ACTIVE = 2;</code>
     */
    const ACTIVE = 2;
    /**
     * The category is obsolete. Used only for reporting purposes.
     *
     * Generated from protobuf enum <code>OBSOLETE = 3;</code>
     */
    const OBSOLETE = 3;

    private static $valueToName = [
        self::UNSPECIFIED => 'UNSPECIFIED',
        self::UNKNOWN => 'UNKNOWN',
        self::ACTIVE => 'ACTIVE',
        self::OBSOLETE => 'OBSOLETE',
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
class_alias(ProductBiddingCategoryStatus::class, \Google\Ads\GoogleAds\V6\Enums\ProductBiddingCategoryStatusEnum_ProductBiddingCategoryStatus::class);

