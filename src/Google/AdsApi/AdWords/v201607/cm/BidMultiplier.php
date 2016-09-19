<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BidMultiplier
{

    /**
     * @var float $multiplier
     */
    protected $multiplier = null;

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\Bid $multipliedBid
     */
    protected $multipliedBid = null;

    /**
     * @param float $multiplier
     * @param \Google\AdsApi\AdWords\v201607\cm\Bid $multipliedBid
     */
    public function __construct($multiplier = null, $multipliedBid = null)
    {
      $this->multiplier = $multiplier;
      $this->multipliedBid = $multipliedBid;
    }

    /**
     * @return float
     */
    public function getMultiplier()
    {
      return $this->multiplier;
    }

    /**
     * @param float $multiplier
     * @return \Google\AdsApi\AdWords\v201607\cm\BidMultiplier
     */
    public function setMultiplier($multiplier)
    {
      $this->multiplier = $multiplier;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\Bid
     */
    public function getMultipliedBid()
    {
      return $this->multipliedBid;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\Bid $multipliedBid
     * @return \Google\AdsApi\AdWords\v201607\cm\BidMultiplier
     */
    public function setMultipliedBid($multipliedBid)
    {
      $this->multipliedBid = $multipliedBid;
      return $this;
    }

}
