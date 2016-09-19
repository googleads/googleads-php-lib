<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Money extends \Google\AdsApi\AdWords\v201607\cm\ComparableValue
{

    /**
     * @var int $microAmount
     */
    protected $microAmount = null;

    /**
     * @param string $ComparableValueType
     * @param int $microAmount
     */
    public function __construct($ComparableValueType = null, $microAmount = null)
    {
      parent::__construct($ComparableValueType);
      $this->microAmount = $microAmount;
    }

    /**
     * @return int
     */
    public function getMicroAmount()
    {
      return $this->microAmount;
    }

    /**
     * @param int $microAmount
     * @return \Google\AdsApi\AdWords\v201607\cm\Money
     */
    public function setMicroAmount($microAmount)
    {
      $this->microAmount = $microAmount;
      return $this;
    }

}
