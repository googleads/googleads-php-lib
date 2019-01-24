<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignFeed
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

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
     * @param int $feedId
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     * @param int[] $placeholderTypes
     * @param string $status
     * @param int $baseCampaignId
     */
    public function __construct($feedId = null, $campaignId = null, $matchingFunction = null, array $placeholderTypes = null, $status = null, $baseCampaignId = null)
    {
      $this->feedId = $feedId;
      $this->campaignId = $campaignId;
      $this->matchingFunction = $matchingFunction;
      $this->placeholderTypes = $placeholderTypes;
      $this->status = $status;
      $this->baseCampaignId = $baseCampaignId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
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
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignFeed
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

}
