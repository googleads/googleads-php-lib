<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineConversionFeed
{

    /**
     * @var string $googleClickId
     */
    protected $googleClickId = null;

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
     * @var float $externalAttributionCredit
     */
    protected $externalAttributionCredit = null;

    /**
     * @var string $externalAttributionModel
     */
    protected $externalAttributionModel = null;

    /**
     * @param string $googleClickId
     * @param string $conversionName
     * @param string $conversionTime
     * @param float $conversionValue
     * @param string $conversionCurrencyCode
     * @param float $externalAttributionCredit
     * @param string $externalAttributionModel
     */
    public function __construct($googleClickId = null, $conversionName = null, $conversionTime = null, $conversionValue = null, $conversionCurrencyCode = null, $externalAttributionCredit = null, $externalAttributionModel = null)
    {
      $this->googleClickId = $googleClickId;
      $this->conversionName = $conversionName;
      $this->conversionTime = $conversionTime;
      $this->conversionValue = $conversionValue;
      $this->conversionCurrencyCode = $conversionCurrencyCode;
      $this->externalAttributionCredit = $externalAttributionCredit;
      $this->externalAttributionModel = $externalAttributionModel;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
     */
    public function setGoogleClickId($googleClickId)
    {
      $this->googleClickId = $googleClickId;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
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
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
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
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
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
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
     */
    public function setConversionCurrencyCode($conversionCurrencyCode)
    {
      $this->conversionCurrencyCode = $conversionCurrencyCode;
      return $this;
    }

    /**
     * @return float
     */
    public function getExternalAttributionCredit()
    {
      return $this->externalAttributionCredit;
    }

    /**
     * @param float $externalAttributionCredit
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
     */
    public function setExternalAttributionCredit($externalAttributionCredit)
    {
      $this->externalAttributionCredit = $externalAttributionCredit;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalAttributionModel()
    {
      return $this->externalAttributionModel;
    }

    /**
     * @param string $externalAttributionModel
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionFeed
     */
    public function setExternalAttributionModel($externalAttributionModel)
    {
      $this->externalAttributionModel = $externalAttributionModel;
      return $this;
    }

}
