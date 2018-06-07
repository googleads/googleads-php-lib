<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerLink
{

    /**
     * @var int $managerCustomerId
     */
    protected $managerCustomerId = null;

    /**
     * @var int $clientCustomerId
     */
    protected $clientCustomerId = null;

    /**
     * @var string $linkStatus
     */
    protected $linkStatus = null;

    /**
     * @var string $pendingDescriptiveName
     */
    protected $pendingDescriptiveName = null;

    /**
     * @var boolean $isHidden
     */
    protected $isHidden = null;

    /**
     * @param int $managerCustomerId
     * @param int $clientCustomerId
     * @param string $linkStatus
     * @param string $pendingDescriptiveName
     * @param boolean $isHidden
     */
    public function __construct($managerCustomerId = null, $clientCustomerId = null, $linkStatus = null, $pendingDescriptiveName = null, $isHidden = null)
    {
      $this->managerCustomerId = $managerCustomerId;
      $this->clientCustomerId = $clientCustomerId;
      $this->linkStatus = $linkStatus;
      $this->pendingDescriptiveName = $pendingDescriptiveName;
      $this->isHidden = $isHidden;
    }

    /**
     * @return int
     */
    public function getManagerCustomerId()
    {
      return $this->managerCustomerId;
    }

    /**
     * @param int $managerCustomerId
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerLink
     */
    public function setManagerCustomerId($managerCustomerId)
    {
      $this->managerCustomerId = (!is_null($managerCustomerId) && PHP_INT_SIZE === 4)
          ? floatval($managerCustomerId) : $managerCustomerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getClientCustomerId()
    {
      return $this->clientCustomerId;
    }

    /**
     * @param int $clientCustomerId
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerLink
     */
    public function setClientCustomerId($clientCustomerId)
    {
      $this->clientCustomerId = (!is_null($clientCustomerId) && PHP_INT_SIZE === 4)
          ? floatval($clientCustomerId) : $clientCustomerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkStatus()
    {
      return $this->linkStatus;
    }

    /**
     * @param string $linkStatus
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerLink
     */
    public function setLinkStatus($linkStatus)
    {
      $this->linkStatus = $linkStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPendingDescriptiveName()
    {
      return $this->pendingDescriptiveName;
    }

    /**
     * @param string $pendingDescriptiveName
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerLink
     */
    public function setPendingDescriptiveName($pendingDescriptiveName)
    {
      $this->pendingDescriptiveName = $pendingDescriptiveName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsHidden()
    {
      return $this->isHidden;
    }

    /**
     * @param boolean $isHidden
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerLink
     */
    public function setIsHidden($isHidden)
    {
      $this->isHidden = $isHidden;
      return $this;
    }

}
