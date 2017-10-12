<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdWordsConversionTracker extends \Google\AdsApi\AdWords\v201710\cm\ConversionTracker
{

    /**
     * @var string $snippet
     */
    protected $snippet = null;

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
     * @param string $trackingCodeType
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null, $snippet = null, $trackingCodeType = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $dataDrivenModelStatus, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $attributionModelType, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
      $this->snippet = $snippet;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdWordsConversionTracker
     */
    public function setSnippet($snippet)
    {
      $this->snippet = $snippet;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdWordsConversionTracker
     */
    public function setTrackingCodeType($trackingCodeType)
    {
      $this->trackingCodeType = $trackingCodeType;
      return $this;
    }

}
