<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateValue extends \Google\AdsApi\AdManager\v202305\Value
{

    /**
     * @var \Google\AdsApi\AdManager\v202305\Date $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdManager\v202305\Date $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202305\Date
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202305\Date $value
     * @return \Google\AdsApi\AdManager\v202305\DateValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
