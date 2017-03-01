<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdWordsConversionTracker extends \Google\AdsApi\AdWords\v201702\cm\ConversionTracker
{

    /**
     * @var string $snippet
     */
    protected $snippet = null;

    /**
     * @var string $textFormat
     */
    protected $textFormat = null;

    /**
     * @var string $conversionPageLanguage
     */
    protected $conversionPageLanguage = null;

    /**
     * @var string $backgroundColor
     */
    protected $backgroundColor = null;

    /**
     * @var string $trackingCodeType
     */
    protected $trackingCodeType = null;

    /**
     * @param int $id
     * @param int $originalConversionTypeId
     * @param string $name
     * @param string $status
     * @param string $category
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
     * @param string $snippet
     * @param string $textFormat
     * @param string $conversionPageLanguage
     * @param string $backgroundColor
     * @param string $trackingCodeType
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null, $snippet = null, $textFormat = null, $conversionPageLanguage = null, $backgroundColor = null, $trackingCodeType = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $dataDrivenModelStatus, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $attributionModelType, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
      $this->snippet = $snippet;
      $this->textFormat = $textFormat;
      $this->conversionPageLanguage = $conversionPageLanguage;
      $this->backgroundColor = $backgroundColor;
      $this->trackingCodeType = $trackingCodeType;
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
     * @return \Google\AdsApi\AdWords\v201702\cm\AdWordsConversionTracker
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
      return $this;
    }

    /**
     * @return string
     */
    public function getTextFormat()
    {
      return $this->textFormat;
    }

    /**
     * @param string $textFormat
     * @return \Google\AdsApi\AdWords\v201702\cm\AdWordsConversionTracker
     */
    public function setTextFormat($textFormat)
    {
      $this->textFormat = $textFormat;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionPageLanguage()
    {
      return $this->conversionPageLanguage;
    }

    /**
     * @param string $conversionPageLanguage
     * @return \Google\AdsApi\AdWords\v201702\cm\AdWordsConversionTracker
     */
    public function setConversionPageLanguage($conversionPageLanguage)
    {
      $this->conversionPageLanguage = $conversionPageLanguage;
      return $this;
    }

    /**
     * @return string
     */
    public function getBackgroundColor()
    {
      return $this->backgroundColor;
    }

    /**
     * @param string $backgroundColor
     * @return \Google\AdsApi\AdWords\v201702\cm\AdWordsConversionTracker
     */
    public function setBackgroundColor($backgroundColor)
    {
      $this->backgroundColor = $backgroundColor;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingCodeType()
    {
      return $this->trackingCodeType;
    }

    /**
     * @param string $trackingCodeType
     * @return \Google\AdsApi\AdWords\v201702\cm\AdWordsConversionTracker
     */
    public function setTrackingCodeType($trackingCodeType)
    {
      $this->trackingCodeType = $trackingCodeType;
      return $this;
    }

}
