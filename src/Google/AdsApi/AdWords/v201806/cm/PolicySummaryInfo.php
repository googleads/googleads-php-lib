<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class PolicySummaryInfo
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry[] $policyTopicEntries
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
     * @var string $PolicySummaryInfoType
     */
    protected $PolicySummaryInfoType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['PolicySummaryInfo.Type' => 'PolicySummaryInfoType'];

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry[] $policyTopicEntries
     * @param string $reviewState
     * @param string $denormalizedStatus
     * @param string $combinedApprovalStatus
     * @param string $PolicySummaryInfoType
     */
    public function __construct(array $policyTopicEntries = null, $reviewState = null, $denormalizedStatus = null, $combinedApprovalStatus = null, $PolicySummaryInfoType = null)
    {
      $this->policyTopicEntries = $policyTopicEntries;
      $this->reviewState = $reviewState;
      $this->denormalizedStatus = $denormalizedStatus;
      $this->combinedApprovalStatus = $combinedApprovalStatus;
      $this->PolicySummaryInfoType = $PolicySummaryInfoType;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry[]
     */
    public function getPolicyTopicEntries()
    {
      return $this->policyTopicEntries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry[] $policyTopicEntries
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
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
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
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
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
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
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
     */
    public function setCombinedApprovalStatus($combinedApprovalStatus)
    {
      $this->combinedApprovalStatus = $combinedApprovalStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getPolicySummaryInfoType()
    {
      return $this->PolicySummaryInfoType;
    }

    /**
     * @param string $PolicySummaryInfoType
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
     */
    public function setPolicySummaryInfoType($PolicySummaryInfoType)
    {
      $this->PolicySummaryInfoType = $PolicySummaryInfoType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
