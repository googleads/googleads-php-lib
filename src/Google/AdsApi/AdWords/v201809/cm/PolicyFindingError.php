<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyFindingError extends \Google\AdsApi\AdWords\v201809\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\PolicySummary $policySummary
     */
    protected $policySummary = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201809\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicySummary $policySummary
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $policySummary = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->policySummary = $policySummary;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyFindingError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicySummary
     */
    public function getPolicySummary()
    {
      return $this->policySummary;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicySummary $policySummary
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyFindingError
     */
    public function setPolicySummary($policySummary)
    {
      $this->policySummary = $policySummary;
      return $this;
    }

}
