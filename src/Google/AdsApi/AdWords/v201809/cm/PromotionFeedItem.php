<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PromotionFeedItem extends \Google\AdsApi\AdWords\v201809\cm\ExtensionFeedItem
{

    /**
     * @var string $promotionTarget
     */
    protected $promotionTarget = null;

    /**
     * @var string $discountModifier
     */
    protected $discountModifier = null;

    /**
     * @var int $percentOff
     */
    protected $percentOff = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $moneyAmountOff
     */
    protected $moneyAmountOff = null;

    /**
     * @var string $promotionCode
     */
    protected $promotionCode = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $ordersOverAmount
     */
    protected $ordersOverAmount = null;

    /**
     * @var string $promotionStart
     */
    protected $promotionStart = null;

    /**
     * @var string $promotionEnd
     */
    protected $promotionEnd = null;

    /**
     * @var string $occasion
     */
    protected $occasion = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     */
    protected $finalUrls = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     */
    protected $finalMobileUrls = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var string $finalUrlSuffix
     */
    protected $finalUrlSuffix = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\CustomParameters $promotionUrlCustomParameters
     */
    protected $promotionUrlCustomParameters = null;

    /**
     * @var string $language
     */
    protected $language = null;

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
     * @param string $promotionTarget
     * @param string $discountModifier
     * @param int $percentOff
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $moneyAmountOff
     * @param string $promotionCode
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $ordersOverAmount
     * @param string $promotionStart
     * @param string $promotionEnd
     * @param string $occasion
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $promotionUrlCustomParameters
     * @param string $language
     */
    public function __construct($feedId = null, $feedItemId = null, $status = null, $feedType = null, $startTime = null, $endTime = null, $devicePreference = null, $scheduling = null, $campaignTargeting = null, $adGroupTargeting = null, $keywordTargeting = null, $geoTargeting = null, $geoTargetingRestriction = null, array $policySummaries = null, $ExtensionFeedItemType = null, $promotionTarget = null, $discountModifier = null, $percentOff = null, $moneyAmountOff = null, $promotionCode = null, $ordersOverAmount = null, $promotionStart = null, $promotionEnd = null, $occasion = null, $finalUrls = null, $finalMobileUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $promotionUrlCustomParameters = null, $language = null)
    {
      parent::__construct($feedId, $feedItemId, $status, $feedType, $startTime, $endTime, $devicePreference, $scheduling, $campaignTargeting, $adGroupTargeting, $keywordTargeting, $geoTargeting, $geoTargetingRestriction, $policySummaries, $ExtensionFeedItemType);
      $this->promotionTarget = $promotionTarget;
      $this->discountModifier = $discountModifier;
      $this->percentOff = $percentOff;
      $this->moneyAmountOff = $moneyAmountOff;
      $this->promotionCode = $promotionCode;
      $this->ordersOverAmount = $ordersOverAmount;
      $this->promotionStart = $promotionStart;
      $this->promotionEnd = $promotionEnd;
      $this->occasion = $occasion;
      $this->finalUrls = $finalUrls;
      $this->finalMobileUrls = $finalMobileUrls;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->finalUrlSuffix = $finalUrlSuffix;
      $this->promotionUrlCustomParameters = $promotionUrlCustomParameters;
      $this->language = $language;
    }

    /**
     * @return string
     */
    public function getPromotionTarget()
    {
      return $this->promotionTarget;
    }

    /**
     * @param string $promotionTarget
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPromotionTarget($promotionTarget)
    {
      $this->promotionTarget = $promotionTarget;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountModifier()
    {
      return $this->discountModifier;
    }

    /**
     * @param string $discountModifier
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setDiscountModifier($discountModifier)
    {
      $this->discountModifier = $discountModifier;
      return $this;
    }

    /**
     * @return int
     */
    public function getPercentOff()
    {
      return $this->percentOff;
    }

    /**
     * @param int $percentOff
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPercentOff($percentOff)
    {
      $this->percentOff = (!is_null($percentOff) && PHP_INT_SIZE === 4)
          ? floatval($percentOff) : $percentOff;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency
     */
    public function getMoneyAmountOff()
    {
      return $this->moneyAmountOff;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $moneyAmountOff
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setMoneyAmountOff($moneyAmountOff)
    {
      $this->moneyAmountOff = $moneyAmountOff;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionCode()
    {
      return $this->promotionCode;
    }

    /**
     * @param string $promotionCode
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPromotionCode($promotionCode)
    {
      $this->promotionCode = $promotionCode;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency
     */
    public function getOrdersOverAmount()
    {
      return $this->ordersOverAmount;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\MoneyWithCurrency $ordersOverAmount
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setOrdersOverAmount($ordersOverAmount)
    {
      $this->ordersOverAmount = $ordersOverAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionStart()
    {
      return $this->promotionStart;
    }

    /**
     * @param string $promotionStart
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPromotionStart($promotionStart)
    {
      $this->promotionStart = $promotionStart;
      return $this;
    }

    /**
     * @return string
     */
    public function getPromotionEnd()
    {
      return $this->promotionEnd;
    }

    /**
     * @param string $promotionEnd
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPromotionEnd($promotionEnd)
    {
      $this->promotionEnd = $promotionEnd;
      return $this;
    }

    /**
     * @return string
     */
    public function getOccasion()
    {
      return $this->occasion;
    }

    /**
     * @param string $occasion
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setOccasion($occasion)
    {
      $this->occasion = $occasion;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalUrls()
    {
      return $this->finalUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setFinalUrls($finalUrls)
    {
      $this->finalUrls = $finalUrls;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\UrlList
     */
    public function getFinalMobileUrls()
    {
      return $this->finalMobileUrls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\UrlList $finalMobileUrls
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setFinalMobileUrls($finalMobileUrls)
    {
      $this->finalMobileUrls = $finalMobileUrls;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setFinalUrlSuffix($finalUrlSuffix)
    {
      $this->finalUrlSuffix = $finalUrlSuffix;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomParameters
     */
    public function getPromotionUrlCustomParameters()
    {
      return $this->promotionUrlCustomParameters;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomParameters $promotionUrlCustomParameters
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setPromotionUrlCustomParameters($promotionUrlCustomParameters)
    {
      $this->promotionUrlCustomParameters = $promotionUrlCustomParameters;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\PromotionFeedItem
     */
    public function setLanguage($language)
    {
      $this->language = $language;
      return $this;
    }

}
