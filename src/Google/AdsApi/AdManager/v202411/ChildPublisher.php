<?php

namespace Google\AdsApi\AdManager\v202411;


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
     * @var string $sellerId
     */
    protected $sellerId = null;

    /**
     * @var int $proposedRevenueShareMillipercent
     */
    protected $proposedRevenueShareMillipercent = null;

    /**
     * @var string[] $onboardingTasks
     */
    protected $onboardingTasks = null;

    /**
     * @param string $approvedDelegationType
     * @param string $proposedDelegationType
     * @param string $status
     * @param string $accountStatus
     * @param string $childNetworkCode
     * @param string $sellerId
     * @param int $proposedRevenueShareMillipercent
     * @param string[] $onboardingTasks
     */
    public function __construct($approvedDelegationType = null, $proposedDelegationType = null, $status = null, $accountStatus = null, $childNetworkCode = null, $sellerId = null, $proposedRevenueShareMillipercent = null, array $onboardingTasks = null)
    {
      $this->approvedDelegationType = $approvedDelegationType;
      $this->proposedDelegationType = $proposedDelegationType;
      $this->status = $status;
      $this->accountStatus = $accountStatus;
      $this->childNetworkCode = $childNetworkCode;
      $this->sellerId = $sellerId;
      $this->proposedRevenueShareMillipercent = $proposedRevenueShareMillipercent;
      $this->onboardingTasks = $onboardingTasks;
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
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
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
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
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
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
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
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
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
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
     */
    public function setChildNetworkCode($childNetworkCode)
    {
      $this->childNetworkCode = $childNetworkCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getSellerId()
    {
      return $this->sellerId;
    }

    /**
     * @param string $sellerId
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
     */
    public function setSellerId($sellerId)
    {
      $this->sellerId = $sellerId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposedRevenueShareMillipercent()
    {
      return $this->proposedRevenueShareMillipercent;
    }

    /**
     * @param int $proposedRevenueShareMillipercent
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
     */
    public function setProposedRevenueShareMillipercent($proposedRevenueShareMillipercent)
    {
      $this->proposedRevenueShareMillipercent = (!is_null($proposedRevenueShareMillipercent) && PHP_INT_SIZE === 4)
          ? floatval($proposedRevenueShareMillipercent) : $proposedRevenueShareMillipercent;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getOnboardingTasks()
    {
      return $this->onboardingTasks;
    }

    /**
     * @param string[]|null $onboardingTasks
     * @return \Google\AdsApi\AdManager\v202411\ChildPublisher
     */
    public function setOnboardingTasks(array $onboardingTasks = null)
    {
      $this->onboardingTasks = $onboardingTasks;
      return $this;
    }

}
