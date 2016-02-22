<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class UploadConversion extends \Google\AdsApi\AdWords\v201601\cm\ConversionTracker
{

    /**
     * @param int $id
     * @param int $originalConversionTypeId
     * @param string $name
     * @param string $status
     * @param string $category
     * @param int $conversionTypeOwnerCustomerId
     * @param int $viewthroughLookbackWindow
     * @param int $ctcLookbackWindow
     * @param string $countingType
     * @param float $defaultRevenueValue
     * @param string $defaultRevenueCurrencyCode
     * @param boolean $alwaysUseDefaultRevenueValue
     * @param boolean $excludeFromBidding
     * @param string $mostRecentConversionDate
     * @param string $lastReceivedRequestTime
     * @param string $ConversionTrackerType
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
    }

}
