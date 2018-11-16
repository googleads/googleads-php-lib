<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WebpageDescriptorAttribute extends \Google\AdsApi\AdWords\v201806\o\Attribute
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\WebpageDescriptor $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param \Google\AdsApi\AdWords\v201806\o\WebpageDescriptor $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\WebpageDescriptor
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\WebpageDescriptor $value
     * @return \Google\AdsApi\AdWords\v201806\o\WebpageDescriptorAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
