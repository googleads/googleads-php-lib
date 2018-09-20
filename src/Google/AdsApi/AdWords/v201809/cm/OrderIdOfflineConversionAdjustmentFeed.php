<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OrderIdOfflineConversionAdjustmentFeed extends \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
{

    /**
     * @var string $orderId
     */
    protected $orderId = null;

    /**
     * @param string $conversionName
     * @param string $adjustmentTime
     * @param string $adjustmentType
     * @param float $adjustedValue
     * @param string $adjustedValueCurrencyCode
     * @param string $OfflineConversionAdjustmentFeedType
     * @param string $orderId
     */
    public function __construct($conversionName = null, $adjustmentTime = null, $adjustmentType = null, $adjustedValue = null, $adjustedValueCurrencyCode = null, $OfflineConversionAdjustmentFeedType = null, $orderId = null)
    {
      parent::__construct($conversionName, $adjustmentTime, $adjustmentType, $adjustedValue, $adjustedValueCurrencyCode, $OfflineConversionAdjustmentFeedType);
      $this->orderId = $orderId;
    }

    /**
     * @return string
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param string $orderId
     * @return \Google\AdsApi\AdWords\v201809\cm\OrderIdOfflineConversionAdjustmentFeed
     */
    public function setOrderId($orderId)
    {
      $this->orderId = $orderId;
      return $this;
    }

}
