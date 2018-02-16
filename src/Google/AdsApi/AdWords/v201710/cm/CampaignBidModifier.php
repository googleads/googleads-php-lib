<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignBidModifier
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var string $campaignName
     */
    protected $campaignName = null;

    /**
     * @var string $advertisingChannelType
     */
    protected $advertisingChannelType = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @param int $campaignId
     * @param \Google\AdsApi\AdWords\v201710\cm\Criterion $criterion
     * @param string $campaignName
     * @param string $advertisingChannelType
     * @param float $bidModifier
     */
    public function __construct($campaignId = null, $criterion = null, $campaignName = null, $advertisingChannelType = null, $bidModifier = null)
    {
      $this->campaignId = $campaignId;
      $this->criterion = $criterion;
      $this->campaignName = $campaignName;
      $this->advertisingChannelType = $advertisingChannelType;
      $this->bidModifier = $bidModifier;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignBidModifier
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignBidModifier
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignBidModifier
     */
    public function setCampaignName($campaignName)
    {
      $this->campaignName = $campaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdvertisingChannelType()
    {
      return $this->advertisingChannelType;
    }

    /**
     * @param string $advertisingChannelType
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignBidModifier
     */
    public function setAdvertisingChannelType($advertisingChannelType)
    {
      $this->advertisingChannelType = $advertisingChannelType;
      return $this;
    }

    /**
     * @return float
     */
    public function getBidModifier()
    {
      return $this->bidModifier;
    }

    /**
     * @param float $bidModifier
     * @return \Google\AdsApi\AdWords\v201710\cm\CampaignBidModifier
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
      return $this;
    }

}
