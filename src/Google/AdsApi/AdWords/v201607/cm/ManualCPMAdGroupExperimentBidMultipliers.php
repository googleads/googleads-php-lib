<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManualCPMAdGroupExperimentBidMultipliers extends \Google\AdsApi\AdWords\v201607\cm\AdGroupExperimentBidMultipliers
{

    /**
     * @var \Google\AdsApi\AdWords\v201607\cm\BidMultiplier $maxCpmMultiplier
     */
    protected $maxCpmMultiplier = null;

    /**
     * @param string $AdGroupExperimentBidMultipliersType
     * @param \Google\AdsApi\AdWords\v201607\cm\BidMultiplier $maxCpmMultiplier
     */
    public function __construct($AdGroupExperimentBidMultipliersType = null, $maxCpmMultiplier = null)
    {
      parent::__construct($AdGroupExperimentBidMultipliersType);
      $this->maxCpmMultiplier = $maxCpmMultiplier;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201607\cm\BidMultiplier
     */
    public function getMaxCpmMultiplier()
    {
      return $this->maxCpmMultiplier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201607\cm\BidMultiplier $maxCpmMultiplier
     * @return \Google\AdsApi\AdWords\v201607\cm\ManualCPMAdGroupExperimentBidMultipliers
     */
    public function setMaxCpmMultiplier($maxCpmMultiplier)
    {
      $this->maxCpmMultiplier = $maxCpmMultiplier;
      return $this;
    }

}
