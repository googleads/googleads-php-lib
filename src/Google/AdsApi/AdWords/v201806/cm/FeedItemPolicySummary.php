<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemPolicySummary extends \Google\AdsApi\AdWords\v201806\cm\PolicySummaryInfo
{

    /**
     * @var int $feedMappingId
     */
    protected $feedMappingId = null;

    /**
     * @var string $validationStatus
     */
    protected $validationStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeError[] $validationErrors
     */
    protected $validationErrors = null;

    /**
     * @var string $qualityApprovalStatus
     */
    protected $qualityApprovalStatus = null;

    /**
     * @var string[] $qualityDisapprovalReasons
     */
    protected $qualityDisapprovalReasons = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\PolicyTopicEntry[] $policyTopicEntries
     * @param string $reviewState
     * @param string $denormalizedStatus
     * @param string $combinedApprovalStatus
     * @param string $PolicySummaryInfoType
     * @param int $feedMappingId
     * @param string $validationStatus
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeError[] $validationErrors
     * @param string $qualityApprovalStatus
     * @param string[] $qualityDisapprovalReasons
     */
    public function __construct(array $policyTopicEntries = null, $reviewState = null, $denormalizedStatus = null, $combinedApprovalStatus = null, $PolicySummaryInfoType = null, $feedMappingId = null, $validationStatus = null, array $validationErrors = null, $qualityApprovalStatus = null, array $qualityDisapprovalReasons = null)
    {
      parent::__construct($policyTopicEntries, $reviewState, $denormalizedStatus, $combinedApprovalStatus, $PolicySummaryInfoType);
      $this->feedMappingId = $feedMappingId;
      $this->validationStatus = $validationStatus;
      $this->validationErrors = $validationErrors;
      $this->qualityApprovalStatus = $qualityApprovalStatus;
      $this->qualityDisapprovalReasons = $qualityDisapprovalReasons;
    }

    /**
     * @return int
     */
    public function getFeedMappingId()
    {
      return $this->feedMappingId;
    }

    /**
     * @param int $feedMappingId
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary
     */
    public function setFeedMappingId($feedMappingId)
    {
      $this->feedMappingId = (!is_null($feedMappingId) && PHP_INT_SIZE === 4)
          ? floatval($feedMappingId) : $feedMappingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getValidationStatus()
    {
      return $this->validationStatus;
    }

    /**
     * @param string $validationStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary
     */
    public function setValidationStatus($validationStatus)
    {
      $this->validationStatus = $validationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeError[]
     */
    public function getValidationErrors()
    {
      return $this->validationErrors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FeedItemAttributeError[] $validationErrors
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary
     */
    public function setValidationErrors(array $validationErrors)
    {
      $this->validationErrors = $validationErrors;
      return $this;
    }

    /**
     * @return string
     */
    public function getQualityApprovalStatus()
    {
      return $this->qualityApprovalStatus;
    }

    /**
     * @param string $qualityApprovalStatus
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary
     */
    public function setQualityApprovalStatus($qualityApprovalStatus)
    {
      $this->qualityApprovalStatus = $qualityApprovalStatus;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getQualityDisapprovalReasons()
    {
      return $this->qualityDisapprovalReasons;
    }

    /**
     * @param string[] $qualityDisapprovalReasons
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemPolicySummary
     */
    public function setQualityDisapprovalReasons(array $qualityDisapprovalReasons)
    {
      $this->qualityDisapprovalReasons = $qualityDisapprovalReasons;
      return $this;
    }

}
