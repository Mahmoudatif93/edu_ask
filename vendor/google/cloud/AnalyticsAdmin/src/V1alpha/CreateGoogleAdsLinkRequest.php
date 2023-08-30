<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for CreateGoogleAdsLink RPC
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateGoogleAdsLinkRequest</code>
 */
class CreateGoogleAdsLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    private $parent = '';
    /**
     * Required. The GoogleAdsLink to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $google_ads_link = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Example format: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\GoogleAdsLink $google_ads_link
     *           Required. The GoogleAdsLink to create.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Example format: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The GoogleAdsLink to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\GoogleAdsLink|null
     */
    public function getGoogleAdsLink()
    {
        return $this->google_ads_link;
    }

    public function hasGoogleAdsLink()
    {
        return isset($this->google_ads_link);
    }

    public function clearGoogleAdsLink()
    {
        unset($this->google_ads_link);
    }

    /**
     * Required. The GoogleAdsLink to create.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.GoogleAdsLink google_ads_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\GoogleAdsLink $var
     * @return $this
     */
    public function setGoogleAdsLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\GoogleAdsLink::class);
        $this->google_ads_link = $var;

        return $this;
    }

}
