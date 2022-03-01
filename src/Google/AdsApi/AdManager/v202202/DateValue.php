<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateValue extends \Google\AdsApi\AdManager\v202202\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\Date $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\Date $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\Date
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\Date $value
     * @return \Google\AdsApi\AdManager\v202202\DateValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
