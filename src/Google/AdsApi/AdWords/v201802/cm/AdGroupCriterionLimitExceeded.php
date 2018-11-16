<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionLimitExceeded extends \Google\AdsApi\AdWords\v201802\cm\EntityCountLimitExceeded
{

    /**
     * @var string $limitType
     */
    protected $limitType = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201802\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $enclosingId
     * @param int $limit
     * @param string $accountLimitType
     * @param int $existingCount
     * @param string $limitType
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null, $limitType = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType, $reason, $enclosingId, $limit, $accountLimitType, $existingCount);
      $this->limitType = $limitType;
    }

    /**
     * @return string
     */
    public function getLimitType()
    {
      return $this->limitType;
    }

    /**
     * @param string $limitType
     * @return \Google\AdsApi\AdWords\v201802\cm\AdGroupCriterionLimitExceeded
     */
    public function setLimitType($limitType)
    {
      $this->limitType = $limitType;
      return $this;
    }

}
