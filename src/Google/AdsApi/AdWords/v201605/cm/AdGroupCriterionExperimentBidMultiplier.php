<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
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
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionExperimentBidMultiplier
     */
    public function setAdGroupCriterionExperimentBidMultiplierType($AdGroupCriterionExperimentBidMultiplierType)
    {
      $this->AdGroupCriterionExperimentBidMultiplierType = $AdGroupCriterionExperimentBidMultiplierType;
      return $this;
    }

}
