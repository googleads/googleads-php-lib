<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LongRangeAttribute extends \Google\AdsApi\AdWords\v201806\o\Attribute
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\Range $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param \Google\AdsApi\AdWords\v201806\o\Range $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\Range
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\Range $value
     * @return \Google\AdsApi\AdWords\v201806\o\LongRangeAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
