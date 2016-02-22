<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CpmBid extends \Google\AdsApi\AdWords\v201601\cm\Bids
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $bid
     */
    protected $bid = null;

    /**
     * @var string $cpmBidSource
     */
    protected $cpmBidSource = null;

    /**
     * @param string $BidsType
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $bid
     * @param string $cpmBidSource
     */
    public function __construct($BidsType = null, $bid = null, $cpmBidSource = null)
    {
      parent::__construct($BidsType);
      $this->bid = $bid;
      $this->cpmBidSource = $cpmBidSource;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Money
     */
    public function getBid()
    {
      return $this->bid;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $bid
     * @return \Google\AdsApi\AdWords\v201601\cm\CpmBid
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

    /**
     * @return string
     */
    public function getCpmBidSource()
    {
      return $this->cpmBidSource;
    }

    /**
     * @param string $cpmBidSource
     * @return \Google\AdsApi\AdWords\v201601\cm\CpmBid
     */
    public function setCpmBidSource($cpmBidSource)
    {
      $this->cpmBidSource = $cpmBidSource;
      return $this;
    }

}
