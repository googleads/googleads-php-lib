<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrialAsyncError
{

    /**
     * @var int $trialId
     */
    protected $trialId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\ApiError $asyncError
     */
    protected $asyncError = null;

    /**
     * @var int $trialCampaignId
     */
    protected $trialCampaignId = null;

    /**
     * @var int $trialAdGroupId
     */
    protected $trialAdGroupId = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @param int $trialId
     * @param \Google\AdsApi\AdWords\v201809\cm\ApiError $asyncError
     * @param int $trialCampaignId
     * @param int $trialAdGroupId
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     */
    public function __construct($trialId = null, $asyncError = null, $trialCampaignId = null, $trialAdGroupId = null, $baseCampaignId = null, $baseAdGroupId = null)
    {
      $this->trialId = $trialId;
      $this->asyncError = $asyncError;
      $this->trialCampaignId = $trialCampaignId;
      $this->trialAdGroupId = $trialAdGroupId;
      $this->baseCampaignId = $baseCampaignId;
      $this->baseAdGroupId = $baseAdGroupId;
    }

    /**
     * @return int
     */
    public function getTrialId()
    {
      return $this->trialId;
    }

    /**
     * @param int $trialId
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setTrialId($trialId)
    {
      $this->trialId = (!is_null($trialId) && PHP_INT_SIZE === 4)
          ? floatval($trialId) : $trialId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\ApiError
     */
    public function getAsyncError()
    {
      return $this->asyncError;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\ApiError $asyncError
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setAsyncError($asyncError)
    {
      $this->asyncError = $asyncError;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrialCampaignId()
    {
      return $this->trialCampaignId;
    }

    /**
     * @param int $trialCampaignId
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setTrialCampaignId($trialCampaignId)
    {
      $this->trialCampaignId = (!is_null($trialCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($trialCampaignId) : $trialCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTrialAdGroupId()
    {
      return $this->trialAdGroupId;
    }

    /**
     * @param int $trialAdGroupId
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setTrialAdGroupId($trialAdGroupId)
    {
      $this->trialAdGroupId = (!is_null($trialAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($trialAdGroupId) : $trialAdGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseCampaignId()
    {
      return $this->baseCampaignId;
    }

    /**
     * @param int $baseCampaignId
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getBaseAdGroupId()
    {
      return $this->baseAdGroupId;
    }

    /**
     * @param int $baseAdGroupId
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialAsyncError
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (!is_null($baseAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
      return $this;
    }

}
