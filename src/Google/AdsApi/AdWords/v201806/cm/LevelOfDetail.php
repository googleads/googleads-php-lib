<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LevelOfDetail
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @param int $campaignId
     */
    public function __construct($campaignId = null)
    {
      $this->campaignId = $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\LevelOfDetail
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

}
