<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class EnumValuePair
{

    /**
     * @var string $enumValue
     */
    protected $enumValue = null;

    /**
     * @var string $enumDisplayValue
     */
    protected $enumDisplayValue = null;

    /**
     * @param string $enumValue
     * @param string $enumDisplayValue
     */
    public function __construct($enumValue = null, $enumDisplayValue = null)
    {
      $this->enumValue = $enumValue;
      $this->enumDisplayValue = $enumDisplayValue;
    }

    /**
     * @return string
     */
    public function getEnumValue()
    {
      return $this->enumValue;
    }

    /**
     * @param string $enumValue
     * @return \Google\AdsApi\AdWords\v201710\cm\EnumValuePair
     */
    public function setEnumValue($enumValue)
    {
      $this->enumValue = $enumValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnumDisplayValue()
    {
      return $this->enumDisplayValue;
    }

    /**
     * @param string $enumDisplayValue
     * @return \Google\AdsApi\AdWords\v201710\cm\EnumValuePair
     */
    public function setEnumDisplayValue($enumDisplayValue)
    {
      $this->enumDisplayValue = $enumDisplayValue;
      return $this;
    }

}
