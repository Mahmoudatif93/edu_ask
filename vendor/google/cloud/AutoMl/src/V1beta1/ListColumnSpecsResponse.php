<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/automl/v1beta1/service.proto

namespace Google\Cloud\AutoMl\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Response message for [AutoMl.ListColumnSpecs][google.cloud.automl.v1beta1.AutoMl.ListColumnSpecs].
 *
 * Generated from protobuf message <code>google.cloud.automl.v1beta1.ListColumnSpecsResponse</code>
 */
class ListColumnSpecsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The column specs read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec column_specs = 1;</code>
     */
    private $column_specs;
    /**
     * A token to retrieve next page of results.
     * Pass to [ListColumnSpecsRequest.page_token][google.cloud.automl.v1beta1.ListColumnSpecsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    private $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\AutoMl\V1beta1\ColumnSpec>|\Google\Protobuf\Internal\RepeatedField $column_specs
     *           The column specs read.
     *     @type string $next_page_token
     *           A token to retrieve next page of results.
     *           Pass to [ListColumnSpecsRequest.page_token][google.cloud.automl.v1beta1.ListColumnSpecsRequest.page_token] to obtain that page.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Automl\V1Beta1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * The column specs read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec column_specs = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getColumnSpecs()
    {
        return $this->column_specs;
    }

    /**
     * The column specs read.
     *
     * Generated from protobuf field <code>repeated .google.cloud.automl.v1beta1.ColumnSpec column_specs = 1;</code>
     * @param array<\Google\Cloud\AutoMl\V1beta1\ColumnSpec>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setColumnSpecs($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\AutoMl\V1beta1\ColumnSpec::class);
        $this->column_specs = $arr;

        return $this;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to [ListColumnSpecsRequest.page_token][google.cloud.automl.v1beta1.ListColumnSpecsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * A token to retrieve next page of results.
     * Pass to [ListColumnSpecsRequest.page_token][google.cloud.automl.v1beta1.ListColumnSpecsRequest.page_token] to obtain that page.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}
