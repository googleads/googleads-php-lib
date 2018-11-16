<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignEstimateRequest extends \Google\AdsApi\AdWords\v201802\o\EstimateRequest
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\o\AdGroupEstimateRequest[] $adGroupEstimateRequests
     */
    protected $adGroupEstimateRequests = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Criterion[] $criteria
     */
    protected $criteria = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\NetworkSetting $networkSetting
     */
    protected $networkSetting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $dailyBudget
     */
    protected $dailyBudget = null;

    /**
     * @param string $EstimateRequestType
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201802\o\AdGroupEstimateRequest[] $adGroupEstimateRequests
     * @param \Google\AdsApi\AdWords\v201802\cm\Criterion[] $criteria
     * @param \Google\AdsApi\AdWords\v201802\cm\NetworkSetting $networkSetting
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $dailyBudget
     */
    public function __construct($EstimateRequestType = null, $campaignId = null, array $adGroupEstimateRequests = null, array $criteria = null, $networkSetting = null, $dailyBudget = null)
    {
      parent::__construct($EstimateRequestType);
      $this->campaignId = $campaignId;
      $this->adGroupEstimateRequests = $adGroupEstimateRequests;
      $this->criteria = $criteria;
      $this->networkSetting = $networkSetting;
      $this->dailyBudget = $dailyBudget;
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
     * @return \Google\AdsApi\AdWords\v201802\o\CampaignEstimateRequest
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\o\AdGroupEstimateRequest[]
     */
    public function getAdGroupEstimateRequests()
    {
      return $this->adGroupEstimateRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\o\AdGroupEstimateRequest[] $adGroupEstimateRequests
     * @return \Google\AdsApi\AdWords\v201802\o\CampaignEstimateRequest
     */
    public function setAdGroupEstimateRequests(array $adGroupEstimateRequests)
    {
      $this->adGroupEstimateRequests = $adGroupEstimateRequests;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Criterion[]
     */
    public function getCriteria()
    {
      return $this->criteria;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Criterion[] $criteria
     * @return \Google\AdsApi\AdWords\v201802\o\CampaignEstimateRequest
     */
    public function setCriteria(array $criteria)
    {
      $this->criteria = $criteria;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\NetworkSetting
     */
    public function getNetworkSetting()
    {
      return $this->networkSetting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\NetworkSetting $networkSetting
     * @return \Google\AdsApi\AdWords\v201802\o\CampaignEstimateRequest
     */
    public function setNetworkSetting($networkSetting)
    {
      $this->networkSetting = $networkSetting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getDailyBudget()
    {
      return $this->dailyBudget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $dailyBudget
     * @return \Google\AdsApi\AdWords\v201802\o\CampaignEstimateRequest
     */
    public function setDailyBudget($dailyBudget)
    {
      $this->dailyBudget = $dailyBudget;
      return $this;
    }

}
