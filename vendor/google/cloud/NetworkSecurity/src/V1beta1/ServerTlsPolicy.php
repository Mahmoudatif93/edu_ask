<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/networksecurity/v1beta1/server_tls_policy.proto

namespace Google\Cloud\NetworkSecurity\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ServerTlsPolicy is a resource that specifies how a server should authenticate
 * incoming requests. This resource itself does not affect configuration unless
 * it is attached to a target https proxy or endpoint config selector resource.
 *
 * Generated from protobuf message <code>google.cloud.networksecurity.v1beta1.ServerTlsPolicy</code>
 */
class ServerTlsPolicy extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Name of the ServerTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/serverTlsPolicies/{server_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    private $name = '';
    /**
     * Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     */
    private $description = '';
    /**
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $create_time = null;
    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    private $update_time = null;
    /**
     * Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     */
    private $labels;
    /**
     * Determines if server allows plaintext connections. If set to true, server
     * allows plain text connections. By default, it is set to false. This setting
     * is not exclusive of other encryption modes. For example, if `allow_open`
     * and `mtls_policy` are set, server allows both plain text and mTLS
     * connections. See documentation of other encryption modes to confirm
     * compatibility.
     * Consider using it if you wish to upgrade in place your deployment to TLS
     * while having mixed TLS and non-TLS traffic reaching port :80.
     *
     * Generated from protobuf field <code>bool allow_open = 6;</code>
     */
    private $allow_open = false;
    /**
     * Defines a mechanism to provision server identity (public and private keys).
     * Cannot be combined with `allow_open` as a permissive mode that allows both
     * plain text and TLS is not supported.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.CertificateProvider server_certificate = 7;</code>
     */
    private $server_certificate = null;
    /**
     * Defines a mechanism to provision peer validation certificates for peer to
     * peer authentication (Mutual TLS - mTLS). If not specified, client
     * certificate will not be requested. The connection is treated as TLS and not
     * mTLS. If `allow_open` and `mtls_policy` are set, server allows both plain
     * text and mTLS connections.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy.MTLSPolicy mtls_policy = 8;</code>
     */
    private $mtls_policy = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. Name of the ServerTlsPolicy resource. It matches the pattern
     *           `projects/&#42;&#47;locations/{location}/serverTlsPolicies/{server_tls_policy}`
     *     @type string $description
     *           Free-text description of the resource.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. The timestamp when the resource was created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. The timestamp when the resource was updated.
     *     @type array|\Google\Protobuf\Internal\MapField $labels
     *           Set of label tags associated with the resource.
     *     @type bool $allow_open
     *           Determines if server allows plaintext connections. If set to true, server
     *           allows plain text connections. By default, it is set to false. This setting
     *           is not exclusive of other encryption modes. For example, if `allow_open`
     *           and `mtls_policy` are set, server allows both plain text and mTLS
     *           connections. See documentation of other encryption modes to confirm
     *           compatibility.
     *           Consider using it if you wish to upgrade in place your deployment to TLS
     *           while having mixed TLS and non-TLS traffic reaching port :80.
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\CertificateProvider $server_certificate
     *           Defines a mechanism to provision server identity (public and private keys).
     *           Cannot be combined with `allow_open` as a permissive mode that allows both
     *           plain text and TLS is not supported.
     *     @type \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy\MTLSPolicy $mtls_policy
     *           Defines a mechanism to provision peer validation certificates for peer to
     *           peer authentication (Mutual TLS - mTLS). If not specified, client
     *           certificate will not be requested. The connection is treated as TLS and not
     *           mTLS. If `allow_open` and `mtls_policy` are set, server allows both plain
     *           text and mTLS connections.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Networksecurity\V1Beta1\ServerTlsPolicy::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Name of the ServerTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/serverTlsPolicies/{server_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. Name of the ServerTlsPolicy resource. It matches the pattern
     * `projects/&#42;&#47;locations/{location}/serverTlsPolicies/{server_tls_policy}`
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2;</code>
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Free-text description of the resource.
     *
     * Generated from protobuf field <code>string description = 2;</code>
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
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when the resource was created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
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
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. The timestamp when the resource was updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLabels()
    {
        return $this->labels;
    }

    /**
     * Set of label tags associated with the resource.
     *
     * Generated from protobuf field <code>map<string, string> labels = 5;</code>
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
     * Determines if server allows plaintext connections. If set to true, server
     * allows plain text connections. By default, it is set to false. This setting
     * is not exclusive of other encryption modes. For example, if `allow_open`
     * and `mtls_policy` are set, server allows both plain text and mTLS
     * connections. See documentation of other encryption modes to confirm
     * compatibility.
     * Consider using it if you wish to upgrade in place your deployment to TLS
     * while having mixed TLS and non-TLS traffic reaching port :80.
     *
     * Generated from protobuf field <code>bool allow_open = 6;</code>
     * @return bool
     */
    public function getAllowOpen()
    {
        return $this->allow_open;
    }

    /**
     * Determines if server allows plaintext connections. If set to true, server
     * allows plain text connections. By default, it is set to false. This setting
     * is not exclusive of other encryption modes. For example, if `allow_open`
     * and `mtls_policy` are set, server allows both plain text and mTLS
     * connections. See documentation of other encryption modes to confirm
     * compatibility.
     * Consider using it if you wish to upgrade in place your deployment to TLS
     * while having mixed TLS and non-TLS traffic reaching port :80.
     *
     * Generated from protobuf field <code>bool allow_open = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setAllowOpen($var)
    {
        GPBUtil::checkBool($var);
        $this->allow_open = $var;

        return $this;
    }

    /**
     * Defines a mechanism to provision server identity (public and private keys).
     * Cannot be combined with `allow_open` as a permissive mode that allows both
     * plain text and TLS is not supported.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.CertificateProvider server_certificate = 7;</code>
     * @return \Google\Cloud\NetworkSecurity\V1beta1\CertificateProvider|null
     */
    public function getServerCertificate()
    {
        return $this->server_certificate;
    }

    public function hasServerCertificate()
    {
        return isset($this->server_certificate);
    }

    public function clearServerCertificate()
    {
        unset($this->server_certificate);
    }

    /**
     * Defines a mechanism to provision server identity (public and private keys).
     * Cannot be combined with `allow_open` as a permissive mode that allows both
     * plain text and TLS is not supported.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.CertificateProvider server_certificate = 7;</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\CertificateProvider $var
     * @return $this
     */
    public function setServerCertificate($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1beta1\CertificateProvider::class);
        $this->server_certificate = $var;

        return $this;
    }

