<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
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
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupExperimentBidMultipliers
     */
    public function setAdGroupExperimentBidMultipliersType($AdGroupExperimentBidMultipliersType)
    {
      $this->AdGroupExperimentBidMultipliersType = $AdGroupExperimentBidMultipliersType;
      return $this;
    }

}
