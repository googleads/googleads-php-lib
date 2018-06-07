<?php

namespace Google\AdsApi\AdWords\v201806\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AddressInfo
{

    /**
     * @var string $hashedFirstName
     */
    protected $hashedFirstName = null;

    /**
     * @var string $hashedLastName
     */
    protected $hashedLastName = null;

    /**
     * @var string $countryCode
     */
    protected $countryCode = null;

    /**
     * @var string $zipCode
     */
    protected $zipCode = null;

    /**
     * @param string $hashedFirstName
     * @param string $hashedLastName
     * @param string $countryCode
     * @param string $zipCode
     */
    public function __construct($hashedFirstName = null, $hashedLastName = null, $countryCode = null, $zipCode = null)
    {
      $this->hashedFirstName = $hashedFirstName;
      $this->hashedLastName = $hashedLastName;
      $this->countryCode = $countryCode;
      $this->zipCode = $zipCode;
    }

    /**
     * @return string
     */
    public function getHashedFirstName()
    {
      return $this->hashedFirstName;
    }

    /**
     * @param string $hashedFirstName
     * @return \Google\AdsApi\AdWords\v201806\rm\AddressInfo
     */
    public function setHashedFirstName($hashedFirstName)
    {
      $this->hashedFirstName = $hashedFirstName;
      return $this;
    }

    /**
     * @return string
     */
    public function getHashedLastName()
    {
      return $this->hashedLastName;
    }

    /**
     * @param string $hashedLastName
     * @return \Google\AdsApi\AdWords\v201806\rm\AddressInfo
     */
    public function setHashedLastName($hashedLastName)
    {
      $this->hashedLastName = $hashedLastName;
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
     * @return \Google\AdsApi\AdWords\v201806\rm\AddressInfo
     */
    public function setCountryCode($countryCode)
    {
      $this->countryCode = $countryCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
      return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return \Google\AdsApi\AdWords\v201806\rm\AddressInfo
     */
    public function setZipCode($zipCode)
    {
      $this->zipCode = $zipCode;
      return $this;
    }

}
