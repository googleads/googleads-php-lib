<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UploadConversion extends \Google\AdsApi\AdWords\v201705\cm\ConversionTracker
{

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
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $dataDrivenModelStatus = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $attributionModelType = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $dataDrivenModelStatus, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $attributionModelType, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
    }

}
