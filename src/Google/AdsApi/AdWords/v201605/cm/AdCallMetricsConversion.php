<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCallMetricsConversion extends \Google\AdsApi\AdWords\v201605\cm\ConversionTracker
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
     * @param int $phoneCallDuration
     */
    public function __construct($id = null, $originalConversionTypeId = null, $name = null, $status = null, $category = null, $conversionTypeOwnerCustomerId = null, $viewthroughLookbackWindow = null, $ctcLookbackWindow = null, $countingType = null, $defaultRevenueValue = null, $defaultRevenueCurrencyCode = null, $alwaysUseDefaultRevenueValue = null, $excludeFromBidding = null, $mostRecentConversionDate = null, $lastReceivedRequestTime = null, $ConversionTrackerType = null, $phoneCallDuration = null)
    {
      parent::__construct($id, $originalConversionTypeId, $name, $status, $category, $conversionTypeOwnerCustomerId, $viewthroughLookbackWindow, $ctcLookbackWindow, $countingType, $defaultRevenueValue, $defaultRevenueCurrencyCode, $alwaysUseDefaultRevenueValue, $excludeFromBidding, $mostRecentConversionDate, $lastReceivedRequestTime, $ConversionTrackerType);
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
     * @return \Google\AdsApi\AdWords\v201605\cm\AdCallMetricsConversion
     */
    public function setPhoneCallDuration($phoneCallDuration)
    {
      $this->phoneCallDuration = $phoneCallDuration;
      return $this;
    }

}
