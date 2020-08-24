<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ChildPublisher
{

    /**
     * @var string $approvedDelegationType
     */
    protected $approvedDelegationType = null;

    /**
     * @var string $proposedDelegationType
     */
    protected $proposedDelegationType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $accountStatus
     */
    protected $accountStatus = null;

    /**
     * @var string $childNetworkCode
     */
    protected $childNetworkCode = null;

    /**
     * @param string $approvedDelegationType
     * @param string $proposedDelegationType
     * @param string $status
     * @param string $accountStatus
     * @param string $childNetworkCode
     */
    public function __construct($approvedDelegationType = null, $proposedDelegationType = null, $status = null, $accountStatus = null, $childNetworkCode = null)
    {
      $this->approvedDelegationType = $approvedDelegationType;
      $this->proposedDelegationType = $proposedDelegationType;
      $this->status = $status;
      $this->accountStatus = $accountStatus;
      $this->childNetworkCode = $childNetworkCode;
    }

    /**
     * @return string
     */
    public function getApprovedDelegationType()
    {
      return $this->approvedDelegationType;
    }

    /**
     * @param string $approvedDelegationType
     * @return \Google\AdsApi\AdManager\v202005\ChildPublisher
     */
    public function setApprovedDelegationType($approvedDelegationType)
    {
      $this->approvedDelegationType = $approvedDelegationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getProposedDelegationType()
    {
      return $this->proposedDelegationType;
    }

    /**
     * @param string $proposedDelegationType
     * @return \Google\AdsApi\AdManager\v202005\ChildPublisher
     */
    public function setProposedDelegationType($proposedDelegationType)
    {
      $this->proposedDelegationType = $proposedDelegationType;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v202005\ChildPublisher
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountStatus()
    {
      return $this->accountStatus;
    }

    /**
     * @param string $accountStatus
     * @return \Google\AdsApi\AdManager\v202005\ChildPublisher
     */
    public function setAccountStatus($accountStatus)
    {
      $this->accountStatus = $accountStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildNetworkCode()
    {
      return $this->childNetworkCode;
    }

    /**
     * @param string $childNetworkCode
     * @return \Google\AdsApi\AdManager\v202005\ChildPublisher
     */
    public function setChildNetworkCode($childNetworkCode)
    {
      $this->childNetworkCode = $childNetworkCode;
      return $this;
    }

}
