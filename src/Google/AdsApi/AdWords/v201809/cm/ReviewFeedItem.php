<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReviewFeedItem extends \Google\AdsApi\AdWords\v201809\cm\ExtensionFeedItem
{

    /**
     * @var string $reviewText
     */
    protected $reviewText = null;

    /**
     * @var string $reviewSourceName
     */
    protected $reviewSourceName = null;

    /**
     * @var string $reviewSourceUrl
     */
    protected $reviewSourceUrl = null;

    /**
     * @var boolean $reviewTextExactlyQuoted
     */
    protected $reviewTextExactlyQuoted = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $status
     * @param string $feedType
     * @param string $startTime
     * @param string $endTime
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemDevicePreference $devicePreference
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemScheduling $scheduling
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemCampaignTargeting $campaignTargeting
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemAdGroupTargeting $adGroupTargeting
     * @param \Google\AdsApi\AdWords\v201809\cm\Keyword $keywordTargeting
     * @param \Google\AdsApi\AdWords\v201809\cm\Location $geoTargeting
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemGeoRestriction $geoTargetingRestriction
     * @param \Google\AdsApi\AdWords\v201809\cm\FeedItemPolicySummary[] $policySummaries
     * @param string $ExtensionFeedItemType
     * @param string $reviewText
     * @param string $reviewSourceName
     * @param string $reviewSourceUrl
     * @param boolean $reviewTextExactlyQuoted
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policySummaries = null, $ExtensionFeedItemType = null, $reviewText = null, $reviewSourceName = null, $reviewSourceUrl = null, $reviewTextExactlyQuoted = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policySummaries, $ExtensionFeedItemType);
      $this->reviewText = $reviewText;
      $this->reviewSourceName = $reviewSourceName;
      $this->reviewSourceUrl = $reviewSourceUrl;
      $this->reviewTextExactlyQuoted = $reviewTextExactlyQuoted;
    }

    /**
     * @return string
     */
    public function getReviewText()
    {
      return $this->reviewText;
    }

    /**
     * @param string $reviewText
     * @return \Google\AdsApi\AdWords\v201809\cm\ReviewFeedItem
     */
    public function setReviewText($reviewText)
    {
      $this->reviewText = $reviewText;
      return $this;
    }

    /**
     * @return string
     */
    public function getReviewSourceName()
    {
      return $this->reviewSourceName;
    }

    /**
     * @param string $reviewSourceName
     * @return \Google\AdsApi\AdWords\v201809\cm\ReviewFeedItem
     */
    public function setReviewSourceName($reviewSourceName)
    {
      $this->reviewSourceName = $reviewSourceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getReviewSourceUrl()
    {
      return $this->reviewSourceUrl;
    }

    /**
     * @param string $reviewSourceUrl
     * @return \Google\AdsApi\AdWords\v201809\cm\ReviewFeedItem
     */
    public function setReviewSourceUrl($reviewSourceUrl)
    {
      $this->reviewSourceUrl = $reviewSourceUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReviewTextExactlyQuoted()
    {
      return $this->reviewTextExactlyQuoted;
    }

    /**
     * @param boolean $reviewTextExactlyQuoted
     * @return \Google\AdsApi\AdWords\v201809\cm\ReviewFeedItem
     */
    public function setReviewTextExactlyQuoted($reviewTextExactlyQuoted)
    {
      $this->reviewTextExactlyQuoted = $reviewTextExactlyQuoted;
      return $this;
    }

}
