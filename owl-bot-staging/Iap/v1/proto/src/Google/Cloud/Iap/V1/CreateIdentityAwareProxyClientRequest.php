<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request sent to CreateIdentityAwareProxyClient.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.CreateIdentityAwareProxyClientRequest</code>
 */
class CreateIdentityAwareProxyClientRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. Path to create the client in.
     * In the following format:
     * projects/{project_number/id}/brands/{brand}.
     * The project must belong to a G Suite account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. Identity Aware Proxy Client to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $identity_aware_proxy_client = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. Path to create the client in.
     *           In the following format:
     *           projects/{project_number/id}/brands/{brand}.
     *           The project must belong to a G Suite account.
     *     @type \Google\Cloud\Iap\V1\IdentityAwareProxyClient $identity_aware_proxy_client
     *           Required. Identity Aware Proxy Client to be created.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. Path to create the client in.
     * In the following format:
     * projects/{project_number/id}/brands/{brand}.
     * The project must belong to a G Suite account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. Path to create the client in.
     * In the following format:
     * projects/{project_number/id}/brands/{brand}.
     * The project must belong to a G Suite account.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. Identity Aware Proxy Client to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Iap\V1\IdentityAwareProxyClient|null
     */
    public function getIdentityAwareProxyClient()
    {
        return $this->identity_aware_proxy_client;
    }

    public function hasIdentityAwareProxyClient()
    {
        return isset($this->identity_aware_proxy_client);
    }

    public function clearIdentityAwareProxyClient()
    {
        unset($this->identity_aware_proxy_client);
    }

    /**
     * Required. Identity Aware Proxy Client to be created.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.IdentityAwareProxyClient identity_aware_proxy_client = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Iap\V1\IdentityAwareProxyClient $var
     * @return $this
     */
    public function setIdentityAwareProxyClient($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\IdentityAwareProxyClient::class);
        $this->identity_aware_proxy_client = $var;

        return $this;
    }

}
