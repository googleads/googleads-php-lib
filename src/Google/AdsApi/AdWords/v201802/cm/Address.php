<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Address
{

    /**
     * @var string $streetAddress
     */
    protected $streetAddress = null;

    /**
     * @var string $streetAddress2
     */
    protected $streetAddress2 = null;

    /**
     * @var string $cityName
     */
    protected $cityName = null;

    /**
     * @var string $provinceCode
     */
    protected $provinceCode = null;

    /**
     * @var string $provinceName
     */
    protected $provinceName = null;

    /**
     * @var string $postalCode
     */
    protected $postalCode = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @param string $streetAddress
     * @param string $streetAddress2
     * @param string $cityName
     * @param string $provinceCode
     * @param string $provinceName
     * @param string $postalCode
     * @param string $countryCode
     */
    public function __construct($streetAddress = null, $streetAddress2 = null, $cityName = null, $provinceCode = null, $provinceName = null, $postalCode = null, $countryCode = null)
    {
      $this->streetAddress = $streetAddress;
      $this->streetAddress2 = $streetAddress2;
      $this->cityName = $cityName;
      $this->provinceCode = $provinceCode;
      $this->provinceName = $provinceName;
      $this->postalCode = $postalCode;
      $this->countryCode = $countryCode;
    }

    /**
     * @return string
     */
    public function getStreetAddress()
    {
      return $this->streetAddress;
    }

    /**
     * @param string $streetAddress
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setStreetAddress($streetAddress)
    {
      $this->streetAddress = $streetAddress;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreetAddress2()
    {
      return $this->streetAddress2;
    }

    /**
     * @param string $streetAddress2
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setStreetAddress2($streetAddress2)
    {
      $this->streetAddress2 = $streetAddress2;
      return $this;
    }

    /**
     * @return string
     */
    public function getCityName()
    {
      return $this->cityName;
    }

    /**
     * @param string $cityName
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setCityName($cityName)
    {
      $this->cityName = $cityName;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvinceCode()
    {
      return $this->provinceCode;
    }

    /**
     * @param string $provinceCode
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setProvinceCode($provinceCode)
    {
      $this->provinceCode = $provinceCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getProvinceName()
    {
      return $this->provinceName;
    }

    /**
     * @param string $provinceName
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setProvinceName($provinceName)
    {
      $this->provinceName = $provinceName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
      return $this->postalCode;
    }

    /**
     * @param string $postalCode
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setPostalCode($postalCode)
    {
      $this->postalCode = $postalCode;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\Address
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

}
