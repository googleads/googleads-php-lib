<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class OfflineConversionAdjustmentFeed
{

    /**
     * @var string $conversionName
     */
    protected $conversionName = null;

    /**
     * @var string $adjustmentTime
     */
    protected $adjustmentTime = null;

    /**
     * @var string $adjustmentType
     */
    protected $adjustmentType = null;

    /**
     * @var float $adjustedValue
     */
    protected $adjustedValue = null;

    /**
     * @var string $adjustedValueCurrencyCode
     */
    protected $adjustedValueCurrencyCode = null;

    /**
     * @var string $OfflineConversionAdjustmentFeedType
     */
    protected $OfflineConversionAdjustmentFeedType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['OfflineConversionAdjustmentFeed.Type' => 'OfflineConversionAdjustmentFeedType'];

    /**
     * @param string $conversionName
     * @param string $adjustmentTime
     * @param string $adjustmentType
     * @param float $adjustedValue
     * @param string $adjustedValueCurrencyCode
     * @param string $OfflineConversionAdjustmentFeedType
     */
    public function __construct($conversionName = null, $adjustmentTime = null, $adjustmentType = null, $adjustedValue = null, $adjustedValueCurrencyCode = null, $OfflineConversionAdjustmentFeedType = null)
    {
      $this->conversionName = $conversionName;
      $this->adjustmentTime = $adjustmentTime;
      $this->adjustmentType = $adjustmentType;
      $this->adjustedValue = $adjustedValue;
      $this->adjustedValueCurrencyCode = $adjustedValueCurrencyCode;
      $this->OfflineConversionAdjustmentFeedType = $OfflineConversionAdjustmentFeedType;
    }

    /**
     * @return string
     */
    public function getConversionName()
    {
      return $this->conversionName;
    }

    /**
     * @param string $conversionName
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setConversionName($conversionName)
    {
      $this->conversionName = $conversionName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentTime()
    {
      return $this->adjustmentTime;
    }

    /**
     * @param string $adjustmentTime
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setAdjustmentTime($adjustmentTime)
    {
      $this->adjustmentTime = $adjustmentTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustmentType()
    {
      return $this->adjustmentType;
    }

    /**
     * @param string $adjustmentType
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setAdjustmentType($adjustmentType)
    {
      $this->adjustmentType = $adjustmentType;
      return $this;
    }

    /**
     * @return float
     */
    public function getAdjustedValue()
    {
      return $this->adjustedValue;
    }

    /**
     * @param float $adjustedValue
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setAdjustedValue($adjustedValue)
    {
      $this->adjustedValue = $adjustedValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdjustedValueCurrencyCode()
    {
      return $this->adjustedValueCurrencyCode;
    }

    /**
     * @param string $adjustedValueCurrencyCode
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setAdjustedValueCurrencyCode($adjustedValueCurrencyCode)
    {
      $this->adjustedValueCurrencyCode = $adjustedValueCurrencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getOfflineConversionAdjustmentFeedType()
    {
      return $this->OfflineConversionAdjustmentFeedType;
    }

    /**
     * @param string $OfflineConversionAdjustmentFeedType
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function setOfflineConversionAdjustmentFeedType($OfflineConversionAdjustmentFeedType)
    {
      $this->OfflineConversionAdjustmentFeedType = $OfflineConversionAdjustmentFeedType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeed
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
