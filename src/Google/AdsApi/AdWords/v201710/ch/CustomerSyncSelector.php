<?php

namespace Google\AdsApi\AdWords\v201710\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerSyncSelector
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\DateTimeRange $dateTimeRange
     */
    protected $dateTimeRange = null;

    /**
     * @var int[] $campaignIds
     */
    protected $campaignIds = null;

    /**
     * @var int[] $feedIds
     */
    protected $feedIds = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\DateTimeRange $dateTimeRange
     * @param int[] $campaignIds
     * @param int[] $feedIds
     */
    public function __construct($dateTimeRange = null, array $campaignIds = null, array $feedIds = null)
    {
      $this->dateTimeRange = $dateTimeRange;
      $this->campaignIds = $campaignIds;
      $this->feedIds = $feedIds;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\DateTimeRange
     */
    public function getDateTimeRange()
    {
      return $this->dateTimeRange;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\DateTimeRange $dateTimeRange
     * @return \Google\AdsApi\AdWords\v201710\ch\CustomerSyncSelector
     */
    public function setDateTimeRange($dateTimeRange)
    {
      $this->dateTimeRange = $dateTimeRange;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCampaignIds()
    {
      return $this->campaignIds;
    }

    /**
     * @param int[] $campaignIds
     * @return \Google\AdsApi\AdWords\v201710\ch\CustomerSyncSelector
     */
    public function setCampaignIds(array $campaignIds)
    {
      $this->campaignIds = $campaignIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getFeedIds()
    {
      return $this->feedIds;
    }

    /**
     * @param int[] $feedIds
     * @return \Google\AdsApi\AdWords\v201710\ch\CustomerSyncSelector
     */
    public function setFeedIds(array $feedIds)
    {
      $this->feedIds = $feedIds;
      return $this;
    }

}
