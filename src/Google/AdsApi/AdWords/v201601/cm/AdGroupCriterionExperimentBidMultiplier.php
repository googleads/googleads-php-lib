<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class AdGroupCriterionExperimentBidMultiplier
{

    /**
     * @var string $AdGroupCriterionExperimentBidMultiplierType
     */
    protected $AdGroupCriterionExperimentBidMultiplierType = null;

    /**
     * @param string $AdGroupCriterionExperimentBidMultiplierType
     */
    public function __construct($AdGroupCriterionExperimentBidMultiplierType = null)
    {
      $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
    }

    /**
     * @return string
     */
    public function getAdGroupCriterionExperimentBidMultiplierType()
    {
      return $this->AdGroupCriterionExperimentBidMultiplierType;
    }

    /**
     * @param string $AdGroupCriterionExperimentBidMultiplierType
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterionExperimentBidMultiplier
     */
    public function setAdGroupCriterionExperimentBidMultiplierType($AdGroupCriterionExperimentBidMultiplierType)
    {
      $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
      return $this;
    }

}
