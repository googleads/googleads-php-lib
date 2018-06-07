<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignEstimate extends \Google\AdsApi\AdWords\v201806\o\Estimate
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\AdGroupEstimate[] $adGroupEstimates
     */
    protected $adGroupEstimates = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\PlatformCampaignEstimate[] $platformEstimates
     */
    protected $platformEstimates = null;

    /**
     * @param string $EstimateType
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201806\o\AdGroupEstimate[] $adGroupEstimates
     * @param \Google\AdsApi\AdWords\v201806\o\PlatformCampaignEstimate[] $platformEstimates
     */
    public function __construct($EstimateType = null, $campaignId = null, array $adGroupEstimates = null, array $platformEstimates = null)
    {
      parent::__construct($EstimateType);
      $this->campaignId = $campaignId;
      $this->adGroupEstimates = $adGroupEstimates;
      $this->platformEstimates = $platformEstimates;
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
     * @return \Google\AdsApi\AdWords\v201806\o\CampaignEstimate
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\AdGroupEstimate[]
     */
    public function getAdGroupEstimates()
    {
      return $this->adGroupEstimates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\AdGroupEstimate[] $adGroupEstimates
     * @return \Google\AdsApi\AdWords\v201806\o\CampaignEstimate
     */
    public function setAdGroupEstimates(array $adGroupEstimates)
    {
      $this->adGroupEstimates = $adGroupEstimates;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\PlatformCampaignEstimate[]
     */
    public function getPlatformEstimates()
    {
      return $this->platformEstimates;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\PlatformCampaignEstimate[] $platformEstimates
     * @return \Google\AdsApi\AdWords\v201806\o\CampaignEstimate
     */
    public function setPlatformEstimates(array $platformEstimates)
    {
      $this->platformEstimates = $platformEstimates;
      return $this;
    }

}
