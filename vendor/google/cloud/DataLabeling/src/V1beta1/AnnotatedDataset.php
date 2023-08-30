<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/datalabeling/v1beta1/dataset.proto

namespace Google\Cloud\DataLabeling\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * AnnotatedDataset is a set holding annotations for data in a Dataset. Each
 * labeling task will generate an AnnotatedDataset under the Dataset that the
 * task is requested for.
 *
 * Generated from protobuf message <code>google.cloud.datalabeling.v1beta1.AnnotatedDataset</code>
 */
class AnnotatedDataset extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. AnnotatedDataset resource name in format of:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * Output only. The display name of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 64
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     */
    private $display_name = '';
    /**
     * Output only. The description of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 10000
     * characters.
     *
     * Generated from protobuf field <code>string description = 9;</code>
     */
    private $description = '';
    /**
     * Output only. Source of the annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSource annotation_source = 3;</code>
     */
    private $annotation_source = 0;
    /**
     * Output only. Type of the annotation. It is specified when starting labeling
     * task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 8;</code>
     */
    private $annotation_type = 0;
    /**
     * Output only. Number of examples in the annotated dataset.
     *
     * Generated from protobuf field <code>int64 example_count = 4;</code>
     */
    private $example_count = 0;
    /**
     * Output only. Number of examples that have annotation in the annotated
     * dataset.
     *
     * Generated from protobuf field <code>int64 completed_example_count = 5;</code>
     */
    private $completed_example_count = 0;
    /**
     * Output only. Per label statistics.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 6;</code>
     */
    private $label_stats = null;
    /**
     * Output only. Time the AnnotatedDataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     */
    private $create_time = null;
    /**
     * Output only. Additional information about AnnotatedDataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotatedDatasetMetadata metadata = 10;</code>
     */
    private $metadata = null;
    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotated dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 11;</code>
     */
    private $blocking_resources;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. AnnotatedDataset resource name in format of:
     *           projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     *           {annotated_dataset_id}
     *     @type string $display_name
     *           Output only. The display name of the AnnotatedDataset. It is specified in
     *           HumanAnnotationConfig when user starts a labeling task. Maximum of 64
     *           characters.
     *     @type string $description
     *           Output only. The description of the AnnotatedDataset. It is specified in
     *           HumanAnnotationConfig when user starts a labeling task. Maximum of 10000
     *           characters.
     *     @type int $annotation_source
     *           Output only. Source of the annotation.
     *     @type int $annotation_type
     *           Output only. Type of the annotation. It is specified when starting labeling
     *           task.
     *     @type int|string $example_count
     *           Output only. Number of examples in the annotated dataset.
     *     @type int|string $completed_example_count
     *           Output only. Number of examples that have annotation in the annotated
     *           dataset.
     *     @type \Google\Cloud\DataLabeling\V1beta1\LabelStats $label_stats
     *           Output only. Per label statistics.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time the AnnotatedDataset was created.
     *     @type \Google\Cloud\DataLabeling\V1beta1\AnnotatedDatasetMetadata $metadata
     *           Output only. Additional information about AnnotatedDataset.
     *     @type array<string>|\Google\Protobuf\Internal\RepeatedField $blocking_resources
     *           Output only. The names of any related resources that are blocking changes
     *           to the annotated dataset.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Datalabeling\V1Beta1\Dataset::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. AnnotatedDataset resource name in format of:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. AnnotatedDataset resource name in format of:
     * projects/{project_id}/datasets/{dataset_id}/annotatedDatasets/
     * {annotated_dataset_id}
     *
     * Generated from protobuf field <code>string name = 1;</code>
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
     * Output only. The display name of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 64
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Output only. The display name of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 64
     * characters.
     *
     * Generated from protobuf field <code>string display_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Output only. The description of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 10000
     * characters.
     *
     * Generated from protobuf field <code>string description = 9;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Output only. The description of the AnnotatedDataset. It is specified in
     * HumanAnnotationConfig when user starts a labeling task. Maximum of 10000
     * characters.
     *
     * Generated from protobuf field <code>string description = 9;</code>
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
     * Output only. Source of the annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSource annotation_source = 3;</code>
     * @return int
     */
    public function getAnnotationSource()
    {
        return $this->annotation_source;
    }

    /**
     * Output only. Source of the annotation.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationSource annotation_source = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAnnotationSource($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationSource::class);
        $this->annotation_source = $var;

        return $this;
    }

    /**
     * Output only. Type of the annotation. It is specified when starting labeling
     * task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 8;</code>
     * @return int
     */
    public function getAnnotationType()
    {
        return $this->annotation_type;
    }

    /**
     * Output only. Type of the annotation. It is specified when starting labeling
     * task.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotationType annotation_type = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setAnnotationType($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\DataLabeling\V1beta1\AnnotationType::class);
        $this->annotation_type = $var;

        return $this;
    }

    /**
     * Output only. Number of examples in the annotated dataset.
     *
     * Generated from protobuf field <code>int64 example_count = 4;</code>
     * @return int|string
     */
    public function getExampleCount()
    {
        return $this->example_count;
    }

    /**
     * Output only. Number of examples in the annotated dataset.
     *
     * Generated from protobuf field <code>int64 example_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setExampleCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->example_count = $var;

        return $this;
    }

    /**
     * Output only. Number of examples that have annotation in the annotated
     * dataset.
     *
     * Generated from protobuf field <code>int64 completed_example_count = 5;</code>
     * @return int|string
     */
    public function getCompletedExampleCount()
    {
        return $this->completed_example_count;
    }

    /**
     * Output only. Number of examples that have annotation in the annotated
     * dataset.
     *
     * Generated from protobuf field <code>int64 completed_example_count = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCompletedExampleCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->completed_example_count = $var;

        return $this;
    }

    /**
     * Output only. Per label statistics.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 6;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\LabelStats|null
     */
    public function getLabelStats()
    {
        return $this->label_stats;
    }

    public function hasLabelStats()
    {
        return isset($this->label_stats);
    }

    public function clearLabelStats()
    {
        unset($this->label_stats);
    }

    /**
     * Output only. Per label statistics.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.LabelStats label_stats = 6;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\LabelStats $var
     * @return $this
     */
    public function setLabelStats($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\LabelStats::class);
        $this->label_stats = $var;

        return $this;
    }

    /**
     * Output only. Time the AnnotatedDataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time the AnnotatedDataset was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Additional information about AnnotatedDataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotatedDatasetMetadata metadata = 10;</code>
     * @return \Google\Cloud\DataLabeling\V1beta1\AnnotatedDatasetMetadata|null
     */
    public function getMetadata()
    {
        return $this->metadata;
    }

    public function hasMetadata()
    {
        return isset($this->metadata);
    }

    public function clearMetadata()
    {
        unset($this->metadata);
    }

    /**
     * Output only. Additional information about AnnotatedDataset.
     *
     * Generated from protobuf field <code>.google.cloud.datalabeling.v1beta1.AnnotatedDatasetMetadata metadata = 10;</code>
     * @param \Google\Cloud\DataLabeling\V1beta1\AnnotatedDatasetMetadata $var
     * @return $this
     */
    public function setMetadata($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\DataLabeling\V1beta1\AnnotatedDatasetMetadata::class);
        $this->metadata = $var;

        return $this;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotated dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 11;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getBlockingResources()
    {
        return $this->blocking_resources;
    }

    /**
     * Output only. The names of any related resources that are blocking changes
     * to the annotated dataset.
     *
     * Generated from protobuf field <code>repeated string blocking_resources = 11;</code>
     * @param array<string>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setBlockingResources($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->blocking_resources = $arr;

        return $this;
    }

}

