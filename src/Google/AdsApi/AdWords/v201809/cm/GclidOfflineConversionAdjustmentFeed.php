<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GclidOfflineConversionAdjustmentFeed extends \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
{

    /**
     * @var string $googleClickId
     */
    protected $googleClickId = null;

    /**
     * @var string $conversionTime
     */
    protected $conversionTime = null;

    /**
     * @param string $conversionName
     * @param string $adjustmentTime
     * @param string $adjustmentType
     * @param float $adjustedValue
     * @param string $adjustedValueCurrencyCode
     * @param string $OfflineConversionAdjustmentFeedType
     * @param string $googleClickId
     * @param string $conversionTime
     */
    public function __construct($conversionName = null, $adjustmentTime = null, $adjustmentType = null, $adjustedValue = null, $adjustedValueCurrencyCode = null, $OfflineConversionAdjustmentFeedType = null, $googleClickId = null, $conversionTime = null)
    {
      parent::__construct($conversionName, $adjustmentTime, $adjustmentType, $adjustedValue, $adjustedValueCurrencyCode, $OfflineConversionAdjustmentFeedType);
      $this->googleClickId = $googleClickId;
      $this->conversionTime = $conversionTime;
    }

    /**
     * @return string
     */
    public function getGoogleClickId()
    {
      return $this->googleClickId;
    }

    /**
     * @param string $googleClickId
     * @return \Google\AdsApi\AdWords\v201809\cm\GclidOfflineConversionAdjustmentFeed
     */
    public function setGoogleClickId($googleClickId)
    {
      $this->googleClickId = $googleClickId;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionTime()
    {
      return $this->conversionTime;
    }

    /**
     * @param string $conversionTime
     * @return \Google\AdsApi\AdWords\v201809\cm\GclidOfflineConversionAdjustmentFeed
     */
    public function setConversionTime($conversionTime)
    {
      $this->conversionTime = $conversionTime;
      return $this;
    }

}
