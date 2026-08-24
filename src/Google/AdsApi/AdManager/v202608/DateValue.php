<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateValue extends \Google\AdsApi\AdManager\v202608\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v202608\Date $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v202608\Date $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202608\Date
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202608\Date $value
     * @return \Google\AdsApi\AdManager\v202608\DateValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
