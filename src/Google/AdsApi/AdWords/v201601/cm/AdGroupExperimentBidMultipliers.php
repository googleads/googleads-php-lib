<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class AdGroupExperimentBidMultipliers
{

    /**
     * @var string $AdGroupExperimentBidMultipliersType
     */
    protected $AdGroupExperimentBidMultipliersType = null;

    /**
     * @param string $AdGroupExperimentBidMultipliersType
     */
    public function __construct($AdGroupExperimentBidMultipliersType = null)
    {
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
    }

    /**
     * @return string
     */
    public function getAdGroupExperimentBidMultipliersType()
    {
      return $this->AdGroupExperimentBidMultipliersType;
    }

    /**
     * @param string $AdGroupExperimentBidMultipliersType
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupExperimentBidMultipliers
     */
    public function setAdGroupExperimentBidMultipliersType($AdGroupExperimentBidMultipliersType)
    {
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
      return $this;
    }

}
