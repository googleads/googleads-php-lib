<?php

namespace Google\AdsApi\AdWords\v201710\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Customer
{

    /**
     * @var int $customerId
     */
    protected $customerId = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $dateTimeZone
     */
    protected $dateTimeZone = null;

    /**
     * @var string $descriptiveName
     */
    protected $descriptiveName = null;

    /**
     * @var boolean $canManageClients
     */
    protected $canManageClients = null;

    /**
     * @var boolean $testAccount
     */
    protected $testAccount = null;

    /**
     * @var boolean $autoTaggingEnabled
     */
    protected $autoTaggingEnabled = null;

    /**
     * @var string $trackingUrlTemplate
     */
    protected $trackingUrlTemplate = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings $conversionTrackingSettings
     */
    protected $conversionTrackingSettings = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\mcm\RemarketingSettings $remarketingSettings
     */
    protected $remarketingSettings = null;

    /**
     * @param int $customerId
     * @param string $currencyCode
     * @param string $dateTimeZone
     * @param string $descriptiveName
     * @param boolean $canManageClients
     * @param boolean $testAccount
     * @param boolean $autoTaggingEnabled
     * @param string $trackingUrlTemplate
     * @param \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings $conversionTrackingSettings
     * @param \Google\AdsApi\AdWords\v201710\mcm\RemarketingSettings $remarketingSettings
     */
    public function __construct($customerId = null, $currencyCode = null, $dateTimeZone = null, $descriptiveName = null, $canManageClients = null, $testAccount = null, $autoTaggingEnabled = null, $trackingUrlTemplate = null, $conversionTrackingSettings = null, $remarketingSettings = null)
    {
      $this->customerId = $customerId;
      $this->currencyCode = $currencyCode;
      $this->dateTimeZone = $dateTimeZone;
      $this->descriptiveName = $descriptiveName;
      $this->canManageClients = $canManageClients;
      $this->testAccount = $testAccount;
      $this->autoTaggingEnabled = $autoTaggingEnabled;
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      $this->conversionTrackingSettings = $conversionTrackingSettings;
      $this->remarketingSettings = $remarketingSettings;
    }

    /**
     * @return int
     */
    public function getCustomerId()
    {
      return $this->customerId;
    }

    /**
     * @param int $customerId
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setCustomerId($customerId)
    {
      $this->customerId = (!is_null($customerId) && PHP_INT_SIZE === 4)
          ? floatval($customerId) : $customerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getDateTimeZone()
    {
      return $this->dateTimeZone;
    }

    /**
     * @param string $dateTimeZone
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setDateTimeZone($dateTimeZone)
    {
      $this->dateTimeZone = $dateTimeZone;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescriptiveName()
    {
      return $this->descriptiveName;
    }

    /**
     * @param string $descriptiveName
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setDescriptiveName($descriptiveName)
    {
      $this->descriptiveName = $descriptiveName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCanManageClients()
    {
      return $this->canManageClients;
    }

    /**
     * @param boolean $canManageClients
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setCanManageClients($canManageClients)
    {
      $this->canManageClients = $canManageClients;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getTestAccount()
    {
      return $this->testAccount;
    }

    /**
     * @param boolean $testAccount
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setTestAccount($testAccount)
    {
      $this->testAccount = $testAccount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAutoTaggingEnabled()
    {
      return $this->autoTaggingEnabled;
    }

    /**
     * @param boolean $autoTaggingEnabled
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setAutoTaggingEnabled($autoTaggingEnabled)
    {
      $this->autoTaggingEnabled = $autoTaggingEnabled;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrackingUrlTemplate()
    {
      return $this->trackingUrlTemplate;
    }

    /**
     * @param string $trackingUrlTemplate
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setTrackingUrlTemplate($trackingUrlTemplate)
    {
      $this->trackingUrlTemplate = $trackingUrlTemplate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings
     */
    public function getConversionTrackingSettings()
    {
      return $this->conversionTrackingSettings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\ConversionTrackingSettings $conversionTrackingSettings
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setConversionTrackingSettings($conversionTrackingSettings)
    {
      $this->conversionTrackingSettings = $conversionTrackingSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\mcm\RemarketingSettings
     */
    public function getRemarketingSettings()
    {
      return $this->remarketingSettings;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\mcm\RemarketingSettings $remarketingSettings
     * @return \Google\AdsApi\AdWords\v201710\mcm\Customer
     */
    public function setRemarketingSettings($remarketingSettings)
    {
      $this->remarketingSettings = $remarketingSettings;
      return $this;
    }

}
