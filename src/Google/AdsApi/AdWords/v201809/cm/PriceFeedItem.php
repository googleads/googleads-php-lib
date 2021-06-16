<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PriceFeedItem extends \Google\AdsApi\AdWords\v201809\cm\ExtensionFeedItem
{

    /**
     * @var string $priceExtensionType
     */
    protected $priceExtensionType = null;

    /**
     * @var string $priceQualifier
     */
    protected $priceQualifier = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var string $finalUrlSuffix
     */
    protected $finalUrlSuffix = null;

    /**
     * @var string $language
     */
    protected $language = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\PriceTableRow[] $tableRows
     */
    protected $tableRows = null;

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
     * @param string $priceExtensionType
     * @param string $priceQualifier
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param string $language
     * @param \Google\AdsApi\AdWords\v201809\cm\PriceTableRow[] $tableRows
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policySummaries = null, $ExtensionFeedItemType = null, $priceExtensionType = null, $priceQualifier = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $language = null, array $tableRows = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policySummaries, $ExtensionFeedItemType);
      $this->priceExtensionType = $priceExtensionType;
      $this->priceQualifier = $priceQualifier;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->finalUrlSuffix = $finalUrlSuffix;
      $this->language = $language;
      $this->tableRows = $tableRows;
    }

    /**
     * @return string
     */
    public function getPriceExtensionType()
    {
      return $this->priceExtensionType;
    }

    /**
     * @param string $priceExtensionType
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
     */
    public function setPriceExtensionType($priceExtensionType)
    {
      $this->priceExtensionType = $priceExtensionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getPriceQualifier()
    {
      return $this->priceQualifier;
    }

    /**
     * @param string $priceQualifier
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
     */
    public function setPriceQualifier($priceQualifier)
    {
      $this->priceQualifier = $priceQualifier;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
     */
    public function setFinalUrlSuffix($finalUrlSuffix)
    {
      $this->finalUrlSuffix = $finalUrlSuffix;
      return $this;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
      return $this->language;
    }

    /**
     * @param string $language
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceTableRow[]
     */
    public function getTableRows()
    {
      return $this->tableRows;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PriceTableRow[] $tableRows
     * @return \Google\AdsApi\AdWords\v201809\cm\PriceFeedItem
     */
    public function setTableRows(array $tableRows)
    {
      $this->tableRows = $tableRows;
      return $this;
    }

}
