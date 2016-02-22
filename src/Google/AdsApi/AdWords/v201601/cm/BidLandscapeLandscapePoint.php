<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BidLandscapeLandscapePoint
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $bid
     */
    protected $bid = null;

    /**
     * @var int $clicks
     */
    protected $clicks = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Money $cost
     */
    protected $cost = null;

    /**
     * @var int $impressions
     */
    protected $impressions = null;

    /**
     * @var int $promotedImpressions
     */
    protected $promotedImpressions = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $bid
     * @param int $clicks
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $cost
     * @param int $impressions
     * @param int $promotedImpressions
     */
    public function __construct($bid = null, $clicks = null, $cost = null, $impressions = null, $promotedImpressions = null)
    {
      $this->bid = $bid;
      $this->clicks = $clicks;
      $this->cost = $cost;
      $this->impressions = $impressions;
      $this->promotedImpressions = $promotedImpressions;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\BidLandscapeLandscapePoint
     */
    public function setBid($bid)
    {
      $this->bid = $bid;
      return $this;
    }

    /**
     * @return int
     */
    public function getClicks()
    {
      return $this->clicks;
    }

    /**
     * @param int $clicks
     * @return \Google\AdsApi\AdWords\v201601\cm\BidLandscapeLandscapePoint
     */
    public function setClicks($clicks)
    {
      $this->clicks = $clicks;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Money
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Money $cost
     * @return \Google\AdsApi\AdWords\v201601\cm\BidLandscapeLandscapePoint
     */
    public function setCost($cost)
    {
      $this->cost = $cost;
      return $this;
    }

    /**
     * @return int
     */
    public function getImpressions()
    {
      return $this->impressions;
    }

    /**
     * @param int $impressions
     * @return \Google\AdsApi\AdWords\v201601\cm\BidLandscapeLandscapePoint
     */
    public function setImpressions($impressions)
    {
      $this->impressions = $impressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getPromotedImpressions()
    {
      return $this->promotedImpressions;
    }

    /**
     * @param int $promotedImpressions
     * @return \Google\AdsApi\AdWords\v201601\cm\BidLandscapeLandscapePoint
     */
    public function setPromotedImpressions($promotedImpressions)
    {
      $this->promotedImpressions = $promotedImpressions;
      return $this;
    }

}
