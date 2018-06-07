<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MessageFeedItem extends \Google\AdsApi\AdWords\v201806\cm\ExtensionFeedItem
{

    /**
     * @var string $messageBusinessName
     */
    protected $messageBusinessName = null;

    /**
     * @var string $messageCountryCode
     */
    protected $messageCountryCode = null;

    /**
     * @var string $messagePhoneNumber
     */
    protected $messagePhoneNumber = null;

    /**
     * @var string $messageExtensionText
     */
    protected $messageExtensionText = null;

    /**
     * @var string $messageText
     */
    protected $messageText = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201806\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201806\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary[] $policySummaries
     * @param string $ExtensionFeedItemType
     * @param string $messageBusinessName
     * @param string $messageCountryCode
     * @param string $messagePhoneNumber
     * @param string $messageExtensionText
     * @param string $messageText
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policySummaries = null, $ExtensionFeedItemType = null, $messageBusinessName = null, $messageCountryCode = null, $messagePhoneNumber = null, $messageExtensionText = null, $messageText = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policySummaries, $ExtensionFeedItemType);
      $this->messageBusinessName = $messageBusinessName;
      $this->messageCountryCode = $messageCountryCode;
      $this->messagePhoneNumber = $messagePhoneNumber;
      $this->messageExtensionText = $messageExtensionText;
      $this->messageText = $messageText;
    }

    /**
     * @return string
     */
    public function getMessageBusinessName()
    {
      return $this->messageBusinessName;
    }

    /**
     * @param string $messageBusinessName
     * @return \Google\AdsApi\AdWords\v201806\cm\MessageFeedItem
     */
    public function setMessageBusinessName($messageBusinessName)
    {
      $this->messageBusinessName = $messageBusinessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageCountryCode()
    {
      return $this->messageCountryCode;
    }

    /**
     * @param string $messageCountryCode
     * @return \Google\AdsApi\AdWords\v201806\cm\MessageFeedItem
     */
    public function setMessageCountryCode($messageCountryCode)
    {
      $this->messageCountryCode = $messageCountryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessagePhoneNumber()
    {
      return $this->messagePhoneNumber;
    }

    /**
     * @param string $messagePhoneNumber
     * @return \Google\AdsApi\AdWords\v201806\cm\MessageFeedItem
     */
    public function setMessagePhoneNumber($messagePhoneNumber)
    {
      $this->messagePhoneNumber = $messagePhoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageExtensionText()
    {
      return $this->messageExtensionText;
    }

    /**
     * @param string $messageExtensionText
     * @return \Google\AdsApi\AdWords\v201806\cm\MessageFeedItem
     */
    public function setMessageExtensionText($messageExtensionText)
    {
      $this->messageExtensionText = $messageExtensionText;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
      return $this->messageText;
    }

    /**
     * @param string $messageText
     * @return \Google\AdsApi\AdWords\v201806\cm\MessageFeedItem
     */
    public function setMessageText($messageText)
    {
      $this->messageText = $messageText;
      return $this;
    }

}
