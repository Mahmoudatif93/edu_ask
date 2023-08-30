<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/servicedirectory/v1/service.proto

namespace Google\Cloud\ServiceDirectory\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * An individual service. A service contains a name and optional metadata.
 * A service must exist before
 * [endpoints][google.cloud.servicedirectory.v1.Endpoint] can be
 * added to it.
 *
 * Generated from protobuf message <code>google.cloud.servicedirectory.v1.Service</code>
 */
class Service extends \Google\Protobuf\Internal\Message
{
    /**
     * Immutable. The resource name for the service in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    private $name = '';
    /**
     * Optional. Annotations for the service. This data can be consumed by service
     * clients.
     * Restrictions:
     *  - The entire annotations dictionary may contain up to 2000 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    private $annotations;
    /**
     * Output only. Endpoints associated with this service. Returned on
     * LookupService.Resolve. Control plane clients should use
     * RegistrationService.ListEndpoints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $endpoints;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Immutable. The resource name for the service in the format
     *           `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *     @type array|\Google\Protobuf\Internal\MapField $annotations
     *           Optional. Annotations for the service. This data can be consumed by service
     *           clients.
     *           Restrictions:
     *            - The entire annotations dictionary may contain up to 2000 characters,
     *              spread accoss all key-value pairs. Annotations that goes beyond any
     *              these limits will be rejected.
     *            - Valid annotation keys have two segments: an optional prefix and name,
     *              separated by a slash (/). The name segment is required and must be 63
     *              characters or less, beginning and ending with an alphanumeric character
     *              ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *              alphanumerics between. The prefix is optional. If specified, the prefix
     *              must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *              not longer than 253 characters in total, followed by a slash (/).
     *              Annotations that fails to meet these requirements will be rejected.
     *            - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *              for system annotations managed by Service Directory. If the user tries
     *              to write to these keyspaces, those entries will be silently ignored by
     *              the system.
     *           Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     *           They have the same syntax and read/write to the same location in Service
     *           Directory.
     *     @type array<\Google\Cloud\ServiceDirectory\V1\Endpoint>|\Google\Protobuf\Internal\RepeatedField $endpoints
     *           Output only. Endpoints associated with this service. Returned on
     *           LookupService.Resolve. Control plane clients should use
     *           RegistrationService.ListEndpoints.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Servicedirectory\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Immutable. The resource name for the service in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Immutable. The resource name for the service in the format
     * `projects/&#42;&#47;locations/&#42;&#47;namespaces/&#42;&#47;services/&#42;`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = IMMUTABLE];</code>
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
     * Optional. Annotations for the service. This data can be consumed by service
     * clients.
     * Restrictions:
     *  - The entire annotations dictionary may contain up to 2000 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getAnnotations()
    {
        return $this->annotations;
    }

    /**
     * Optional. Annotations for the service. This data can be consumed by service
     * clients.
     * Restrictions:
     *  - The entire annotations dictionary may contain up to 2000 characters,
     *    spread accoss all key-value pairs. Annotations that goes beyond any
     *    these limits will be rejected.
     *  - Valid annotation keys have two segments: an optional prefix and name,
     *    separated by a slash (/). The name segment is required and must be 63
     *    characters or less, beginning and ending with an alphanumeric character
     *    ([a-z0-9A-Z]) with dashes (-), underscores (_), dots (.), and
     *    alphanumerics between. The prefix is optional. If specified, the prefix
     *    must be a DNS subdomain: a series of DNS labels separated by dots (.),
     *    not longer than 253 characters in total, followed by a slash (/).
     *    Annotations that fails to meet these requirements will be rejected.
     *  - The '(*.)google.com/' and '(*.)googleapis.com/' prefixes are reserved
     *    for system annotations managed by Service Directory. If the user tries
     *    to write to these keyspaces, those entries will be silently ignored by
     *    the system.
     * Note: This field is equivalent to the 'metadata' field in the v1beta1 API.
     * They have the same syntax and read/write to the same location in Service
     * Directory.
     *
     * Generated from protobuf field <code>map<string, string> annotations = 4 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setAnnotations($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::STRING, \Google\Protobuf\Internal\GPBType::STRING);
        $this->annotations = $arr;

        return $this;
    }

    /**
     * Output only. Endpoints associated with this service. Returned on
     * LookupService.Resolve. Control plane clients should use
     * RegistrationService.ListEndpoints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getEndpoints()
    {
        return $this->endpoints;
    }

    /**
     * Output only. Endpoints associated with this service. Returned on
     * LookupService.Resolve. Control plane clients should use
     * RegistrationService.ListEndpoints.
     *
     * Generated from protobuf field <code>repeated .google.cloud.servicedirectory.v1.Endpoint endpoints = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param array<\Google\Cloud\ServiceDirectory\V1\Endpoint>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setEndpoints($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Cloud\ServiceDirectory\V1\Endpoint::class);
        $this->endpoints = $arr;

        return $this;
    }

}

