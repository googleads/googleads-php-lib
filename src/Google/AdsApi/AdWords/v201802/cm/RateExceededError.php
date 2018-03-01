<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RateExceededError extends \Google\AdsApi\AdWords\v201802\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $rateName
     */
    protected $rateName = null;

    /**
     * @var string $rateScope
     */
    protected $rateScope = null;

    /**
     * @var int $retryAfterSeconds
     */
    protected $retryAfterSeconds = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201802\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $rateName
     * @param string $rateScope
     * @param int $retryAfterSeconds
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $rateName = null, $rateScope = null, $retryAfterSeconds = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->rateName = $rateName;
      $this->rateScope = $rateScope;
      $this->retryAfterSeconds = $retryAfterSeconds;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\RateExceededError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateName()
    {
      return $this->rateName;
    }

    /**
     * @param string $rateName
     * @return \Google\AdsApi\AdWords\v201802\cm\RateExceededError
     */
    public function setRateName($rateName)
    {
      $this->rateName = $rateName;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateScope()
    {
      return $this->rateScope;
    }

    /**
     * @param string $rateScope
     * @return \Google\AdsApi\AdWords\v201802\cm\RateExceededError
     */
    public function setRateScope($rateScope)
    {
      $this->rateScope = $rateScope;
      return $this;
    }

    /**
     * @return int
     */
    public function getRetryAfterSeconds()
    {
      return $this->retryAfterSeconds;
    }

    /**
     * @param int $retryAfterSeconds
     * @return \Google\AdsApi\AdWords\v201802\cm\RateExceededError
     */
    public function setRetryAfterSeconds($retryAfterSeconds)
    {
      $this->retryAfterSeconds = $retryAfterSeconds;
      return $this;
    }

}
