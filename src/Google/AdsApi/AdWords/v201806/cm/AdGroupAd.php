<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAd
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Ad $ad
     */
    protected $ad = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\AdGroupAdPolicySummary $policySummary
     */
    protected $policySummary = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Label[] $labels
     */
    protected $labels = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    protected $forwardCompatibilityMap = null;

    /**
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201806\cm\Ad $ad
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupAdPolicySummary $policySummary
     * @param \Google\AdsApi\AdWords\v201806\cm\Label[] $labels
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     * @param \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    public function __construct($adGroupId = null, $ad = null, $status = null, $policySummary = null, array $labels = null, $baseCampaignId = null, $baseAdGroupId = null, array $forwardCompatibilityMap = null)
    {
      $this->adGroupId = $adGroupId;
      $this->ad = $ad;
      $this->status = $status;
      $this->policySummary = $policySummary;
      $this->labels = $labels;
      $this->baseCampaignId = $baseCampaignId;
      $this->baseAdGroupId = $baseAdGroupId;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Ad
     */
    public function getAd()
    {
      return $this->ad;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Ad $ad
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setAd($ad)
    {
      $this->ad = $ad;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAdPolicySummary
     */
    public function getPolicySummary()
    {
      return $this->policySummary;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupAdPolicySummary $policySummary
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setPolicySummary($policySummary)
    {
      $this->policySummary = $policySummary;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Label[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Label[] $labels
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setLabels(array $labels)
    {
      $this->labels = $labels;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
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
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (!is_null($baseAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[]
     */
    public function getForwardCompatibilityMap()
    {
      return $this->forwardCompatibilityMap;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupAd
     */
    public function setForwardCompatibilityMap(array $forwardCompatibilityMap)
    {
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      return $this;
    }

}
