<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroup
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Setting[] $settings
     */
    protected $settings = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Label[] $labels
     */
    protected $labels = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[] $forwardCompatibilityMap
     */
    protected $forwardCompatibilityMap = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     */
    protected $biddingStrategyConfiguration = null;

    /**
     * @var string $contentBidCriterionTypeGroup
     */
    protected $contentBidCriterionTypeGroup = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     */
    protected $urlCustomParameters = null;

    /**
     * @var string $adGroupType
     */
    protected $adGroupType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\AdGroupAdRotationMode $adGroupAdRotationMode
     */
    protected $adGroupAdRotationMode = null;

    /**
     * @param int $id
     * @param int $campaignId
     * @param string $campaignName
     * @param string $name
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201710\cm\Setting[] $settings
     * @param \Google\AdsApi\AdWords\v201710\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param \Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @param string $contentBidCriterionTypeGroup
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @param string $adGroupType
     * @param \Google\AdsApi\AdWords\v201710\cm\AdGroupAdRotationMode $adGroupAdRotationMode
     */
    public function __construct($id = null, $campaignId = null, $campaignName = null, $name = null, $status = null, array $settings = null, array $labels = null, array $forwardCompatibilityMap = null, $biddingStrategyConfiguration = null, $contentBidCriterionTypeGroup = null, $baseCampaignId = null, $baseAdGroupId = null, $trackingUrlTemplate = null, $urlCustomParameters = null, $adGroupType = null, $adGroupAdRotationMode = null)
    {
      $this->id = $id;
      $this->campaignId = $campaignId;
      $this->campaignName = $campaignName;
      $this->name = $name;
      $this->status = $status;
      $this->settings = $settings;
      $this->labels = $labels;
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      $this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
      $this->baseCampaignId = $baseCampaignId;
      $this->baseAdGroupId = $baseAdGroupId;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->urlCustomParameters = $urlCustomParameters;
      $this->adGroupType = $adGroupType;
      $this->adGroupAdRotationMode = $adGroupAdRotationMode;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
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
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Setting[]
     */
    public function getSettings()
    {
      return $this->settings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Setting[] $settings
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setSettings(array $settings)
    {
      $this->settings = $settings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Label[]
     */
    public function getLabels()
    {
      return $this->labels;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Label[] $labels
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setLabels(array $labels)
    {
      $this->labels = $labels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[]
     */
    public function getForwardCompatibilityMap()
    {
      return $this->forwardCompatibilityMap;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setForwardCompatibilityMap(array $forwardCompatibilityMap)
    {
      $this->forwardCompatibilityMap = $forwardCompatibilityMap;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration
     */
    public function getBiddingStrategyConfiguration()
    {
      return $this->biddingStrategyConfiguration;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\BiddingStrategyConfiguration $biddingStrategyConfiguration
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setBiddingStrategyConfiguration($biddingStrategyConfiguration)
    {
      $this->biddingStrategyConfiguration = $biddingStrategyConfiguration;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentBidCriterionTypeGroup()
    {
      return $this->contentBidCriterionTypeGroup;
    }

    /**
     * @param string $contentBidCriterionTypeGroup
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setContentBidCriterionTypeGroup($contentBidCriterionTypeGroup)
    {
      $this->contentBidCriterionTypeGroup = $contentBidCriterionTypeGroup;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (!is_null($baseAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomParameters
     */
    public function getUrlCustomParameters()
    {
      return $this->urlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomParameters $urlCustomParameters
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setUrlCustomParameters($urlCustomParameters)
    {
      $this->urlCustomParameters = $urlCustomParameters;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupType()
    {
      return $this->adGroupType;
    }

    /**
     * @param string $adGroupType
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setAdGroupType($adGroupType)
    {
      $this->adGroupType = $adGroupType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroupAdRotationMode
     */
    public function getAdGroupAdRotationMode()
    {
      return $this->adGroupAdRotationMode;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\AdGroupAdRotationMode $adGroupAdRotationMode
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroup
     */
    public function setAdGroupAdRotationMode($adGroupAdRotationMode)
    {
      $this->adGroupAdRotationMode = $adGroupAdRotationMode;
      return $this;
    }

}
