<?php

namespace Google\AdsApi\AdWords\v201603\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficEstimatorSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\o\CampaignEstimateRequest[] $campaignEstimateRequests
     */
    protected $campaignEstimateRequests = null;

    /**
     * @param \Google\AdsApi\AdWords\v201603\o\CampaignEstimateRequest[] $campaignEstimateRequests
     */
    public function __construct(array $campaignEstimateRequests = null)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\o\CampaignEstimateRequest[]
     */
    public function getCampaignEstimateRequests()
    {
      return $this->campaignEstimateRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\o\CampaignEstimateRequest[] $campaignEstimateRequests
     * @return \Google\AdsApi\AdWords\v201603\o\TrafficEstimatorSelector
     */
    public function setCampaignEstimateRequests(array $campaignEstimateRequests)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
      return $this;
    }

}
