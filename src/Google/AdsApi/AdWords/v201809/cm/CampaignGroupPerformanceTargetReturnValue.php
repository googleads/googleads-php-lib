<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignGroupPerformanceTargetReturnValue extends \Google\AdsApi\AdWords\v201809\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTarget[] $value
     */
    protected $value = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ApiError[] $partialFailureErrors
     */
    protected $partialFailureErrors = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTarget[] $value
     * @param \Google\AdsApi\AdWords\v201809\cm\ApiError[] $partialFailureErrors
     */
    public function __construct($ListReturnValueType = null, array $value = null, array $partialFailureErrors = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
      $this->partialFailureErrors = $partialFailureErrors;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTarget[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTarget[] $value
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTargetReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ApiError[]
     */
    public function getPartialFailureErrors()
    {
      return $this->partialFailureErrors;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ApiError[] $partialFailureErrors
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignGroupPerformanceTargetReturnValue
     */
    public function setPartialFailureErrors(array $partialFailureErrors)
    {
      $this->partialFailureErrors = $partialFailureErrors;
      return $this;
    }

}
