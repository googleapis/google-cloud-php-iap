<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/iap/v1/service.proto

namespace Google\Cloud\Iap\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request sent to IAP Expression Linter endpoint.
 *
 * Generated from protobuf message <code>google.cloud.iap.v1.ValidateIapAttributeExpressionRequest</code>
 */
class ValidateIapAttributeExpressionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the IAP protected resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * Required. User input string expression. Should be of the form
     * `attributes.saml_attributes.filter(attribute, attribute.name in
     * ['{attribute_name}', '{attribute_name}'])`
     *
     * Generated from protobuf field <code>string expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $expression = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the IAP protected resource.
     *     @type string $expression
     *           Required. User input string expression. Should be of the form
     *           `attributes.saml_attributes.filter(attribute, attribute.name in
     *           ['{attribute_name}', '{attribute_name}'])`
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Iap\V1\Service::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the IAP protected resource.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the IAP protected resource.
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
     * Required. User input string expression. Should be of the form
     * `attributes.saml_attributes.filter(attribute, attribute.name in
     * ['{attribute_name}', '{attribute_name}'])`
     *
     * Generated from protobuf field <code>string expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Required. User input string expression. Should be of the form
     * `attributes.saml_attributes.filter(attribute, attribute.name in
     * ['{attribute_name}', '{attribute_name}'])`
     *
     * Generated from protobuf field <code>string expression = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setExpression($var)
    {
        GPBUtil::checkString($var, True);
        $this->expression = $var;

        return $this;
    }

}

