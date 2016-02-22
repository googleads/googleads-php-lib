<?php

namespace Google\AdsApi\AdWords\v201601\cm;

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
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference $devicePreference
     */
    protected $devicePreference = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling $scheduling
     */
    protected $scheduling = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[] $policyData
     */
    protected $policyData = null;

    /**
     * @var string $ExtensionFeedItemType
     */
    protected $ExtensionFeedItemType = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[] $policyData
     * @param string $ExtensionFeedItemType
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, array $policyData = null, $ExtensionFeedItemType = null)
    {
      $this->feedId = $feedId;
      $this->feedItemId = $feedItemId;
      $this->status = $status;
      $this->feedType = $feedType;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
      $this->devicePreference = $devicePreference;
      $this->scheduling = $scheduling;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setFeedId($feedId)
    {
      $this->feedId = $feedId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setFeedItemId($feedItemId)
    {
      $this->feedItemId = $feedItemId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference
     */
    public function getDevicePreference()
    {
      return $this->devicePreference;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemDevicePreference $devicePreference
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setDevicePreference($devicePreference)
    {
      $this->devicePreference = $devicePreference;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling
     */
    public function getScheduling()
    {
      return $this->scheduling;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling $scheduling
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setScheduling($scheduling)
    {
      $this->scheduling = $scheduling;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[]
     */
    public function getPolicyData()
    {
      return $this->policyData;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemPolicyData[] $policyData
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ExtensionFeedItem
     */
    public function setExtensionFeedItemType($ExtensionFeedItemType)
    {
      $this->ExtensionFeedItemType = $ExtensionFeedItemType;
      return $this;
    }

}
