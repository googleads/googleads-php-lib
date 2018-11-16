<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CpaBid extends \Google\AdsApi\AdWords\v201806\cm\Bids
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Money $bid
     */
    protected $bid = null;

    /**
     * @var string $bidSource
     */
    protected $bidSource = null;

    /**
     * @param string $BidsType
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $bid
     * @param string $bidSource
     */
    public function __construct($BidsType = null, $bid = null, $bidSource = null)
    {
      parent::__construct($BidsType);
      $this->bid = $bid;
      $this->bidSource = $bidSource;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Money
     */
    public function getBid()
    {
      return $this->bid;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $bid
     * @return \Google\AdsApi\AdWords\v201806\cm\CpaBid
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

    /**
     * @return string
     */
    public function getBidSource()
    {
      return $this->bidSource;
    }

    /**
     * @param string $bidSource
     * @return \Google\AdsApi\AdWords\v201806\cm\CpaBid
     */
    public function setBidSource($bidSource)
    {
      $this->bidSource = $bidSource;
      return $this;
    }

}
