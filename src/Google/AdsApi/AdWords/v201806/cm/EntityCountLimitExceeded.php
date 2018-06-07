<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class EntityCountLimitExceeded extends \Google\AdsApi\AdWords\v201806\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $enclosingId
     */
    protected $enclosingId = null;

    /**
     * @var int $limit
     */
    protected $limit = null;

    /**
     * @var string $accountLimitType
     */
    protected $accountLimitType = null;

    /**
     * @var int $existingCount
     */
    protected $existingCount = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $enclosingId
     * @param int $limit
     * @param string $accountLimitType
     * @param int $existingCount
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $enclosingId = null, $limit = null, $accountLimitType = null, $existingCount = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->enclosingId = $enclosingId;
      $this->limit = $limit;
      $this->accountLimitType = $accountLimitType;
      $this->existingCount = $existingCount;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\EntityCountLimitExceeded
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnclosingId()
    {
      return $this->enclosingId;
    }

    /**
     * @param string $enclosingId
     * @return \Google\AdsApi\AdWords\v201806\cm\EntityCountLimitExceeded
     */
    public function setEnclosingId($enclosingId)
    {
      $this->enclosingId = $enclosingId;
      return $this;
    }

    /**
     * @return int
     */
    public function getLimit()
    {
      return $this->limit;
    }

    /**
     * @param int $limit
     * @return \Google\AdsApi\AdWords\v201806\cm\EntityCountLimitExceeded
     */
    public function setLimit($limit)
    {
      $this->limit = $limit;
      return $this;
    }

    /**
     * @return string
     */
    public function getAccountLimitType()
    {
      return $this->accountLimitType;
    }

    /**
     * @param string $accountLimitType
     * @return \Google\AdsApi\AdWords\v201806\cm\EntityCountLimitExceeded
     */
    public function setAccountLimitType($accountLimitType)
    {
      $this->accountLimitType = $accountLimitType;
      return $this;
    }

    /**
     * @return int
     */
    public function getExistingCount()
    {
      return $this->existingCount;
    }

    /**
     * @param int $existingCount
     * @return \Google\AdsApi\AdWords\v201806\cm\EntityCountLimitExceeded
     */
    public function setExistingCount($existingCount)
    {
      $this->existingCount = $existingCount;
      return $this;
    }

}
