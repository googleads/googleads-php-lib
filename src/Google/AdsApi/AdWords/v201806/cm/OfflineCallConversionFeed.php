<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineCallConversionFeed
{

    /**
     * @var string $callerId
     */
    protected $callerId = null;

    /**
     * @var string $callStartTime
     */
    protected $callStartTime = null;

    /**
     * @var string $conversionName
     */
    protected $conversionName = null;

    /**
     * @var string $conversionTime
     */
    protected $conversionTime = null;

    /**
     * @var float $conversionValue
     */
    protected $conversionValue = null;

    /**
     * @var string $conversionCurrencyCode
     */
    protected $conversionCurrencyCode = null;

    /**
     * @param string $callerId
     * @param string $callStartTime
     * @param string $conversionName
     * @param string $conversionTime
     * @param float $conversionValue
     * @param string $conversionCurrencyCode
     */
    public function __construct($callerId = null, $callStartTime = null, $conversionName = null, $conversionTime = null, $conversionValue = null, $conversionCurrencyCode = null)
    {
      $this->callerId = $callerId;
      $this->callStartTime = $callStartTime;
      $this->conversionName = $conversionName;
      $this->conversionTime = $conversionTime;
      $this->conversionValue = $conversionValue;
      $this->conversionCurrencyCode = $conversionCurrencyCode;
    }

    /**
     * @return string
     */
    public function getCallerId()
    {
      return $this->callerId;
    }

    /**
     * @param string $callerId
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setCallerId($callerId)
    {
      $this->callerId = $callerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCallStartTime()
    {
      return $this->callStartTime;
    }

    /**
     * @param string $callStartTime
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setCallStartTime($callStartTime)
    {
      $this->callStartTime = $callStartTime;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setConversionName($conversionName)
    {
      $this->conversionName = $conversionName;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setConversionTime($conversionTime)
    {
      $this->conversionTime = $conversionTime;
      return $this;
    }

    /**
     * @return float
     */
    public function getConversionValue()
    {
      return $this->conversionValue;
    }

    /**
     * @param float $conversionValue
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setConversionValue($conversionValue)
    {
      $this->conversionValue = $conversionValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionCurrencyCode()
    {
      return $this->conversionCurrencyCode;
    }

    /**
     * @param string $conversionCurrencyCode
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeed
     */
    public function setConversionCurrencyCode($conversionCurrencyCode)
    {
      $this->conversionCurrencyCode = $conversionCurrencyCode;
      return $this;
    }

}
