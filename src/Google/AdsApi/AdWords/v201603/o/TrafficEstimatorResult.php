<?php

namespace Google\AdsApi\AdWords\v201603\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficEstimatorResult
{

    /**
     * @var \Google\AdsApi\AdWords\v201603\o\CampaignEstimate[] $campaignEstimates
     */
    protected $campaignEstimates = null;

    /**
     * @param \Google\AdsApi\AdWords\v201603\o\CampaignEstimate[] $campaignEstimates
     */
    public function __construct(array $campaignEstimates = null)
    {
      $this->campaignEstimates = $campaignEstimates;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\o\CampaignEstimate[]
     */
    public function getCampaignEstimates()
    {
      return $this->campaignEstimates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\o\CampaignEstimate[] $campaignEstimates
     * @return \Google\AdsApi\AdWords\v201603\o\TrafficEstimatorResult
     */
    public function setCampaignEstimates(array $campaignEstimates)
    {
      $this->campaignEstimates = $campaignEstimates;
      return $this;
    }

}
