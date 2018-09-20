<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SitelinkFeedItem extends \Google\AdsApi\AdWords\v201809\cm\ExtensionFeedItem
{

    /**
     * @var string $sitelinkText
     */
    protected $sitelinkText = null;

    /**
     * @var string $sitelinkUrl
     */
    protected $sitelinkUrl = null;

    /**
     * @var string $sitelinkLine2
     */
    protected $sitelinkLine2 = null;

    /**
     * @var string $sitelinkLine3
     */
    protected $sitelinkLine3 = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalUrls
     */
    protected $sitelinkFinalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalMobileUrls
     */
    protected $sitelinkFinalMobileUrls = null;

    /**
     * @var string $sitelinkTrackingUrlTemplate
     */
    protected $sitelinkTrackingUrlTemplate = null;

    /**
     * @var string $sitelinkFinalUrlSuffix
     */
    protected $sitelinkFinalUrlSuffix = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\CustomParameters $sitelinkUrlCustomParameters
     */
    protected $sitelinkUrlCustomParameters = null;

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
     * @param string $sitelinkText
     * @param string $sitelinkUrl
     * @param string $sitelinkLine2
     * @param string $sitelinkLine3
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalMobileUrls
     * @param string $sitelinkTrackingUrlTemplate
     * @param string $sitelinkFinalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $sitelinkUrlCustomParameters
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policySummaries = null, $ExtensionFeedItemType = null, $sitelinkText = null, $sitelinkUrl = null, $sitelinkLine2 = null, $sitelinkLine3 = null, $sitelinkFinalUrls = null, $sitelinkFinalMobileUrls = null, $sitelinkTrackingUrlTemplate = null, $sitelinkFinalUrlSuffix = null, $sitelinkUrlCustomParameters = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policySummaries, $ExtensionFeedItemType);
      $this->sitelinkText = $sitelinkText;
      $this->sitelinkUrl = $sitelinkUrl;
      $this->sitelinkLine2 = $sitelinkLine2;
      $this->sitelinkLine3 = $sitelinkLine3;
      $this->sitelinkFinalUrls = $sitelinkFinalUrls;
      $this->sitelinkFinalMobileUrls = $sitelinkFinalMobileUrls;
      $this->sitelinkTrackingUrlTemplate = $sitelinkTrackingUrlTemplate;
      $this->sitelinkFinalUrlSuffix = $sitelinkFinalUrlSuffix;
      $this->sitelinkUrlCustomParameters = $sitelinkUrlCustomParameters;
    }

    /**
     * @return string
     */
    public function getSitelinkText()
    {
      return $this->sitelinkText;
    }

    /**
     * @param string $sitelinkText
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkText($sitelinkText)
    {
      $this->sitelinkText = $sitelinkText;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitelinkUrl()
    {
      return $this->sitelinkUrl;
    }

    /**
     * @param string $sitelinkUrl
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkUrl($sitelinkUrl)
    {
      $this->sitelinkUrl = $sitelinkUrl;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitelinkLine2()
    {
      return $this->sitelinkLine2;
    }

    /**
     * @param string $sitelinkLine2
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkLine2($sitelinkLine2)
    {
      $this->sitelinkLine2 = $sitelinkLine2;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitelinkLine3()
    {
      return $this->sitelinkLine3;
    }

    /**
     * @param string $sitelinkLine3
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkLine3($sitelinkLine3)
    {
      $this->sitelinkLine3 = $sitelinkLine3;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getSitelinkFinalUrls()
    {
      return $this->sitelinkFinalUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkFinalUrls($sitelinkFinalUrls)
    {
      $this->sitelinkFinalUrls = $sitelinkFinalUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getSitelinkFinalMobileUrls()
    {
      return $this->sitelinkFinalMobileUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $sitelinkFinalMobileUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkFinalMobileUrls($sitelinkFinalMobileUrls)
    {
      $this->sitelinkFinalMobileUrls = $sitelinkFinalMobileUrls;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitelinkTrackingUrlTemplate()
    {
      return $this->sitelinkTrackingUrlTemplate;
    }

    /**
     * @param string $sitelinkTrackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkTrackingUrlTemplate($sitelinkTrackingUrlTemplate)
    {
      $this->sitelinkTrackingUrlTemplate = $sitelinkTrackingUrlTemplate;
      return $this;
    }

    /**
     * @return string
     */
    public function getSitelinkFinalUrlSuffix()
    {
      return $this->sitelinkFinalUrlSuffix;
    }

    /**
     * @param string $sitelinkFinalUrlSuffix
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkFinalUrlSuffix($sitelinkFinalUrlSuffix)
    {
      $this->sitelinkFinalUrlSuffix = $sitelinkFinalUrlSuffix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomParameters
     */
    public function getSitelinkUrlCustomParameters()
    {
      return $this->sitelinkUrlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $sitelinkUrlCustomParameters
     * @return \Google\AdsApi\AdWords\v201809\cm\SitelinkFeedItem
     */
    public function setSitelinkUrlCustomParameters($sitelinkUrlCustomParameters)
    {
      $this->sitelinkUrlCustomParameters = $sitelinkUrlCustomParameters;
      return $this;
    }

}
