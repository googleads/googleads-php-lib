<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NumberValue extends \Google\AdsApi\Dfp\v201705\Value
{

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $value
     */
    public function __construct($value = null)
    {
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\Dfp\v201705\NumberValue
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
