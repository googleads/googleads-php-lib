<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ManualCPCAdGroupExperimentBidMultipliers extends \Google\AdsApi\AdWords\v201605\cm\AdGroupExperimentBidMultipliers
{

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxCpcMultiplier
     */
    protected $maxCpcMultiplier = null;

    /**
     * @var \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxContentCpcMultiplier
     */
    protected $maxContentCpcMultiplier = null;

    /**
     * @param string $AdGroupExperimentBidMultipliersType
     * @param \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxCpcMultiplier
     * @param \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxContentCpcMultiplier
     */
    public function __construct($AdGroupExperimentBidMultipliersType = null, $maxCpcMultiplier = null, $maxContentCpcMultiplier = null)
    {
      parent::__construct($AdGroupExperimentBidMultipliersType);
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\BidMultiplier
     */
    public function getMaxCpcMultiplier()
    {
      return $this->maxCpcMultiplier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxCpcMultiplier
     * @return \Google\AdsApi\AdWords\v201605\cm\ManualCPCAdGroupExperimentBidMultipliers
     */
    public function setMaxCpcMultiplier($maxCpcMultiplier)
    {
      $this->maxCpcMultiplier = $maxCpcMultiplier;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201605\cm\BidMultiplier
     */
    public function getMaxContentCpcMultiplier()
    {
      return $this->maxContentCpcMultiplier;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201605\cm\BidMultiplier $maxContentCpcMultiplier
     * @return \Google\AdsApi\AdWords\v201605\cm\ManualCPCAdGroupExperimentBidMultipliers
     */
    public function setMaxContentCpcMultiplier($maxContentCpcMultiplier)
    {
      $this->maxContentCpcMultiplier = $maxContentCpcMultiplier;
      return $this;
    }

}
