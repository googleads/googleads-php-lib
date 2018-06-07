<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UniversalAppCampaignSetting extends \Google\AdsApi\AdWords\v201806\cm\Setting
{

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $appVendor
     */
    protected $appVendor = null;

    /**
     * @var string $description1
     */
    protected $description1 = null;

    /**
     * @var string $description2
     */
    protected $description2 = null;

    /**
     * @var string $description3
     */
    protected $description3 = null;

    /**
     * @var string $description4
     */
    protected $description4 = null;

    /**
     * @var int[] $youtubeVideoMediaIds
     */
    protected $youtubeVideoMediaIds = null;

    /**
     * @var int[] $imageMediaIds
     */
    protected $imageMediaIds = null;

    /**
     * @var string $universalAppBiddingStrategyGoalType
     */
    protected $universalAppBiddingStrategyGoalType = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ListOperations $youtubeVideoMediaIdsOps
     */
    protected $youtubeVideoMediaIdsOps = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ListOperations $imageMediaIdsOps
     */
    protected $imageMediaIdsOps = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignAdsPolicyDecisions[] $adsPolicyDecisions
     */
    protected $adsPolicyDecisions = null;

    /**
     * @param string $SettingType
     * @param string $appId
     * @param string $appVendor
     * @param string $description1
     * @param string $description2
     * @param string $description3
     * @param string $description4
     * @param int[] $youtubeVideoMediaIds
     * @param int[] $imageMediaIds
     * @param string $universalAppBiddingStrategyGoalType
     * @param \Google\AdsApi\AdWords\v201806\cm\ListOperations $youtubeVideoMediaIdsOps
     * @param \Google\AdsApi\AdWords\v201806\cm\ListOperations $imageMediaIdsOps
     * @param \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignAdsPolicyDecisions[] $adsPolicyDecisions
     */
    public function __construct($SettingType = null, $appId = null, $appVendor = null, $description1 = null, $description2 = null, $description3 = null, $description4 = null, array $youtubeVideoMediaIds = null, array $imageMediaIds = null, $universalAppBiddingStrategyGoalType = null, $youtubeVideoMediaIdsOps = null, $imageMediaIdsOps = null, array $adsPolicyDecisions = null)
    {
      parent::__construct($SettingType);
      $this->appId = $appId;
      $this->appVendor = $appVendor;
      $this->description1 = $description1;
      $this->description2 = $description2;
      $this->description3 = $description3;
      $this->description4 = $description4;
      $this->youtubeVideoMediaIds = $youtubeVideoMediaIds;
      $this->imageMediaIds = $imageMediaIds;
      $this->universalAppBiddingStrategyGoalType = $universalAppBiddingStrategyGoalType;
      $this->youtubeVideoMediaIdsOps = $youtubeVideoMediaIdsOps;
      $this->imageMediaIdsOps = $imageMediaIdsOps;
      $this->adsPolicyDecisions = $adsPolicyDecisions;
    }

    /**
     * @return string
     */
    public function getAppId()
    {
      return $this->appId;
    }

    /**
     * @param string $appId
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppVendor()
    {
      return $this->appVendor;
    }

    /**
     * @param string $appVendor
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setAppVendor($appVendor)
    {
      $this->appVendor = $appVendor;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription1()
    {
      return $this->description1;
    }

    /**
     * @param string $description1
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setDescription1($description1)
    {
      $this->description1 = $description1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->description2;
    }

    /**
     * @param string $description2
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setDescription2($description2)
    {
      $this->description2 = $description2;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription3()
    {
      return $this->description3;
    }

    /**
     * @param string $description3
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setDescription3($description3)
    {
      $this->description3 = $description3;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription4()
    {
      return $this->description4;
    }

    /**
     * @param string $description4
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setDescription4($description4)
    {
      $this->description4 = $description4;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getYoutubeVideoMediaIds()
    {
      return $this->youtubeVideoMediaIds;
    }

    /**
     * @param int[] $youtubeVideoMediaIds
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setYoutubeVideoMediaIds(array $youtubeVideoMediaIds)
    {
      $this->youtubeVideoMediaIds = $youtubeVideoMediaIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getImageMediaIds()
    {
      return $this->imageMediaIds;
    }

    /**
     * @param int[] $imageMediaIds
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setImageMediaIds(array $imageMediaIds)
    {
      $this->imageMediaIds = $imageMediaIds;
      return $this;
    }

    /**
     * @return string
     */
    public function getUniversalAppBiddingStrategyGoalType()
    {
      return $this->universalAppBiddingStrategyGoalType;
    }

    /**
     * @param string $universalAppBiddingStrategyGoalType
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setUniversalAppBiddingStrategyGoalType($universalAppBiddingStrategyGoalType)
    {
      $this->universalAppBiddingStrategyGoalType = $universalAppBiddingStrategyGoalType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ListOperations
     */
    public function getYoutubeVideoMediaIdsOps()
    {
      return $this->youtubeVideoMediaIdsOps;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ListOperations $youtubeVideoMediaIdsOps
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setYoutubeVideoMediaIdsOps($youtubeVideoMediaIdsOps)
    {
      $this->youtubeVideoMediaIdsOps = $youtubeVideoMediaIdsOps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ListOperations
     */
    public function getImageMediaIdsOps()
    {
      return $this->imageMediaIdsOps;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ListOperations $imageMediaIdsOps
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setImageMediaIdsOps($imageMediaIdsOps)
    {
      $this->imageMediaIdsOps = $imageMediaIdsOps;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignAdsPolicyDecisions[]
     */
    public function getAdsPolicyDecisions()
    {
      return $this->adsPolicyDecisions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignAdsPolicyDecisions[] $adsPolicyDecisions
     * @return \Google\AdsApi\AdWords\v201806\cm\UniversalAppCampaignSetting
     */
    public function setAdsPolicyDecisions(array $adsPolicyDecisions)
    {
      $this->adsPolicyDecisions = $adsPolicyDecisions;
      return $this;
    }

}
