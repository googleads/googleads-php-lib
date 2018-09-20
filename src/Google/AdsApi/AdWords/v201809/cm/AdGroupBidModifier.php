<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupBidModifier
{

    /**
     * @var int $campaignId
     */
    protected $campaignId = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var int $baseAdGroupId
     */
    protected $baseAdGroupId = null;

    /**
     * @var string $bidModifierSource
     */
    protected $bidModifierSource = null;

    /**
     * @param int $campaignId
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     * @param float $bidModifier
     * @param int $baseAdGroupId
     * @param string $bidModifierSource
     */
    public function __construct($campaignId = null, $adGroupId = null, $criterion = null, $bidModifier = null, $baseAdGroupId = null, $bidModifierSource = null)
    {
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
      $this->baseAdGroupId = $baseAdGroupId;
      $this->bidModifierSource = $bidModifierSource;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = (!is_null($campaignId) && PHP_INT_SIZE === 4)
          ? floatval($campaignId) : $campaignId;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setBaseAdGroupId($baseAdGroupId)
    {
      $this->baseAdGroupId = (!is_null($baseAdGroupId) && PHP_INT_SIZE === 4)
          ? floatval($baseAdGroupId) : $baseAdGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getBidModifierSource()
    {
      return $this->bidModifierSource;
    }

    /**
     * @param string $bidModifierSource
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidModifier
     */
    public function setBidModifierSource($bidModifierSource)
    {
      $this->bidModifierSource = $bidModifierSource;
      return $this;
    }

}
