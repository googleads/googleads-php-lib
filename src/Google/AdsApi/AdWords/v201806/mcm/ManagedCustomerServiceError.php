<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerServiceError extends \Google\AdsApi\AdWords\v201806\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var int[] $customerIds
     */
    protected $customerIds = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param int[] $customerIds
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, array $customerIds = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->customerIds = $customerIds;
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
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerServiceError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCustomerIds()
    {
      return $this->customerIds;
    }

    /**
     * @param int[] $customerIds
     * @return \Google\AdsApi\AdWords\v201806\mcm\ManagedCustomerServiceError
     */
    public function setCustomerIds(array $customerIds)
    {
      $this->customerIds = $customerIds;
      return $this;
    }

}
