<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Bid
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $amount
     */
    protected $amount = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $amount
     */
    public function __construct($amount = null)
    {
      $this->amount = $amount;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $amount
     * @return \Google\AdsApi\AdWords\v201802\cm\Bid
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
