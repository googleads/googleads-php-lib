<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Campaign
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $campaignGroupId
     */
    protected $campaignGroupId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $servingStatus
     */
    protected $servingStatus = null;

    /**
     * @var string $startDate
     */
    protected $startDate = null;

    /**
     * @var string $endDate
     */
    protected $endDate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Budget $budget
     */
    protected $budget = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ConversionOptimizerEligibility $conversionOptimizerEligibility
     */
    protected $conversionOptimizerEligibility = null;

    /**
     * @var string $adServingOptimizationStatus
     */
    protected $adServingOptimizationStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\FrequencyCap $frequencyCap
     */
    protected $frequencyCap = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Setting[] $settings
     */
    protected $settings = null;

    /**
     * @var string $advertisingChannelType
     */
    protected $advertisingChannelType = null;

    /**
     * @var string $advertisingChannelSubType
     */
    protected $advertisingChannelSubType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\NetworkSetting $networkSetting
     */
    protected $networkSetting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Label[] $labels
     */
    protected $labels = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     */
    protected $biddingStrategyConfiguration = null;

    /**
     * @var string $campaignTrialType
     */
    protected $campaignTrialType = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    protected $forwardCompatibilityMap = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var string $finalUrlSuffix
     */
    protected $finalUrlSuffix = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     */
    protected $urlCustomParameters = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\VanityPharma $vanityPharma
     */
    protected $vanityPharma = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\SelectiveOptimization $selectiveOptimization
     */
    protected $selectiveOptimization = null;

    /**
     * @param int $id
     * @param int $campaignGroupId
     * @param string $name
     * @param string $status
     * @param string $servingStatus
     * @param string $startDate
     * @param string $endDate
     * @param \Google\AdsApi\AdWords\v201806\cm\Budget $budget
     * @param \Google\AdsApi\AdWords\v201806\cm\ConversionOptimizerEligibility $conversionOptimizerEligibility
     * @param string $adServingOptimizationStatus
     * @param \Google\AdsApi\AdWords\v201806\cm\FrequencyCap $frequencyCap
     * @param \Google\AdsApi\AdWords\v201806\cm\Setting[] $settings
     * @param string $advertisingChannelType
     * @param string $advertisingChannelSubType
     * @param \Google\AdsApi\AdWords\v201806\cm\NetworkSetting $networkSetting
     * @param \Google\AdsApi\AdWords\v201806\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201806\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @param string $campaignTrialType
     * @param int $baseCampaignId
     * @param \Google\AdsApi\AdWords\v201806\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201806\cm\VanityPharma $vanityPharma
     * @param \Google\AdsApi\AdWords\v201806\cm\SelectiveOptimization $selectiveOptimization
     */
    public function __construct($id = null, $campaignGroupId = null, $name = null, $status = null, $servingStatus = null, $startDate = null, $endDate = null, $budget = null, $conversionOptimizerEligibility = null, $adServingOptimizationStatus = null, $frequencyCap = null, array $settings = null, $advertisingChannelType = null, $advertisingChannelSubType = null, $networkSetting = null, array $labels = null, $biddingStrategyConfiguration = null, $campaignTrialType = null, $baseCampaignId = null, array $forwardCompatibilityMap = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, $vanityPharma = null, $selectiveOptimization = null)
    {
      $this->id = $id;
      $this->campaignGroupId = $campaignGroupId;
      $this->name = $name;
      $this->status = $status;
      $this->servingStatus = $servingStatus;
      $this->startDate = $startDate;
      $this->endDate = $endDate;
      $this->budget = $budget;
      $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
      $this->adServingOptimizationStatus = $adServingOptimizationStatus;
      $this->frequencyCap = $frequencyCap;
      $this->settings = $settings;
      $this->advertisingChannelType = $advertisingChannelType;
      $this->advertisingChannelSubType = $advertisingChannelSubType;
      $this->networkSetting = $networkSetting;
      $this->labels = $labels;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->campaignTrialType = $campaignTrialType;
      $this->baseCampaignId = $baseCampaignId;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->finalUrlSuffix = $finalUrlSuffix;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->vanityPharma = $vanityPharma;
      $this->selectiveOptimization = $selectiveOptimization;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignGroupId()
    {
      return $this->campaignGroupId;
    }

    /**
     * @param int $campaignGroupId
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setCampaignGroupId($campaignGroupId)
    {
      $this->campaignGroupId = (!is_null($campaignGroupId) && PHP_INT_SIZE === 4)
          ? floatval($campaignGroupId) : $campaignGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setName($name)
    {
      $this->name = $name;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getServingStatus()
    {
      return $this->servingStatus;
    }

    /**
     * @param string $servingStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setServingStatus($servingStatus)
    {
      $this->servingStatus = $servingStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param string $startDate
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param string $endDate
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Budget
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Budget $budget
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionOptimizerEligibility
     */
    public function getConversionOptimizerEligibility()
    {
      return $this->conversionOptimizerEligibility;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ConversionOptimizerEligibility $conversionOptimizerEligibility
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setConversionOptimizerEligibility($conversionOptimizerEligibility)
    {
      $this->conversionOptimizerEligibility = $conversionOptimizerEligibility;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdServingOptimizationStatus()
    {
      return $this->adServingOptimizationStatus;
    }

    /**
     * @param string $adServingOptimizationStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setAdServingOptimizationStatus($adServingOptimizationStatus)
    {
      $this->adServingOptimizationStatus = $adServingOptimizationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FrequencyCap
     */
    public function getFrequencyCap()
    {
      return $this->frequencyCap;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FrequencyCap $frequencyCap
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setFrequencyCap($frequencyCap)
    {
      $this->frequencyCap = $frequencyCap;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Setting[]
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Setting[] $settings
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setSettings(array $settings)
    {
      $this->settings = $settings;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvertisingChannelType()
    {
      return $this->advertisingChannelType;
    }

    /**
     * @param string $advertisingChannelType
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setAdvertisingChannelType($advertisingChannelType)
    {
      $this->advertisingChannelType = $advertisingChannelType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvertisingChannelSubType()
    {
      return $this->advertisingChannelSubType;
    }

    /**
     * @param string $advertisingChannelSubType
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setAdvertisingChannelSubType($advertisingChannelSubType)
    {
      $this->advertisingChannelSubType = $advertisingChannelSubType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\NetworkSetting
     */
    public function getNetworkSetting()
    {
      return $this->networkSetting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\NetworkSetting $networkSetting
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setNetworkSetting($networkSetting)
    {
      $this->networkSetting = $networkSetting;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setLabels(array $labels)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\BiddingStrategyConfiguration
     */
    public function getBiddingStrategyConfiguration()
    {
      return $this->biddingStrategyConfiguration;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setBiddingStrategyConfiguration($biddingStrategyConfiguration)
    {
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignTrialType()
    {
      return $this->campaignTrialType;
    }

    /**
     * @param string $campaignTrialType
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setCampaignTrialType($campaignTrialType)
    {
      $this->campaignTrialType = $campaignTrialType;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setForwardCompatibilityMap(array $forwardCompatibilityMap)
    {
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getFinalUrlSuffix()
    {
      return $this->finalUrlSuffix;
    }

    /**
     * @param string $finalUrlSuffix
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setFinalUrlSuffix($finalUrlSuffix)
    {
      $this->finalUrlSuffix = $finalUrlSuffix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->urlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\CustomParameters $urlCustomParameters
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setUrlCustomParameters($urlCustomParameters)
    {
      $this->urlCustomParameters = $urlCustomParameters;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\VanityPharma
     */
    public function getVanityPharma()
    {
      return $this->vanityPharma;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\VanityPharma $vanityPharma
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setVanityPharma($vanityPharma)
    {
      $this->vanityPharma = $vanityPharma;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\SelectiveOptimization
     */
    public function getSelectiveOptimization()
    {
      return $this->selectiveOptimization;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\SelectiveOptimization $selectiveOptimization
     * @return \Google\AdsApi\AdWords\v201806\cm\Campaign
     */
    public function setSelectiveOptimization($selectiveOptimization)
    {
      $this->selectiveOptimization = $selectiveOptimization;
      return $this;
    }

}
