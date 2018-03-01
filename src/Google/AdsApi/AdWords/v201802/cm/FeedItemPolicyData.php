<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemPolicyData extends \Google\AdsApi\AdWords\v201802\cm\PolicyData
{

    /**
     * @var int $placeholderType
     */
    protected $placeholderType = null;

    /**
     * @var int $feedMappingId
     */
    protected $feedMappingId = null;

    /**
     * @var string $validationStatus
     */
    protected $validationStatus = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\FeedItemAttributeError[] $validationErrors
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
     * @param \Google\AdsApi\AdWords\v201802\cm\DisapprovalReason[] $disapprovalReasons
     * @param string $PolicyDataType
     * @param int $placeholderType
     * @param int $feedMappingId
     * @param string $validationStatus
     * @param string $approvalStatus
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemAttributeError[] $validationErrors
     * @param string $qualityApprovalStatus
     * @param string[] $qualityDisapprovalReasons
     */
    public function __construct(array $disapprovalReasons = null, $PolicyDataType = null, $placeholderType = null, $feedMappingId = null, $validationStatus = null, $approvalStatus = null, array $validationErrors = null, $qualityApprovalStatus = null, array $qualityDisapprovalReasons = null)
    {
      parent::__construct($disapprovalReasons, $PolicyDataType);
      $this->placeholderType = $placeholderType;
      $this->feedMappingId = $feedMappingId;
      $this->validationStatus = $validationStatus;
      $this->approvalStatus = $approvalStatus;
      $this->validationErrors = $validationErrors;
      $this->qualityApprovalStatus = $qualityApprovalStatus;
      $this->qualityDisapprovalReasons = $qualityDisapprovalReasons;
    }

    /**
     * @return int
     */
    public function getPlaceholderType()
    {
      return $this->placeholderType;
    }

    /**
     * @param int $placeholderType
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
     */
    public function setPlaceholderType($placeholderType)
    {
      $this->placeholderType = $placeholderType;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
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
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
     */
    public function setValidationStatus($validationStatus)
    {
      $this->validationStatus = $validationStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemAttributeError[]
     */
    public function getValidationErrors()
    {
      return $this->validationErrors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\FeedItemAttributeError[] $validationErrors
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
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
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
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
     * @return \Google\AdsApi\AdWords\v201802\cm\FeedItemPolicyData
     */
    public function setQualityDisapprovalReasons(array $qualityDisapprovalReasons)
    {
      $this->qualityDisapprovalReasons = $qualityDisapprovalReasons;
      return $this;
    }

}
