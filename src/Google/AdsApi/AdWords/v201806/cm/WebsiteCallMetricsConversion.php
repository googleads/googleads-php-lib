<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WebsiteCallMetricsConversion extends \Google\AdsApi\AdWords\v201806\cm\ConversionTracker
{

    /**
     * @var int $phoneCallDuration
     */
    protected $phoneCallDuration = null;

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
     * @param int $phoneCallDuration
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $googleEventSnippet = null, $googleGlobalSiteTag = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null, $phoneCallDuration = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $googleEventSnippet, $googleGlobalSiteTag, $dataDrivenModelStatus, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $attributionModelType, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
      $this->phoneCallDuration = $phoneCallDuration;
    }

    /**
     * @return int
     */
    public function getPhoneCallDuration()
    {
      return $this->phoneCallDuration;
    }

    /**
     * @param int $phoneCallDuration
     * @return \Google\AdsApi\AdWords\v201806\cm\WebsiteCallMetricsConversion
     */
    public function setPhoneCallDuration($phoneCallDuration)
    {
      $this->phoneCallDuration = (!is_null($phoneCallDuration) && PHP_INT_SIZE === 4)
          ? floatval($phoneCallDuration) : $phoneCallDuration;
      return $this;
    }

}
