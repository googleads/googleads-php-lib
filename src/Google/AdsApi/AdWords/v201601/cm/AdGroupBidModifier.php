<?php

namespace Google\AdsApi\AdWords\v201601\cm;

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
     * @var \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var float $bidModifier
     */
    protected $bidModifier = null;

    /**
     * @var string $bidModifierSource
     */
    protected $bidModifierSource = null;

    /**
     * @param int $campaignId
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     * @param float $bidModifier
     * @param string $bidModifierSource
     */
    public function __construct($campaignId = null, $adGroupId = null, $criterion = null, $bidModifier = null, $bidModifierSource = null)
    {
      $this->campaignId = $campaignId;
      $this->adGroupId = $adGroupId;
      $this->criterion = $criterion;
      $this->bidModifier = $bidModifier;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
     */
    public function setCampaignId($campaignId)
    {
      $this->campaignId = $campaignId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
     */
    public function setBidModifier($bidModifier)
    {
      $this->bidModifier = $bidModifier;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidModifier
     */
    public function setBidModifierSource($bidModifierSource)
    {
      $this->bidModifierSource = $bidModifierSource;
      return $this;
    }

}
