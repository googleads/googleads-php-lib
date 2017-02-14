<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateTimeValue extends \Google\AdsApi\Dfp\v201702\Value
{

    /**
     * @var \Google\AdsApi\Dfp\v201702\DateTime $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201702\DateTime
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201702\DateTime $value
     * @return \Google\AdsApi\Dfp\v201702\DateTimeValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
