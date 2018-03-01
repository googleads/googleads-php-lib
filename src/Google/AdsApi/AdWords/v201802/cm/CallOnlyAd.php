<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CallOnlyAd extends \Google\AdsApi\AdWords\v201802\cm\Ad
{

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $phoneNumber
     */
    protected $phoneNumber = null;

    /**
     * @var string $businessName
     */
    protected $businessName = null;

    /**
     * @var string $description1
     */
    protected $description1 = null;

    /**
     * @var string $description2
     */
    protected $description2 = null;

    /**
     * @var boolean $callTracked
     */
    protected $callTracked = null;

    /**
     * @var boolean $disableCallConversion
     */
    protected $disableCallConversion = null;

    /**
     * @var int $conversionTypeId
     */
    protected $conversionTypeId = null;

    /**
     * @var string $phoneNumberVerificationUrl
     */
    protected $phoneNumberVerificationUrl = null;

    /**
     * @param int $id
     * @param string $url
     * @param string $displayUrl
     * @param string[] $finalUrls
     * @param string[] $finalMobileUrls
     * @param \Google\AdsApi\AdWords\v201802\cm\AppUrl[] $finalAppUrls
     * @param string $trackingUrlTemplate
     * @param string $finalUrlSuffix
     * @param \Google\AdsApi\AdWords\v201802\cm\CustomParameters $urlCustomParameters
     * @param \Google\AdsApi\AdWords\v201802\cm\UrlData[] $urlData
     * @param boolean $automated
     * @param string $type
     * @param int $devicePreference
     * @param string $systemManagedEntitySource
     * @param string $AdType
     * @param string $countryCode
     * @param string $phoneNumber
     * @param string $businessName
     * @param string $description1
     * @param string $description2
     * @param boolean $callTracked
     * @param boolean $disableCallConversion
     * @param int $conversionTypeId
     * @param string $phoneNumberVerificationUrl
     */
    public function __construct($id = null, $url = null, $displayUrl = null, array $finalUrls = null, array $finalMobileUrls = null, array $finalAppUrls = null, $trackingUrlTemplate = null, $finalUrlSuffix = null, $urlCustomParameters = null, array $urlData = null, $automated = null, $type = null, $devicePreference = null, $systemManagedEntitySource = null, $AdType = null, $countryCode = null, $phoneNumber = null, $businessName = null, $description1 = null, $description2 = null, $callTracked = null, $disableCallConversion = null, $conversionTypeId = null, $phoneNumberVerificationUrl = null)
    {
      parent::__construct($id, $url, $displayUrl, $finalUrls, $finalMobileUrls, $finalAppUrls, $trackingUrlTemplate, $finalUrlSuffix, $urlCustomParameters, $urlData, $automated, $type, $devicePreference, $systemManagedEntitySource, $AdType);
      $this->countryCode = $countryCode;
      $this->phoneNumber = $phoneNumber;
      $this->businessName = $businessName;
      $this->description1 = $description1;
      $this->description2 = $description2;
      $this->callTracked = $callTracked;
      $this->disableCallConversion = $disableCallConversion;
      $this->conversionTypeId = $conversionTypeId;
      $this->phoneNumberVerificationUrl = $phoneNumberVerificationUrl;
    }

    /**
     * @return string
     */
    public function getCountryCode()
    {
      return $this->countryCode;
    }

    /**
     * @param string $countryCode
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
      return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setPhoneNumber($phoneNumber)
    {
      $this->phoneNumber = $phoneNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBusinessName()
    {
      return $this->businessName;
    }

    /**
     * @param string $businessName
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setBusinessName($businessName)
    {
      $this->businessName = $businessName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription1()
    {
      return $this->description1;
    }

    /**
     * @param string $description1
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setDescription1($description1)
    {
      $this->description1 = $description1;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription2()
    {
      return $this->description2;
    }

    /**
     * @param string $description2
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setDescription2($description2)
    {
      $this->description2 = $description2;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCallTracked()
    {
      return $this->callTracked;
    }

    /**
     * @param boolean $callTracked
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setCallTracked($callTracked)
    {
      $this->callTracked = $callTracked;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableCallConversion()
    {
      return $this->disableCallConversion;
    }

    /**
     * @param boolean $disableCallConversion
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setDisableCallConversion($disableCallConversion)
    {
      $this->disableCallConversion = $disableCallConversion;
      return $this;
    }

    /**
     * @return int
     */
    public function getConversionTypeId()
    {
      return $this->conversionTypeId;
    }

    /**
     * @param int $conversionTypeId
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setConversionTypeId($conversionTypeId)
    {
      $this->conversionTypeId = (!is_null($conversionTypeId) && PHP_INT_SIZE === 4)
          ? floatval($conversionTypeId) : $conversionTypeId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPhoneNumberVerificationUrl()
    {
      return $this->phoneNumberVerificationUrl;
    }

    /**
     * @param string $phoneNumberVerificationUrl
     * @return \Google\AdsApi\AdWords\v201802\cm\CallOnlyAd
     */
    public function setPhoneNumberVerificationUrl($phoneNumberVerificationUrl)
    {
      $this->phoneNumberVerificationUrl = $phoneNumberVerificationUrl;
      return $this;
    }

}
