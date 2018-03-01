<?php

namespace Google\AdsApi\AdWords\v201802\rm;


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
     * @var string $hashedPhoneNumber
     */
    protected $hashedPhoneNumber = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\AddressInfo $addressInfo
     */
    protected $addressInfo = null;

    /**
     * @var string $userId
     */
    protected $userId = null;

    /**
     * @param string $hashedEmail
     * @param string $mobileId
     * @param string $hashedPhoneNumber
     * @param \Google\AdsApi\AdWords\v201802\rm\AddressInfo $addressInfo
     * @param string $userId
     */
    public function __construct($hashedEmail = null, $mobileId = null, $hashedPhoneNumber = null, $addressInfo = null, $userId = null)
    {
      $this->hashedEmail = $hashedEmail;
      $this->mobileId = $mobileId;
      $this->hashedPhoneNumber = $hashedPhoneNumber;
      $this->addressInfo = $addressInfo;
      $this->userId = $userId;
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
     * @return \Google\AdsApi\AdWords\v201802\rm\Member
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
     * @return \Google\AdsApi\AdWords\v201802\rm\Member
     */
    public function setMobileId($mobileId)
    {
      $this->mobileId = $mobileId;
      return $this;
    }

    /**
     * @return string
     */
    public function getHashedPhoneNumber()
    {
      return $this->hashedPhoneNumber;
    }

    /**
     * @param string $hashedPhoneNumber
     * @return \Google\AdsApi\AdWords\v201802\rm\Member
     */
    public function setHashedPhoneNumber($hashedPhoneNumber)
    {
      $this->hashedPhoneNumber = $hashedPhoneNumber;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\AddressInfo
     */
    public function getAddressInfo()
    {
      return $this->addressInfo;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\AddressInfo $addressInfo
     * @return \Google\AdsApi\AdWords\v201802\rm\Member
     */
    public function setAddressInfo($addressInfo)
    {
      $this->addressInfo = $addressInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserId()
    {
      return $this->userId;
    }

    /**
     * @param string $userId
     * @return \Google\AdsApi\AdWords\v201802\rm\Member
     */
    public function setUserId($userId)
    {
      $this->userId = $userId;
      return $this;
    }

}
