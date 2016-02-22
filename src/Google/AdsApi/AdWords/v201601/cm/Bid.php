<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class Bid
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $amount
     */
    protected $amount = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $amount
     */
    public function __construct($amount = null)
    {
      $this->amount = $amount;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Money
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $amount
     * @return \Google\AdsApi\AdWords\v201601\cm\Bid
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

}
