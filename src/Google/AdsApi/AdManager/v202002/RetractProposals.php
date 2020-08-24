<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RetractProposals extends \Google\AdsApi\AdManager\v202002\ProposalAction
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\RetractionDetails $retractionDetails
     */
    protected $retractionDetails = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\RetractionDetails $retractionDetails
     */
    public function __construct($retractionDetails = null)
    {
      $this->retractionDetails = $retractionDetails;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\RetractionDetails
     */
    public function getRetractionDetails()
    {
      return $this->retractionDetails;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\RetractionDetails $retractionDetails
     * @return \Google\AdsApi\AdManager\v202002\RetractProposals
     */
    public function setRetractionDetails($retractionDetails)
    {
      $this->retractionDetails = $retractionDetails;
      return $this;
    }

}
