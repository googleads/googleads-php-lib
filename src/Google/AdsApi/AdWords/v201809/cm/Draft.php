<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Draft
{

    /**
     * @var int $draftId
     */
    protected $draftId = null;

    /**
     * @var int $baseCampaignId
     */
    protected $baseCampaignId = null;

    /**
     * @var string $draftName
     */
    protected $draftName = null;

    /**
     * @var string $draftStatus
     */
    protected $draftStatus = null;

    /**
     * @var int $draftCampaignId
     */
    protected $draftCampaignId = null;

    /**
     * @var boolean $hasRunningTrial
     */
    protected $hasRunningTrial = null;

    /**
     * @param int $draftId
     * @param int $baseCampaignId
     * @param string $draftName
     * @param string $draftStatus
     * @param int $draftCampaignId
     * @param boolean $hasRunningTrial
     */
    public function __construct($draftId = null, $baseCampaignId = null, $draftName = null, $draftStatus = null, $draftCampaignId = null, $hasRunningTrial = null)
    {
      $this->draftId = $draftId;
      $this->baseCampaignId = $baseCampaignId;
      $this->draftName = $draftName;
      $this->draftStatus = $draftStatus;
      $this->draftCampaignId = $draftCampaignId;
      $this->hasRunningTrial = $hasRunningTrial;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setDraftId($draftId)
    {
      $this->draftId = (!is_null($draftId) && PHP_INT_SIZE === 4)
          ? floatval($draftId) : $draftId;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setBaseCampaignId($baseCampaignId)
    {
      $this->baseCampaignId = (!is_null($baseCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($baseCampaignId) : $baseCampaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getDraftName()
    {
      return $this->draftName;
    }

    /**
     * @param string $draftName
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setDraftName($draftName)
    {
      $this->draftName = $draftName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDraftStatus()
    {
      return $this->draftStatus;
    }

    /**
     * @param string $draftStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setDraftStatus($draftStatus)
    {
      $this->draftStatus = $draftStatus;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setDraftCampaignId($draftCampaignId)
    {
      $this->draftCampaignId = (!is_null($draftCampaignId) && PHP_INT_SIZE === 4)
          ? floatval($draftCampaignId) : $draftCampaignId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasRunningTrial()
    {
      return $this->hasRunningTrial;
    }

    /**
     * @param boolean $hasRunningTrial
     * @return \Google\AdsApi\AdWords\v201809\cm\Draft
     */
    public function setHasRunningTrial($hasRunningTrial)
    {
      $this->hasRunningTrial = $hasRunningTrial;
      return $this;
    }

}
