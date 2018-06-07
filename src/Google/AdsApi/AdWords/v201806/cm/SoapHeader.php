<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SoapHeader
{

    /**
     * @var string $clientCustomerId
     */
    protected $clientCustomerId = null;

    /**
     * @var string $developerToken
     */
    protected $developerToken = null;

    /**
     * @var string $userAgent
     */
    protected $userAgent = null;

    /**
     * @var boolean $validateOnly
     */
    protected $validateOnly = null;

    /**
     * @var boolean $partialFailure
     */
    protected $partialFailure = null;

    /**
     * @param string $clientCustomerId
     * @param string $developerToken
     * @param string $userAgent
     * @param boolean $validateOnly
     * @param boolean $partialFailure
     */
    public function __construct($clientCustomerId = null, $developerToken = null, $userAgent = null, $validateOnly = null, $partialFailure = null)
    {
      $this->clientCustomerId = $clientCustomerId;
      $this->developerToken = $developerToken;
      $this->userAgent = $userAgent;
      $this->validateOnly = $validateOnly;
      $this->partialFailure = $partialFailure;
    }

    /**
     * @return string
     */
    public function getClientCustomerId()
    {
      return $this->clientCustomerId;
    }

    /**
     * @param string $clientCustomerId
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapHeader
     */
    public function setClientCustomerId($clientCustomerId)
    {
      $this->clientCustomerId = $clientCustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeveloperToken()
    {
      return $this->developerToken;
    }

    /**
     * @param string $developerToken
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapHeader
     */
    public function setDeveloperToken($developerToken)
    {
      $this->developerToken = $developerToken;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserAgent()
    {
      return $this->userAgent;
    }

    /**
     * @param string $userAgent
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapHeader
     */
    public function setUserAgent($userAgent)
    {
      $this->userAgent = $userAgent;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getValidateOnly()
    {
      return $this->validateOnly;
    }

    /**
     * @param boolean $validateOnly
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapHeader
     */
    public function setValidateOnly($validateOnly)
    {
      $this->validateOnly = $validateOnly;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getPartialFailure()
    {
      return $this->partialFailure;
    }

    /**
     * @param boolean $partialFailure
     * @return \Google\AdsApi\AdWords\v201806\cm\SoapHeader
     */
    public function setPartialFailure($partialFailure)
    {
      $this->partialFailure = $partialFailure;
      return $this;
    }

}
