<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupAdPolicySummary
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\PolicyTopicEntry[] $policyTopicEntries
     */
    protected $policyTopicEntries = null;

    /**
     * @var string $reviewState
     */
    protected $reviewState = null;

    /**
     * @var string $denormalizedStatus
     */
    protected $denormalizedStatus = null;

    /**
     * @var string $combinedApprovalStatus
     */
    protected $combinedApprovalStatus = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyTopicEntry[] $policyTopicEntries
     * @param string $reviewState
     * @param string $denormalizedStatus
     * @param string $combinedApprovalStatus
     */
    public function __construct(array $policyTopicEntries = null, $reviewState = null, $denormalizedStatus = null, $combinedApprovalStatus = null)
    {
      $this->policyTopicEntries = $policyTopicEntries;
      $this->reviewState = $reviewState;
      $this->denormalizedStatus = $denormalizedStatus;
      $this->combinedApprovalStatus = $combinedApprovalStatus;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\PolicyTopicEntry[]
     */
    public function getPolicyTopicEntries()
    {
      return $this->policyTopicEntries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\PolicyTopicEntry[] $policyTopicEntries
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroupAdPolicySummary
     */
    public function setPolicyTopicEntries(array $policyTopicEntries)
    {
      $this->policyTopicEntries = $policyTopicEntries;
      return $this;
    }

    /**
     * @return string
     */
    public function getReviewState()
    {
      return $this->reviewState;
    }

    /**
     * @param string $reviewState
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroupAdPolicySummary
     */
    public function setReviewState($reviewState)
    {
      $this->reviewState = $reviewState;
      return $this;
    }

    /**
     * @return string
     */
    public function getDenormalizedStatus()
    {
      return $this->denormalizedStatus;
    }

    /**
     * @param string $denormalizedStatus
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroupAdPolicySummary
     */
    public function setDenormalizedStatus($denormalizedStatus)
    {
      $this->denormalizedStatus = $denormalizedStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getCombinedApprovalStatus()
    {
      return $this->combinedApprovalStatus;
    }

    /**
     * @param string $combinedApprovalStatus
     * @return \Google\AdsApi\AdWords\v201710\cm\AdGroupAdPolicySummary
     */
    public function setCombinedApprovalStatus($combinedApprovalStatus)
    {
      $this->combinedApprovalStatus = $combinedApprovalStatus;
      return $this;
    }

}
