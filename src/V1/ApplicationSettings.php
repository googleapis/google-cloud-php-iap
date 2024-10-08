<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Wrapper over application specific settings for IAP.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.ApplicationSettings</code>
 */
class ApplicationSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Settings to configure IAP's behavior for a service mesh.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CsmSettings csm_settings = 1;</code>
     */
    protected $csm_settings = null;
    /**
     * Customization for Access Denied page.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessDeniedPageSettings access_denied_page_settings = 2;</code>
     */
    protected $access_denied_page_settings = null;
    /**
     * The Domain value to set for cookies generated by IAP. This value is not
     * validated by the API, but will be ignored at runtime if invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue cookie_domain = 3;</code>
     */
    protected $cookie_domain = null;
    /**
     * Settings to configure attribute propagation.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AttributePropagationSettings attribute_propagation_settings = 4;</code>
     */
    protected $attribute_propagation_settings = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Cloud\Iap\V1\CsmSettings $csm_settings
     *           Settings to configure IAP's behavior for a service mesh.
     *     @type \Google\Cloud\Iap\V1\AccessDeniedPageSettings $access_denied_page_settings
     *           Customization for Access Denied page.
     *     @type \Google\Protobuf\StringValue $cookie_domain
     *           The Domain value to set for cookies generated by IAP. This value is not
     *           validated by the API, but will be ignored at runtime if invalid.
     *     @type \Google\Cloud\Iap\V1\AttributePropagationSettings $attribute_propagation_settings
     *           Settings to configure attribute propagation.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Settings to configure IAP's behavior for a service mesh.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CsmSettings csm_settings = 1;</code>
     * @return \Google\Cloud\Iap\V1\CsmSettings|null
     */
    public function getCsmSettings()
    {
        return $this->csm_settings;
    }

    public function hasCsmSettings()
    {
        return isset($this->csm_settings);
    }

    public function clearCsmSettings()
    {
        unset($this->csm_settings);
    }

    /**
     * Settings to configure IAP's behavior for a service mesh.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.CsmSettings csm_settings = 1;</code>
     * @param \Google\Cloud\Iap\V1\CsmSettings $var
     * @return $this
     */
    public function setCsmSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\CsmSettings::class);
        $this->csm_settings = $var;

        return $this;
    }

    /**
     * Customization for Access Denied page.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessDeniedPageSettings access_denied_page_settings = 2;</code>
     * @return \Google\Cloud\Iap\V1\AccessDeniedPageSettings|null
     */
    public function getAccessDeniedPageSettings()
    {
        return $this->access_denied_page_settings;
    }

    public function hasAccessDeniedPageSettings()
    {
        return isset($this->access_denied_page_settings);
    }

    public function clearAccessDeniedPageSettings()
    {
        unset($this->access_denied_page_settings);
    }

    /**
     * Customization for Access Denied page.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AccessDeniedPageSettings access_denied_page_settings = 2;</code>
     * @param \Google\Cloud\Iap\V1\AccessDeniedPageSettings $var
     * @return $this
     */
    public function setAccessDeniedPageSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\AccessDeniedPageSettings::class);
        $this->access_denied_page_settings = $var;

        return $this;
    }

    /**
     * The Domain value to set for cookies generated by IAP. This value is not
     * validated by the API, but will be ignored at runtime if invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue cookie_domain = 3;</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getCookieDomain()
    {
        return $this->cookie_domain;
    }

    public function hasCookieDomain()
    {
        return isset($this->cookie_domain);
    }

    public function clearCookieDomain()
    {
        unset($this->cookie_domain);
    }

    /**
     * Returns the unboxed value from <code>getCookieDomain()</code>

     * The Domain value to set for cookies generated by IAP. This value is not
     * validated by the API, but will be ignored at runtime if invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue cookie_domain = 3;</code>
     * @return string|null
     */
    public function getCookieDomainUnwrapped()
    {
        return $this->readWrapperValue("cookie_domain");
    }

    /**
     * The Domain value to set for cookies generated by IAP. This value is not
     * validated by the API, but will be ignored at runtime if invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue cookie_domain = 3;</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setCookieDomain($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->cookie_domain = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     * The Domain value to set for cookies generated by IAP. This value is not
     * validated by the API, but will be ignored at runtime if invalid.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue cookie_domain = 3;</code>
     * @param string|null $var
     * @return $this
     */
    public function setCookieDomainUnwrapped($var)
    {
        $this->writeWrapperValue("cookie_domain", $var);
        return $this;}

    /**
     * Settings to configure attribute propagation.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AttributePropagationSettings attribute_propagation_settings = 4;</code>
     * @return \Google\Cloud\Iap\V1\AttributePropagationSettings|null
     */
    public function getAttributePropagationSettings()
    {
        return $this->attribute_propagation_settings;
    }

    public function hasAttributePropagationSettings()
    {
        return isset($this->attribute_propagation_settings);
    }

    public function clearAttributePropagationSettings()
    {
        unset($this->attribute_propagation_settings);
    }

    /**
     * Settings to configure attribute propagation.
     *
     * Generated from protobuf field <code>.google.cloud.iap.v1.AttributePropagationSettings attribute_propagation_settings = 4;</code>
     * @param \Google\Cloud\Iap\V1\AttributePropagationSettings $var
     * @return $this
     */
    public function setAttributePropagationSettings($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Iap\V1\AttributePropagationSettings::class);
        $this->attribute_propagation_settings = $var;

        return $this;
    }

}

