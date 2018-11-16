<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BidLandscapeLandscapePoint
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $bid
     */
    protected $bid = null;

    /**
     * @var int $clicks
     */
    protected $clicks = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $cost
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
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $requiredBudget
     */
    protected $requiredBudget = null;

    /**
     * @var float $biddableConversions
     */
    protected $biddableConversions = null;

    /**
     * @var float $biddableConversionsValue
     */
    protected $biddableConversionsValue = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var int $totalLocalImpressions
     */
    protected $totalLocalImpressions = null;

    /**
     * @var int $totalLocalClicks
     */
    protected $totalLocalClicks = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $totalLocalCost
     */
    protected $totalLocalCost = null;

    /**
     * @var int $totalLocalPromotedImpressions
     */
    protected $totalLocalPromotedImpressions = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $bid
     * @param int $clicks
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $cost
     * @param int $impressions
     * @param int $promotedImpressions
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $requiredBudget
     * @param float $biddableConversions
     * @param float $biddableConversionsValue
     * @param float $bidModifier
     * @param int $totalLocalImpressions
     * @param int $totalLocalClicks
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $totalLocalCost
     * @param int $totalLocalPromotedImpressions
     */
    public function __construct($bid = null, $clicks = null, $cost = null, $impressions = null, $promotedImpressions = null, $requiredBudget = null, $biddableConversions = null, $biddableConversionsValue = null, $bidModifier = null, $totalLocalImpressions = null, $totalLocalClicks = null, $totalLocalCost = null, $totalLocalPromotedImpressions = null)
    {
      $this->bid = $bid;
      $this->clicks = $clicks;
      $this->cost = $cost;
      $this->impressions = $impressions;
      $this->promotedImpressions = $promotedImpressions;
      $this->requiredBudget = $requiredBudget;
      $this->biddableConversions = $biddableConversions;
      $this->biddableConversionsValue = $biddableConversionsValue;
      $this->bidModifier = $bidModifier;
      $this->totalLocalImpressions = $totalLocalImpressions;
      $this->totalLocalClicks = $totalLocalClicks;
      $this->totalLocalCost = $totalLocalCost;
      $this->totalLocalPromotedImpressions = $totalLocalPromotedImpressions;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getBid()
    {
      return $this->bid;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $bid
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
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
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setClicks($clicks)
    {
      $this->clicks = (!is_null($clicks) && PHP_INT_SIZE === 4)
          ? floatval($clicks) : $clicks;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getCost()
    {
      return $this->cost;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $cost
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
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
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setImpressions($impressions)
    {
      $this->impressions = (!is_null($impressions) && PHP_INT_SIZE === 4)
          ? floatval($impressions) : $impressions;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setPromotedImpressions($promotedImpressions)
    {
      $this->promotedImpressions = (!is_null($promotedImpressions) && PHP_INT_SIZE === 4)
          ? floatval($promotedImpressions) : $promotedImpressions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getRequiredBudget()
    {
      return $this->requiredBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $requiredBudget
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setRequiredBudget($requiredBudget)
    {
      $this->requiredBudget = $requiredBudget;
      return $this;
    }

    /**
     * @return float
     */
    public function getBiddableConversions()
    {
      return $this->biddableConversions;
    }

    /**
     * @param float $biddableConversions
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setBiddableConversions($biddableConversions)
    {
      $this->biddableConversions = $biddableConversions;
      return $this;
    }

    /**
     * @return float
     */
    public function getBiddableConversionsValue()
    {
      return $this->biddableConversionsValue;
    }

    /**
     * @param float $biddableConversionsValue
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setBiddableConversionsValue($biddableConversionsValue)
    {
      $this->biddableConversionsValue = $biddableConversionsValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidModifier()
    {
      return $this->bidModifier;
    }

    /**
     * @param float $bidModifier
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalLocalImpressions()
    {
      return $this->totalLocalImpressions;
    }

    /**
     * @param int $totalLocalImpressions
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setTotalLocalImpressions($totalLocalImpressions)
    {
      $this->totalLocalImpressions = (!is_null($totalLocalImpressions) && PHP_INT_SIZE === 4)
          ? floatval($totalLocalImpressions) : $totalLocalImpressions;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalLocalClicks()
    {
      return $this->totalLocalClicks;
    }

    /**
     * @param int $totalLocalClicks
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setTotalLocalClicks($totalLocalClicks)
    {
      $this->totalLocalClicks = (!is_null($totalLocalClicks) && PHP_INT_SIZE === 4)
          ? floatval($totalLocalClicks) : $totalLocalClicks;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getTotalLocalCost()
    {
      return $this->totalLocalCost;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $totalLocalCost
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setTotalLocalCost($totalLocalCost)
    {
      $this->totalLocalCost = $totalLocalCost;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalLocalPromotedImpressions()
    {
      return $this->totalLocalPromotedImpressions;
    }

    /**
     * @param int $totalLocalPromotedImpressions
     * @return \Google\AdsApi\AdWords\v201809\cm\BidLandscapeLandscapePoint
     */
    public function setTotalLocalPromotedImpressions($totalLocalPromotedImpressions)
    {
      $this->totalLocalPromotedImpressions = (!is_null($totalLocalPromotedImpressions) && PHP_INT_SIZE === 4)
          ? floatval($totalLocalPromotedImpressions) : $totalLocalPromotedImpressions;
      return $this;
    }

}
