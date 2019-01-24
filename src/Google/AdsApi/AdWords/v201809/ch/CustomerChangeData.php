<?php

namespace Google\AdsApi\AdWords\v201809\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerChangeData
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\ch\CampaignChangeData[] $changedCampaigns
     */
    protected $changedCampaigns = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\ch\FeedChangeData[] $changedFeeds
     */
    protected $changedFeeds = null;

    /**
     * @var string $lastChangeTimestamp
     */
    protected $lastChangeTimestamp = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\ch\CampaignChangeData[] $changedCampaigns
     * @param \Google\AdsApi\AdWords\v201809\ch\FeedChangeData[] $changedFeeds
     * @param string $lastChangeTimestamp
     */
    public function __construct(array $changedCampaigns = null, array $changedFeeds = null, $lastChangeTimestamp = null)
    {
      $this->changedCampaigns = $changedCampaigns;
      $this->changedFeeds = $changedFeeds;
      $this->lastChangeTimestamp = $lastChangeTimestamp;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\ch\CampaignChangeData[]
     */
    public function getChangedCampaigns()
    {
      return $this->changedCampaigns;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\ch\CampaignChangeData[] $changedCampaigns
     * @return \Google\AdsApi\AdWords\v201809\ch\CustomerChangeData
     */
    public function setChangedCampaigns(array $changedCampaigns)
    {
      $this->changedCampaigns = $changedCampaigns;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\ch\FeedChangeData[]
     */
    public function getChangedFeeds()
    {
      return $this->changedFeeds;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\ch\FeedChangeData[] $changedFeeds
     * @return \Google\AdsApi\AdWords\v201809\ch\CustomerChangeData
     */
    public function setChangedFeeds(array $changedFeeds)
    {
      $this->changedFeeds = $changedFeeds;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastChangeTimestamp()
    {
      return $this->lastChangeTimestamp;
    }

    /**
     * @param string $lastChangeTimestamp
     * @return \Google\AdsApi\AdWords\v201809\ch\CustomerChangeData
     */
    public function setLastChangeTimestamp($lastChangeTimestamp)
    {
      $this->lastChangeTimestamp = $lastChangeTimestamp;
      return $this;
    }

}
