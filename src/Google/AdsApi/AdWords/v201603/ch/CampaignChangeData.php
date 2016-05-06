<?php

namespace Google\AdsApi\AdWords\v201603\ch;


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
     * @var \Google\AdsApi\AdWords\v201603\ch\AdGroupChangeData[] $changedAdGroups
     */
    protected $changedAdGroups = null;

    /**
     * @var long[] $addedCampaignCriteria
     */
    protected $addedCampaignCriteria = null;

    /**
     * @var long[] $removedCampaignCriteria
     */
    protected $removedCampaignCriteria = null;

    /**
     * @var long[] $changedFeeds
     */
    protected $changedFeeds = null;

    /**
     * @var long[] $removedFeeds
     */
    protected $removedFeeds = null;

    /**
     * @param int $campaignId
     * @param string $campaignChangeStatus
     * @param \Google\AdsApi\AdWords\v201603\ch\AdGroupChangeData[] $changedAdGroups
     * @param long[] $addedCampaignCriteria
     * @param long[] $removedCampaignCriteria
     * @param long[] $changedFeeds
     * @param long[] $removedFeeds
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
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setCampaignChangeStatus($campaignChangeStatus)
    {
      $this->campaignChangeStatus = $campaignChangeStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201603\ch\AdGroupChangeData[]
     */
    public function getChangedAdGroups()
    {
      return $this->changedAdGroups;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201603\ch\AdGroupChangeData[] $changedAdGroups
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setChangedAdGroups(array $changedAdGroups)
    {
      $this->changedAdGroups = $changedAdGroups;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getAddedCampaignCriteria()
    {
      return $this->addedCampaignCriteria;
    }

    /**
     * @param long[] $addedCampaignCriteria
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setAddedCampaignCriteria(array $addedCampaignCriteria)
    {
      $this->addedCampaignCriteria = $addedCampaignCriteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedCampaignCriteria()
    {
      return $this->removedCampaignCriteria;
    }

    /**
     * @param long[] $removedCampaignCriteria
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setRemovedCampaignCriteria(array $removedCampaignCriteria)
    {
      $this->removedCampaignCriteria = $removedCampaignCriteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedFeeds()
    {
      return $this->changedFeeds;
    }

    /**
     * @param long[] $changedFeeds
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setChangedFeeds(array $changedFeeds)
    {
      $this->changedFeeds = $changedFeeds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedFeeds()
    {
      return $this->removedFeeds;
    }

    /**
     * @param long[] $removedFeeds
     * @return \Google\AdsApi\AdWords\v201603\ch\CampaignChangeData
     */
    public function setRemovedFeeds(array $removedFeeds)
    {
      $this->removedFeeds = $removedFeeds;
      return $this;
    }

}
