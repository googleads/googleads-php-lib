<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateValue extends \Google\AdsApi\Dfp\v201611\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201611\Date $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201611\Date $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201611\Date
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201611\Date $value
     * @return \Google\AdsApi\Dfp\v201611\DateValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
