<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateTimeValue extends \Google\AdsApi\Dfp\v201608\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201608\DateTime $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201608\DateTime $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201608\DateTime
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201608\DateTime $value
     * @return \Google\AdsApi\Dfp\v201608\DateTimeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
