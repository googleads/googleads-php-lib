<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DoubleAttribute extends \Google\AdsApi\AdWords\v201710\o\Attribute
{

    /**
     * @var float $value
     */
    protected $value = null;

    /**
     * @param string $AttributeType
     * @param float $value
     */
    public function __construct($AttributeType = null, $value = null)
    {
      parent::__construct($AttributeType);
      $this->value = $value;
    }

    /**
     * @return float
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param float $value
     * @return \Google\AdsApi\AdWords\v201710\o\DoubleAttribute
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
