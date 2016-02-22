<?php

namespace Google\AdsApi\AdWords\v201601\o;

class TrafficEstimatorSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\o\CampaignEstimateRequest[] $campaignEstimateRequests
     */
    protected $campaignEstimateRequests = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\o\CampaignEstimateRequest[] $campaignEstimateRequests
     */
    public function __construct(array $campaignEstimateRequests = null)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\o\CampaignEstimateRequest[]
     */
    public function getCampaignEstimateRequests()
    {
      return $this->campaignEstimateRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\o\CampaignEstimateRequest[] $campaignEstimateRequests
     * @return \Google\AdsApi\AdWords\v201601\o\TrafficEstimatorSelector
     */
    public function setCampaignEstimateRequests(array $campaignEstimateRequests)
    {
      $this->campaignEstimateRequests = $campaignEstimateRequests;
      return $this;
    }

}
