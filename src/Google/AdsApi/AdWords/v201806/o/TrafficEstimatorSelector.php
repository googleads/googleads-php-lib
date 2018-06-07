<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficEstimatorSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\CampaignEstimateRequest[] $campaignEstimateRequests
     */
    protected $campaignEstimateRequests = null;

    /**
     * @var boolean $platformEstimateRequested
     */
    protected $platformEstimateRequested = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\CampaignEstimateRequest[] $campaignEstimateRequests
     * @param boolean $platformEstimateRequested
     */
    public function __construct(array $campaignEstimateRequests = null, $platformEstimateRequested = null)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
      $this->platformEstimateRequested = $platformEstimateRequested;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\CampaignEstimateRequest[]
     */
    public function getCampaignEstimateRequests()
    {
      return $this->campaignEstimateRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\CampaignEstimateRequest[] $campaignEstimateRequests
     * @return \Google\AdsApi\AdWords\v201806\o\TrafficEstimatorSelector
     */
    public function setCampaignEstimateRequests(array $campaignEstimateRequests)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPlatformEstimateRequested()
    {
      return $this->platformEstimateRequested;
    }

    /**
     * @param boolean $platformEstimateRequested
     * @return \Google\AdsApi\AdWords\v201806\o\TrafficEstimatorSelector
     */
    public function setPlatformEstimateRequested($platformEstimateRequested)
    {
      $this->platformEstimateRequested = $platformEstimateRequested;
      return $this;
    }

}
