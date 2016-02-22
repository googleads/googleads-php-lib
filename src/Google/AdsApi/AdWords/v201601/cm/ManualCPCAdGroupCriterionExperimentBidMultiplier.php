<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ManualCPCAdGroupCriterionExperimentBidMultiplier extends \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionExperimentBidMultiplier
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\BidMultiplier $maxCpcMultiplier
     */
    protected $maxCpcMultiplier = null;

    /**
     * @var string $multiplierSource
     */
    protected $multiplierSource = null;

    /**
     * @param string $AdGroupCriterionExperimentBidMultiplierType
     * @param \Google\AdsApi\AdWords\v201601\cm\BidMultiplier $maxCpcMultiplier
     * @param string $multiplierSource
     */
    public function __construct($AdGroupCriterionExperimentBidMultiplierType = null, $maxCpcMultiplier = null, $multiplierSource = null)
    {
      parent::__construct($AdGroupCriterionExperimentBidMultiplierType);
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      $this->multiplierSource = $multiplierSource;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\BidMultiplier
     */
    public function getMaxCpcMultiplier()
    {
      return $this->maxCpcMultiplier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\BidMultiplier $maxCpcMultiplier
     * @return \Google\AdsApi\AdWords\v201601\cm\ManualCPCAdGroupCriterionExperimentBidMultiplier
     */
    public function setMaxCpcMultiplier($maxCpcMultiplier)
    {
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      return $this;
    }

    /**
     * @return string
     */
    public function getMultiplierSource()
    {
      return $this->multiplierSource;
    }

    /**
     * @param string $multiplierSource
     * @return \Google\AdsApi\AdWords\v201601\cm\ManualCPCAdGroupCriterionExperimentBidMultiplier
     */
    public function setMultiplierSource($multiplierSource)
    {
      $this->multiplierSource = $multiplierSource;
      return $this;
    }

}
