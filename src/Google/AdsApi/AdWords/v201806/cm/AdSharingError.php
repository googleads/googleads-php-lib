<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSharingError extends \Google\AdsApi\AdWords\v201806\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ApiError $sharedAdError
     */
    protected $sharedAdError = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param \Google\AdsApi\AdWords\v201806\cm\ApiError $sharedAdError
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $sharedAdError = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->sharedAdError = $sharedAdError;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\AdSharingError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
     */
    public function getSharedAdError()
    {
      return $this->sharedAdError;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ApiError $sharedAdError
     * @return \Google\AdsApi\AdWords\v201806\cm\AdSharingError
     */
    public function setSharedAdError($sharedAdError)
    {
      $this->sharedAdError = $sharedAdError;
      return $this;
    }

}
