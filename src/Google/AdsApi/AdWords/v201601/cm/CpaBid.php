<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CpaBid extends \Google\AdsApi\AdWords\v201601\cm\Bids
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $bid
     */
    protected $bid = null;

    /**
     * @param string $BidsType
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $bid
     */
    public function __construct($BidsType = null, $bid = null)
    {
      parent::__construct($BidsType);
      $this->bid = $bid;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\CpaBid
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

}
