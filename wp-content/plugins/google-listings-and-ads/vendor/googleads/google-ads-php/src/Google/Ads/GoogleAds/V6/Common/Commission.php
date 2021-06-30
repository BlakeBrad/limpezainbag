<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v6/common/bidding.proto

namespace Google\Ads\GoogleAds\V6\Common;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Commission is an automatic bidding strategy in which the advertiser pays a
 * certain portion of the conversion value.
 *
 * Generated from protobuf message <code>google.ads.googleads.v6.common.Commission</code>
 */
class Commission extends \Google\Protobuf\Internal\Message
{
    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>int64 commission_rate_micros = 2;</code>
     */
    protected $commission_rate_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $commission_rate_micros
     *           Commission rate defines the portion of the conversion value that the
     *           advertiser will be billed. A commission rate of x should be passed into
     *           this field as (x * 1,000,000). For example, 106,000 represents a commission
     *           rate of 0.106 (10.6%).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V6\Common\Bidding::initOnce();
        parent::__construct($data);
    }

    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>int64 commission_rate_micros = 2;</code>
     * @return int|string
     */
    public function getCommissionRateMicros()
    {
        return isset($this->commission_rate_micros) ? $this->commission_rate_micros : 0;
    }

    public function hasCommissionRateMicros()
    {
        return isset($this->commission_rate_micros);
    }

    public function clearCommissionRateMicros()
    {
        unset($this->commission_rate_micros);
    }

    /**
     * Commission rate defines the portion of the conversion value that the
     * advertiser will be billed. A commission rate of x should be passed into
     * this field as (x * 1,000,000). For example, 106,000 represents a commission
     * rate of 0.106 (10.6%).
     *
     * Generated from protobuf field <code>int64 commission_rate_micros = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCommissionRateMicros($var)
    {
        GPBUtil::checkInt64($var);
        $this->commission_rate_micros = $var;

        return $this;
    }

}

