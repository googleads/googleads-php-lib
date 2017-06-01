<?php

namespace Google\AdsApi\AdWords\v201705\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Member
{

    /**
     * @var string $hashedEmail
     */
    protected $hashedEmail = null;

    /**
     * @var string $mobileId
     */
    protected $mobileId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201705\rm\AddressInfo $addressInfo
     */
    protected $addressInfo = null;

    /**
     * @param string $hashedEmail
     * @param string $mobileId
     * @param \Google\AdsApi\AdWords\v201705\rm\AddressInfo $addressInfo
     */
    public function __construct($hashedEmail = null, $mobileId = null, $addressInfo = null)
    {
      $this->hashedEmail = $hashedEmail;
      $this->mobileId = $mobileId;
      $this->addressInfo = $addressInfo;
    }

    /**
     * @return string
     */
    public function getHashedEmail()
    {
      return $this->hashedEmail;
    }

    /**
     * @param string $hashedEmail
     * @return \Google\AdsApi\AdWords\v201705\rm\Member
     */
    public function setHashedEmail($hashedEmail)
    {
      $this->hashedEmail = $hashedEmail;
      return $this;
    }

    /**
     * @return string
     */
    public function getMobileId()
    {
      return $this->mobileId;
    }

    /**
     * @param string $mobileId
     * @return \Google\AdsApi\AdWords\v201705\rm\Member
     */
    public function setMobileId($mobileId)
    {
      $this->mobileId = $mobileId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201705\rm\AddressInfo
     */
    public function getAddressInfo()
    {
      return $this->addressInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201705\rm\AddressInfo $addressInfo
     * @return \Google\AdsApi\AdWords\v201705\rm\Member
     */
    public function setAddressInfo($addressInfo)
    {
      $this->addressInfo = $addressInfo;
      return $this;
    }

}
