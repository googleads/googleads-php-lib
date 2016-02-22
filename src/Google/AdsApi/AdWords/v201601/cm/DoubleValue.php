<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class DoubleValue extends \Google\AdsApi\AdWords\v201601\cm\NumberValue
{

    /**
     * @var float $number
     */
    protected $number = null;

    /**
     * @param string $ComparableValueType
     * @param float $number
     */
    public function __construct($ComparableValueType = null, $number = null)
    {
      parent::__construct($ComparableValueType);
      $this->number = $number;
    }

    /**
     * @return float
     */
    public function getNumber()
    {
      return $this->number;
    }

    /**
     * @param float $number
     * @return \Google\AdsApi\AdWords\v201601\cm\DoubleValue
     */
    public function setNumber($number)
    {
      $this->number = $number;
      return $this;
    }

}
