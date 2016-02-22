<?php

namespace Google\AdsApi\AdWords\v201601\o;

class CampaignEstimate extends \Google\AdsApi\AdWords\v201601\o\Estimate
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate[] $adGroupEstimates
     */
    protected $adGroupEstimates = null;

    /**
     * @param string $EstimateType
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate[] $adGroupEstimates
     */
    public function __construct($EstimateType = null, $campaignId = null, array $adGroupEstimates = null)
    {
      parent::__construct($EstimateType);
      $this->campaignId = $campaignId;
      $this->adGroupEstimates = $adGroupEstimates;
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
     * @return \Google\AdsApi\AdWords\v201601\o\CampaignEstimate
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate[]
     */
    public function getAdGroupEstimates()
    {
      return $this->adGroupEstimates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\o\AdGroupEstimate[] $adGroupEstimates
     * @return \Google\AdsApi\AdWords\v201601\o\CampaignEstimate
     */
    public function setAdGroupEstimates(array $adGroupEstimates)
    {
      $this->adGroupEstimates = $adGroupEstimates;
      return $this;
    }

}
