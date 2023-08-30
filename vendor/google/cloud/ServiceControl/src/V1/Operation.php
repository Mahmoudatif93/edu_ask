<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/servicecontrol/v1/operation.proto

namespace Google\Cloud\ServiceControl\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Represents information regarding an operation.
 *
 * Generated from protobuf message <code>google.api.servicecontrol.v1.Operation</code>
 */
class Operation extends \Google\Protobuf\Internal\Message
{
    /**
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     */
    private $operation_id = '';
    /**
     * Fully qualified name of the operation. Reserved for future use.
     *
     * Generated from protobuf field <code>string operation_name = 2;</code>
     */
    private $operation_name = '';
    /**
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * - This can be in one of the following formats:
     *     - project:PROJECT_ID,
     *     - project`_`number:PROJECT_NUMBER,
     *     - projects/PROJECT_ID or PROJECT_NUMBER,
     *     - folders/FOLDER_NUMBER,
     *     - organizations/ORGANIZATION_NUMBER,
     *     - api`_`key:API_KEY.
     *
     * Generated from protobuf field <code>string consumer_id = 3;</code>
     */
    private $consumer_id = '';
    /**
     * Required. Start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     */
    private $start_time = null;
    /**
     * End time of the operation.
     * Required when the operation is used in
     * [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in
     * [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     */
    private $end_time = null;
    /**
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served, such as App Engine, Compute Engine, or
     *        Kubernetes Engine.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     */
    private $labels;
    /**
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     */
    private $metric_value_sets;
    /**
     * Represents information to be logged.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     */
    private $log_entries;
    /**
     * DO NOT USE. This is an experimental field.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     */
    private $importance = 0;
    /**
     * Unimplemented.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any extensions = 16;</code>
     */
    private $extensions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $operation_id
     *           Identity of the operation. This must be unique within the scope of the
     *           service that generated the operation. If the service calls
     *           Check() and Report() on the same operation, the two calls should carry
     *           the same id.
     *           UUID version 4 is recommended, though not required.
     *           In scenarios where an operation is computed from existing information
     *           and an idempotent id is desirable for deduplication purpose, UUID version 5
     *           is recommended. See RFC 4122 for details.
     *     @type string $operation_name
     *           Fully qualified name of the operation. Reserved for future use.
     *     @type string $consumer_id
     *           Identity of the consumer who is using the service.
     *           This field should be filled in for the operations initiated by a
     *           consumer, but not for service-initiated operations that are
     *           not related to a specific consumer.
     *           - This can be in one of the following formats:
     *               - project:PROJECT_ID,
     *               - project`_`number:PROJECT_NUMBER,
     *               - projects/PROJECT_ID or PROJECT_NUMBER,
     *               - folders/FOLDER_NUMBER,
     *               - organizations/ORGANIZATION_NUMBER,
     *               - api`_`key:API_KEY.
     *     @type \Google\Protobuf\Timestamp $start_time
     *           Required. Start time of the operation.
     *     @type \Google\Protobuf\Timestamp $end_time
     *           End time of the operation.
     *           Required when the operation is used in
     *           [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     *           but optional when the operation is used in
     *           [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Labels describing the operation. Only the following labels are allowed:
     *           - Labels describing monitored resources as defined in
     *             the service configuration.
     *           - Default labels of metric values. When specified, labels defined in the
     *             metric value override these default.
     *           - The following labels defined by Google Cloud Platform:
     *               - `cloud.googleapis.com/location` describing the location where the
     *                  operation happened,
     *               - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *                  of the API request,
     *               - `servicecontrol.googleapis.com/service_agent` describing the service
     *                  used to handle the API request (e.g. ESP),
     *               - `servicecontrol.googleapis.com/platform` describing the platform
     *                  where the API is served, such as App Engine, Compute Engine, or
     *                  Kubernetes Engine.
     *     @type array<\Google\Cloud\ServiceControl\V1\MetricValueSet>|\Google\Protobuf\Internal\RepeatedField $metric_value_sets
     *           Represents information about this operation. Each MetricValueSet
     *           corresponds to a metric defined in the service configuration.
     *           The data type used in the MetricValueSet must agree with
     *           the data type specified in the metric definition.
     *           Within a single operation, it is not allowed to have more than one
     *           MetricValue instances that have the same metric names and identical
     *           label value combinations. If a request has such duplicated MetricValue
     *           instances, the entire request is rejected with
     *           an invalid argument error.
     *     @type array<\Google\Cloud\ServiceControl\V1\LogEntry>|\Google\Protobuf\Internal\RepeatedField $log_entries
     *           Represents information to be logged.
     *     @type int $importance
     *           DO NOT USE. This is an experimental field.
     *     @type array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $extensions
     *           Unimplemented.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Servicecontrol\V1\Operation::initOnce();
        parent::__construct($data);
    }

    /**
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @return string
     */
    public function getOperationId()
    {
        return $this->operation_id;
    }

    /**
     * Identity of the operation. This must be unique within the scope of the
     * service that generated the operation. If the service calls
     * Check() and Report() on the same operation, the two calls should carry
     * the same id.
     * UUID version 4 is recommended, though not required.
     * In scenarios where an operation is computed from existing information
     * and an idempotent id is desirable for deduplication purpose, UUID version 5
     * is recommended. See RFC 4122 for details.
     *
     * Generated from protobuf field <code>string operation_id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationId($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_id = $var;

        return $this;
    }

    /**
     * Fully qualified name of the operation. Reserved for future use.
     *
     * Generated from protobuf field <code>string operation_name = 2;</code>
     * @return string
     */
    public function getOperationName()
    {
        return $this->operation_name;
    }

    /**
     * Fully qualified name of the operation. Reserved for future use.
     *
     * Generated from protobuf field <code>string operation_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOperationName($var)
    {
        GPBUtil::checkString($var, True);
        $this->operation_name = $var;

        return $this;
    }

    /**
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * - This can be in one of the following formats:
     *     - project:PROJECT_ID,
     *     - project`_`number:PROJECT_NUMBER,
     *     - projects/PROJECT_ID or PROJECT_NUMBER,
     *     - folders/FOLDER_NUMBER,
     *     - organizations/ORGANIZATION_NUMBER,
     *     - api`_`key:API_KEY.
     *
     * Generated from protobuf field <code>string consumer_id = 3;</code>
     * @return string
     */
    public function getConsumerId()
    {
        return $this->consumer_id;
    }

    /**
     * Identity of the consumer who is using the service.
     * This field should be filled in for the operations initiated by a
     * consumer, but not for service-initiated operations that are
     * not related to a specific consumer.
     * - This can be in one of the following formats:
     *     - project:PROJECT_ID,
     *     - project`_`number:PROJECT_NUMBER,
     *     - projects/PROJECT_ID or PROJECT_NUMBER,
     *     - folders/FOLDER_NUMBER,
     *     - organizations/ORGANIZATION_NUMBER,
     *     - api`_`key:API_KEY.
     *
     * Generated from protobuf field <code>string consumer_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setConsumerId($var)
    {
        GPBUtil::checkString($var, True);
        $this->consumer_id = $var;

        return $this;
    }

    /**
     * Required. Start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    public function hasStartTime()
    {
        return isset($this->start_time);
    }

    public function clearStartTime()
    {
        unset($this->start_time);
    }

    /**
     * Required. Start time of the operation.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp start_time = 4;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->start_time = $var;

        return $this;
    }

    /**
     * End time of the operation.
     * Required when the operation is used in
     * [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in
     * [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    public function hasEndTime()
    {
        return isset($this->end_time);
    }

    public function clearEndTime()
    {
        unset($this->end_time);
    }

    /**
     * End time of the operation.
     * Required when the operation is used in
     * [ServiceController.Report][google.api.servicecontrol.v1.ServiceController.Report],
     * but optional when the operation is used in
     * [ServiceController.Check][google.api.servicecontrol.v1.ServiceController.Check].
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp end_time = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->end_time = $var;

        return $this;
    }

    /**
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served, such as App Engine, Compute Engine, or
     *        Kubernetes Engine.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Labels describing the operation. Only the following labels are allowed:
     * - Labels describing monitored resources as defined in
     *   the service configuration.
     * - Default labels of metric values. When specified, labels defined in the
     *   metric value override these default.
     * - The following labels defined by Google Cloud Platform:
     *     - `cloud.googleapis.com/location` describing the location where the
     *        operation happened,
     *     - `servicecontrol.googleapis.com/user_agent` describing the user agent
     *        of the API request,
     *     - `servicecontrol.googleapis.com/service_agent` describing the service
     *        used to handle the API request (e.g. ESP),
     *     - `servicecontrol.googleapis.com/platform` describing the platform
     *        where the API is served, such as App Engine, Compute Engine, or
     *        Kubernetes Engine.
     *
     * Generated from protobuf field <code>map<string, string> labels = 6;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLabels($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->labels = $arr;

        return $this;
    }

    /**
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMetricValueSets()
    {
        return $this->metric_value_sets;
    }

    /**
     * Represents information about this operation. Each MetricValueSet
     * corresponds to a metric defined in the service configuration.
     * The data type used in the MetricValueSet must agree with
     * the data type specified in the metric definition.
     * Within a single operation, it is not allowed to have more than one
     * MetricValue instances that have the same metric names and identical
     * label value combinations. If a request has such duplicated MetricValue
     * instances, the entire request is rejected with
     * an invalid argument error.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.MetricValueSet metric_value_sets = 7;</code>
     * @param array<\Google\Cloud\ServiceControl\V1\MetricValueSet>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMetricValueSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceControl\V1\MetricValueSet::class);
        $this->metric_value_sets = $arr;

        return $this;
    }

    /**
     * Represents information to be logged.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getLogEntries()
    {
        return $this->log_entries;
    }

    /**
     * Represents information to be logged.
     *
     * Generated from protobuf field <code>repeated .google.api.servicecontrol.v1.LogEntry log_entries = 8;</code>
     * @param array<\Google\Cloud\ServiceControl\V1\LogEntry>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setLogEntries($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceControl\V1\LogEntry::class);
        $this->log_entries = $arr;

        return $this;
    }

    /**
     * DO NOT USE. This is an experimental field.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     * @return int
     */
    public function getImportance()
    {
        return $this->importance;
    }

    /**
     * DO NOT USE. This is an experimental field.
     *
     * Generated from protobuf field <code>.google.api.servicecontrol.v1.Operation.Importance importance = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setImportance($var)
    {
        GPBUtil::checkEnum($var, \Google\Cloud\ServiceControl\V1\Operation\Importance::class);
        $this->importance = $var;

        return $this;
    }

    /**
     * Unimplemented.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any extensions = 16;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getExtensions()
    {
        return $this->extensions;
    }

    /**
     * Unimplemented.
     *
     * Generated from protobuf field <code>repeated .google.protobuf.Any extensions = 16;</code>
     * @param array<\Google\Protobuf\Any>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setExtensions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Any::class);
        $this->extensions = $arr;

        return $this;
    }

}

