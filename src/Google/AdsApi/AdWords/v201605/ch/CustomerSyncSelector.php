<?php

namespace Google\AdsApi\AdWords\v201605\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerSyncSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\DateTimeRange $dateTimeRange
     */
    protected $dateTimeRange = null;

    /**
     * @var long[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var long[] $feedIds
     */
    protected $feedIds = null;

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\DateTimeRange $dateTimeRange
     * @param long[] $campaignIds
     * @param long[] $feedIds
     */
    public function __construct($dateTimeRange = null, array $campaignIds = null, array $feedIds = null)
    {
      $this->dateTimeRange = $dateTimeRange;
      $this->campaignIds = $campaignIds;
      $this->feedIds = $feedIds;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\DateTimeRange
     */
    public function getDateTimeRange()
    {
      return $this->dateTimeRange;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\DateTimeRange $dateTimeRange
     * @return \Google\AdsApi\AdWords\v201605\ch\CustomerSyncSelector
     */
    public function setDateTimeRange($dateTimeRange)
    {
      $this->dateTimeRange = $dateTimeRange;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param long[] $campaignIds
     * @return \Google\AdsApi\AdWords\v201605\ch\CustomerSyncSelector
     */
    public function setCampaignIds(array $campaignIds)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getFeedIds()
    {
      return $this->feedIds;
    }

    /**
     * @param long[] $feedIds
     * @return \Google\AdsApi\AdWords\v201605\ch\CustomerSyncSelector
     */
    public function setFeedIds(array $feedIds)
    {
      $this->feedIds = $feedIds;
      return $this;
    }

}
