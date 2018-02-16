<?php

namespace Google\AdsApi\AdWords\v201710\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignChangeData
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var string $campaignChangeStatus
     */
    protected $campaignChangeStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\ch\AdGroupChangeData[] $changedAdGroups
     */
    protected $changedAdGroups = null;

    /**
     * @var int[] $addedCampaignCriteria
     */
    protected $addedCampaignCriteria = null;

    /**
     * @var int[] $removedCampaignCriteria
     */
    protected $removedCampaignCriteria = null;

    /**
     * @var int[] $changedFeeds
     */
    protected $changedFeeds = null;

    /**
     * @var int[] $removedFeeds
     */
    protected $removedFeeds = null;

    /**
     * @param int $campaignId
     * @param string $campaignChangeStatus
     * @param \Google\AdsApi\AdWords\v201710\ch\AdGroupChangeData[] $changedAdGroups
     * @param int[] $addedCampaignCriteria
     * @param int[] $removedCampaignCriteria
     * @param int[] $changedFeeds
     * @param int[] $removedFeeds
     */
    public function __construct($campaignId = null, $campaignChangeStatus = null, array $changedAdGroups = null, array $addedCampaignCriteria = null, array $removedCampaignCriteria = null, array $changedFeeds = null, array $removedFeeds = null)
    {
      $this->campaignId = $campaignId;
      $this->campaignChangeStatus = $campaignChangeStatus;
      $this->changedAdGroups = $changedAdGroups;
      $this->addedCampaignCriteria = $addedCampaignCriteria;
      $this->removedCampaignCriteria = $removedCampaignCriteria;
      $this->changedFeeds = $changedFeeds;
      $this->removedFeeds = $removedFeeds;
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
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
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
    public function getCampaignChangeStatus()
    {
      return $this->campaignChangeStatus;
    }

    /**
     * @param string $campaignChangeStatus
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setCampaignChangeStatus($campaignChangeStatus)
    {
      $this->campaignChangeStatus = $campaignChangeStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\ch\AdGroupChangeData[]
     */
    public function getChangedAdGroups()
    {
      return $this->changedAdGroups;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\ch\AdGroupChangeData[] $changedAdGroups
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setChangedAdGroups(array $changedAdGroups)
    {
      $this->changedAdGroups = $changedAdGroups;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAddedCampaignCriteria()
    {
      return $this->addedCampaignCriteria;
    }

    /**
     * @param int[] $addedCampaignCriteria
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setAddedCampaignCriteria(array $addedCampaignCriteria)
    {
      $this->addedCampaignCriteria = $addedCampaignCriteria;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedCampaignCriteria()
    {
      return $this->removedCampaignCriteria;
    }

    /**
     * @param int[] $removedCampaignCriteria
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setRemovedCampaignCriteria(array $removedCampaignCriteria)
    {
      $this->removedCampaignCriteria = $removedCampaignCriteria;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedFeeds()
    {
      return $this->changedFeeds;
    }

    /**
     * @param int[] $changedFeeds
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setChangedFeeds(array $changedFeeds)
    {
      $this->changedFeeds = $changedFeeds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedFeeds()
    {
      return $this->removedFeeds;
    }

    /**
     * @param int[] $removedFeeds
     * @return \Google\AdsApi\AdWords\v201710\ch\CampaignChangeData
     */
    public function setRemovedFeeds(array $removedFeeds)
    {
      $this->removedFeeds = $removedFeeds;
      return $this;
    }

}
