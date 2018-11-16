<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExtensionFeedItem
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $feedItemId
     */
    protected $feedItemId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $feedType
     */
    protected $feedType = null;

    /**
     * @var string $startTime
     */
    protected $startTime = null;

    /**
     * @var string $endTime
     */
    protected $endTime = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemDevicePreference $devicePreference
     */
    protected $devicePreference = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemScheduling $scheduling
     */
    protected $scheduling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemCampaignTargeting $campaignTargeting
     */
    protected $campaignTargeting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemAdGroupTargeting $adGroupTargeting
     */
    protected $adGroupTargeting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Keyword $keywordTargeting
     */
    protected $keywordTargeting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Location $geoTargeting
     */
    protected $geoTargeting = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemGeoRestriction $geoTargetingRestriction
     */
    protected $geoTargetingRestriction = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData[] $policyData
     */
    protected $policyData = null;

    /**
     * @var string $ExtensionFeedItemType
     */
    protected $ExtensionFeedItemType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ExtensionFeedItem.Type' => 'ExtensionFeedItemType'];

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policyData = null, $ExtensionFeedItemType = null)
    {
      $this->feedId = $feedId;
      $this->feedItemId = $feedItemId;
      $this->status = $status;
      $this->feedType = $feedType;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->devicePreference = $devicePreference;
      $this->scheduling = $scheduling;
      $this->campaignTargeting = $campaignTargeting;
      $this->adGroupTargeting = $adGroupTargeting;
      $this->keywordTargeting = $keywordTargeting;
      $this->geoTargeting = $geoTargeting;
      $this->geoTargetingRestriction = $geoTargetingRestriction;
      $this->policyData = $policyData;
      $this->ExtensionFeedItemType = $ExtensionFeedItemType;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedItemId()
    {
      return $this->feedItemId;
    }

    /**
     * @param int $feedItemId
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setFeedItemId($feedItemId)
    {
      $this->feedItemId = (!is_null($feedItemId) && PHP_INT_SIZE === 4)
          ? floatval($feedItemId) : $feedItemId;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedType()
    {
      return $this->feedType;
    }

    /**
     * @param string $feedType
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setFeedType($feedType)
    {
      $this->feedType = $feedType;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemDevicePreference
     */
    public function getDevicePreference()
    {
      return $this->devicePreference;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemDevicePreference $devicePreference
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setDevicePreference($devicePreference)
    {
      $this->devicePreference = $devicePreference;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemScheduling
     */
    public function getScheduling()
    {
      return $this->scheduling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemScheduling $scheduling
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setScheduling($scheduling)
    {
      $this->scheduling = $scheduling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemCampaignTargeting
     */
    public function getCampaignTargeting()
    {
      return $this->campaignTargeting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemCampaignTargeting $campaignTargeting
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setCampaignTargeting($campaignTargeting)
    {
      $this->campaignTargeting = $campaignTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemAdGroupTargeting
     */
    public function getAdGroupTargeting()
    {
      return $this->adGroupTargeting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setAdGroupTargeting($adGroupTargeting)
    {
      $this->adGroupTargeting = $adGroupTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Keyword
     */
    public function getKeywordTargeting()
    {
      return $this->keywordTargeting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Keyword $keywordTargeting
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setKeywordTargeting($keywordTargeting)
    {
      $this->keywordTargeting = $keywordTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Location
     */
    public function getGeoTargeting()
    {
      return $this->geoTargeting;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Location $geoTargeting
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setGeoTargeting($geoTargeting)
    {
      $this->geoTargeting = $geoTargeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemGeoRestriction
     */
    public function getGeoTargetingRestriction()
    {
      return $this->geoTargetingRestriction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setGeoTargetingRestriction($geoTargetingRestriction)
    {
      $this->geoTargetingRestriction = $geoTargetingRestriction;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData[]
     */
    public function getPolicyData()
    {
      return $this->policyData;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData[] $policyData
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setPolicyData(array $policyData)
    {
      $this->policyData = $policyData;
      return $this;
    }

    /**
     * @return string
     */
    public function getExtensionFeedItemType()
    {
      return $this->ExtensionFeedItemType;
    }

    /**
     * @param string $ExtensionFeedItemType
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function setExtensionFeedItemType($ExtensionFeedItemType)
    {
      $this->ExtensionFeedItemType = $ExtensionFeedItemType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201802\cm\ExtensionFeedItem
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
