<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/privacy/dlp/v2/dlp.proto

namespace Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails\LDiversityResult;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The set of columns' values that share the same ldiversity value.
 *
 * Generated from protobuf message <code>google.privacy.dlp.v2.AnalyzeDataSourceRiskDetails.LDiversityResult.LDiversityEquivalenceClass</code>
 */
class LDiversityEquivalenceClass extends \Google\Protobuf\Internal\Message
{
    /**
     * Quasi-identifier values defining the k-anonymity equivalence
     * class. The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     */
    private $quasi_ids_values;
    /**
     * Size of the k-anonymity equivalence class.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     */
    private $equivalence_class_size = 0;
    /**
     * Number of distinct sensitive values in this equivalence class.
     *
     * Generated from protobuf field <code>int64 num_distinct_sensitive_values = 3;</code>
     */
    private $num_distinct_sensitive_values = 0;
    /**
     * Estimated frequencies of top sensitive values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency top_sensitive_values = 4;</code>
     */
    private $top_sensitive_values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $quasi_ids_values
     *           Quasi-identifier values defining the k-anonymity equivalence
     *           class. The order is always the same as the original request.
     *     @type int|string $equivalence_class_size
     *           Size of the k-anonymity equivalence class.
     *     @type int|string $num_distinct_sensitive_values
     *           Number of distinct sensitive values in this equivalence class.
     *     @type array<\Google\Cloud\Dlp\V2\ValueFrequency>|\Google\Protobuf\Internal\RepeatedField $top_sensitive_values
     *           Estimated frequencies of top sensitive values.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Privacy\Dlp\V2\Dlp::initOnce();
        parent::__construct($data);
    }

    /**
     * Quasi-identifier values defining the k-anonymity equivalence
     * class. The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getQuasiIdsValues()
    {
        return $this->quasi_ids_values;
    }

    /**
     * Quasi-identifier values defining the k-anonymity equivalence
     * class. The order is always the same as the original request.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.Value quasi_ids_values = 1;</code>
     * @param array<\Google\Cloud\Dlp\V2\Value>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setQuasiIdsValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\Value::class);
        $this->quasi_ids_values = $arr;

        return $this;
    }

    /**
     * Size of the k-anonymity equivalence class.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     * @return int|string
     */
    public function getEquivalenceClassSize()
    {
        return $this->equivalence_class_size;
    }

    /**
     * Size of the k-anonymity equivalence class.
     *
     * Generated from protobuf field <code>int64 equivalence_class_size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setEquivalenceClassSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->equivalence_class_size = $var;

        return $this;
    }

    /**
     * Number of distinct sensitive values in this equivalence class.
     *
     * Generated from protobuf field <code>int64 num_distinct_sensitive_values = 3;</code>
     * @return int|string
     */
    public function getNumDistinctSensitiveValues()
    {
        return $this->num_distinct_sensitive_values;
    }

    /**
     * Number of distinct sensitive values in this equivalence class.
     *
     * Generated from protobuf field <code>int64 num_distinct_sensitive_values = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNumDistinctSensitiveValues($var)
    {
        GPBUtil::checkInt64($var);
        $this->num_distinct_sensitive_values = $var;

        return $this;
    }

    /**
     * Estimated frequencies of top sensitive values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency top_sensitive_values = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTopSensitiveValues()
    {
        return $this->top_sensitive_values;
    }

    /**
     * Estimated frequencies of top sensitive values.
     *
     * Generated from protobuf field <code>repeated .google.privacy.dlp.v2.ValueFrequency top_sensitive_values = 4;</code>
     * @param array<\Google\Cloud\Dlp\V2\ValueFrequency>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTopSensitiveValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\Dlp\V2\ValueFrequency::class);
        $this->top_sensitive_values = $arr;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(LDiversityEquivalenceClass::class, \Google\Cloud\Dlp\V2\AnalyzeDataSourceRiskDetails_LDiversityResult_LDiversityEquivalenceClass::class);

