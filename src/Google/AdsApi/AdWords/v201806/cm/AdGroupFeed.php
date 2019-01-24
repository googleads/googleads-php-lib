<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupFeed
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     */
    protected $matchingFunction = null;

    /**
     * @var int[] $placeholderTypes
     */
    protected $placeholderTypes = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @param int $feedId
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     * @param int[] $placeholderTypes
     * @param string $status
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     */
    public function __construct($feedId = null, $adGroupId = null, $matchingFunction = null, array $placeholderTypes = null, $status = null, $baseCampaignId = null, $baseAdGroupId = null)
    {
      $this->feedId = $feedId;
      $this->adGroupId = $adGroupId;
      $this->matchingFunction = $matchingFunction;
      $this->placeholderTypes = $placeholderTypes;
      $this->status = $status;
      $this->baseCampaignId = $baseCampaignId;
      $this->baseAdGroupId = $baseAdGroupId;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\MatchingFunction
     */
    public function getMatchingFunction()
    {
      return $this->matchingFunction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setMatchingFunction($matchingFunction)
    {
      $this->matchingFunction = $matchingFunction;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getPlaceholderTypes()
    {
      return $this->placeholderTypes;
    }

    /**
     * @param int[] $placeholderTypes
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setPlaceholderTypes(array $placeholderTypes)
    {
      $this->placeholderTypes = $placeholderTypes;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
      return $this->baseCampaignId;
    }

    /**
     * @param int $baseCampaignId
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseAdGroupId()
    {
      return $this->baseAdGroupId;
    }

    /**
     * @param int $baseAdGroupId
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupFeed
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (!is_null($baseAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
      return $this;
    }

}
