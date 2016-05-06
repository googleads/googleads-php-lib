<?php

namespace Google\AdsApi\AdWords\v201603\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManagedCustomerServiceError extends \Google\AdsApi\AdWords\v201603\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var long[] $customerIds
     */
    protected $customerIds = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param long[] $customerIds
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, array $customerIds = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
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
     * @return \Google\AdsApi\AdWords\v201603\mcm\ManagedCustomerServiceError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCustomerIds()
    {
      return $this->customerIds;
    }

    /**
     * @param long[] $customerIds
     * @return \Google\AdsApi\AdWords\v201603\mcm\ManagedCustomerServiceError
     */
    public function setCustomerIds(array $customerIds)
    {
      $this->customerIds = $customerIds;
      return $this;
    }

}
