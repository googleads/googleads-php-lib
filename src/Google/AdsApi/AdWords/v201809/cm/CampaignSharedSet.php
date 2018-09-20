<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignSharedSet
{

    /**
     * @var int $sharedSetId
     */
    protected $sharedSetId = null;

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $sharedSetName
     */
    protected $sharedSetName = null;

    /**
     * @var string $sharedSetType
     */
    protected $sharedSetType = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $sharedSetId
     * @param int $campaignId
     * @param string $sharedSetName
     * @param string $sharedSetType
     * @param string $campaignName
     * @param string $status
     */
    public function __construct($sharedSetId = null, $campaignId = null, $sharedSetName = null, $sharedSetType = null, $campaignName = null, $status = null)
    {
      $this->sharedSetId = $sharedSetId;
      $this->campaignId = $campaignId;
      $this->sharedSetName = $sharedSetName;
      $this->sharedSetType = $sharedSetType;
      $this->campaignName = $campaignName;
      $this->status = $status;
    }

    /**
     * @return int
     */
    public function getSharedSetId()
    {
      return $this->sharedSetId;
    }

    /**
     * @param int $sharedSetId
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setSharedSetId($sharedSetId)
    {
      $this->sharedSetId = (!is_null($sharedSetId) && PHP_INT_SIZE === 4)
          ? floatval($sharedSetId) : $sharedSetId;
      return $this;
    }

    /**
     * @return int
     */
    public function getCampaignId()
    {
      return $this->campaignId;
    }

    /**
     * @param int $campaignId
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSharedSetName()
    {
      return $this->sharedSetName;
    }

    /**
     * @param string $sharedSetName
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setSharedSetName($sharedSetName)
    {
      $this->sharedSetName = $sharedSetName;
      return $this;
    }

    /**
     * @return string
     */
    public function getSharedSetType()
    {
      return $this->sharedSetType;
    }

    /**
     * @param string $sharedSetType
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setSharedSetType($sharedSetType)
    {
      $this->sharedSetType = $sharedSetType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCampaignName()
    {
      return $this->campaignName;
    }

    /**
     * @param string $campaignName
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignSharedSet
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
