<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AppConversion extends \Google\AdsApi\AdWords\v201802\cm\ConversionTracker
{

    /**
     * @var string $appId
     */
    protected $appId = null;

    /**
     * @var string $appPlatform
     */
    protected $appPlatform = null;

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $appConversionType
     */
    protected $appConversionType = null;

    /**
     * @var string $appPostbackUrl
     */
    protected $appPostbackUrl = null;

    /**
     * @param int $id
     * @param int $originalConversionTypeId
     * @param string $name
     * @param string $status
     * @param string $category
     * @param string $googleEventSnippet
     * @param string $googleGlobalSiteTag
     * @param string $dataDrivenModelStatus
     * @param int $conversionTypeOwnerCustomerId
     * @param int $viewthroughLookbackWindow
     * @param int $ctcLookbackWindow
     * @param string $countingType
     * @param float $defaultRevenueValue
     * @param string $defaultRevenueCurrencyCode
     * @param boolean $alwaysUseDefaultRevenueValue
     * @param boolean $excludeFromBidding
     * @param string $attributionModelType
     * @param string $mostRecentConversionDate
     * @param string $lastReceivedRequestTime
     * @param string $ConversionTrackerType
     * @param string $appId
     * @param string $appPlatform
     * @param string $snippet
     * @param string $appConversionType
     * @param string $appPostbackUrl
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $googleEventSnippet = null, $googleGlobalSiteTag = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null, $appId = null, $appPlatform = null, $snippet = null, $appConversionType = null, $appPostbackUrl = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $googleEventSnippet, $googleGlobalSiteTag, $dataDrivenModelStatus, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $attributionModelType, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
      $this->appId = $appId;
      $this->appPlatform = $appPlatform;
      $this->snippet = $snippet;
      $this->appConversionType = $appConversionType;
      $this->appPostbackUrl = $appPostbackUrl;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\AppConversion
     */
    public function setAppId($appId)
    {
      $this->appId = $appId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppPlatform()
    {
      return $this->appPlatform;
    }

    /**
     * @param string $appPlatform
     * @return \Google\AdsApi\AdWords\v201802\cm\AppConversion
     */
    public function setAppPlatform($appPlatform)
    {
      $this->appPlatform = $appPlatform;
      return $this;
    }

    /**
     * @return string
     */
    public function getSnippet()
    {
      return $this->snippet;
    }

    /**
     * @param string $snippet
     * @return \Google\AdsApi\AdWords\v201802\cm\AppConversion
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppConversionType()
    {
      return $this->appConversionType;
    }

    /**
     * @param string $appConversionType
     * @return \Google\AdsApi\AdWords\v201802\cm\AppConversion
     */
    public function setAppConversionType($appConversionType)
    {
      $this->appConversionType = $appConversionType;
      return $this;
    }

    /**
     * @return string
     */
    public function getAppPostbackUrl()
    {
      return $this->appPostbackUrl;
    }

    /**
     * @param string $appPostbackUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\AppConversion
     */
    public function setAppPostbackUrl($appPostbackUrl)
    {
      $this->appPostbackUrl = $appPostbackUrl;
      return $this;
    }

}
