<?php

namespace Google\AdsApi\AdWords\v201708\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DraftAsyncError
{

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var int $draftId
     */
    protected $draftId = null;

    /**
     * @var int $draftCampaignId
     */
    protected $draftCampaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201708\cm\ApiError $asyncError
     */
    protected $asyncError = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @var int $draftAdGroupId
     */
    protected $draftAdGroupId = null;

    /**
     * @param int $baseCampaignId
     * @param int $draftId
     * @param int $draftCampaignId
     * @param \Google\AdsApi\AdWords\v201708\cm\ApiError $asyncError
     * @param int $baseAdGroupId
     * @param int $draftAdGroupId
     */
    public function __construct($baseCampaignId = null, $draftId = null, $draftCampaignId = null, $asyncError = null, $baseAdGroupId = null, $draftAdGroupId = null)
    {
      $this->baseCampaignId = $baseCampaignId;
      $this->draftId = $draftId;
      $this->draftCampaignId = $draftCampaignId;
      $this->asyncError = $asyncError;
      $this->baseAdGroupId = $baseAdGroupId;
      $this->draftAdGroupId = $draftAdGroupId;
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
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDraftId()
    {
      return $this->draftId;
    }

    /**
     * @param int $draftId
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setDraftId($draftId)
    {
      $this->draftId = (PHP_INT_SIZE === 4)
          ? floatval($draftId) : $draftId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDraftCampaignId()
    {
      return $this->draftCampaignId;
    }

    /**
     * @param int $draftCampaignId
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setDraftCampaignId($draftCampaignId)
    {
      $this->draftCampaignId = (PHP_INT_SIZE === 4)
          ? floatval($draftCampaignId) : $draftCampaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201708\cm\ApiError
     */
    public function getAsyncError()
    {
      return $this->asyncError;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201708\cm\ApiError $asyncError
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setAsyncError($asyncError)
    {
      $this->asyncError = $asyncError;
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
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDraftAdGroupId()
    {
      return $this->draftAdGroupId;
    }

    /**
     * @param int $draftAdGroupId
     * @return \Google\AdsApi\AdWords\v201708\cm\DraftAsyncError
     */
    public function setDraftAdGroupId($draftAdGroupId)
    {
      $this->draftAdGroupId = (PHP_INT_SIZE === 4)
          ? floatval($draftAdGroupId) : $draftAdGroupId;
      return $this;
    }

}