    /**
     * Defines a mechanism to provision peer validation certificates for peer to
     * peer authentication (Mutual TLS - mTLS). If not specified, client
     * certificate will not be requested. The connection is treated as TLS and not
     * mTLS. If `allow_open` and `mtls_policy` are set, server allows both plain
     * text and mTLS connections.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy.MTLSPolicy mtls_policy = 8;</code>
     * @return \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy\MTLSPolicy|null
     */
    public function getMtlsPolicy()
    {
        return $this->mtls_policy;
    }

    public function hasMtlsPolicy()
    {
        return isset($this->mtls_policy);
    }

    public function clearMtlsPolicy()
    {
        unset($this->mtls_policy);
    }

    /**
     * Defines a mechanism to provision peer validation certificates for peer to
     * peer authentication (Mutual TLS - mTLS). If not specified, client
     * certificate will not be requested. The connection is treated as TLS and not
     * mTLS. If `allow_open` and `mtls_policy` are set, server allows both plain
     * text and mTLS connections.
     *
     * Generated from protobuf field <code>.google.cloud.networksecurity.v1beta1.ServerTlsPolicy.MTLSPolicy mtls_policy = 8;</code>
     * @param \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy\MTLSPolicy $var
     * @return $this
     */
    public function setMtlsPolicy($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\NetworkSecurity\V1beta1\ServerTlsPolicy\MTLSPolicy::class);
        $this->mtls_policy = $var;

        return $this;
    }

}
