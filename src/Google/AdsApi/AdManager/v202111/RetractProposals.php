<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RetractProposals extends \Google\AdsApi\AdManager\v202111\ProposalAction
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\RetractionDetails $retractionDetails
     */
    protected $retractionDetails = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\RetractionDetails $retractionDetails
     */
    public function __construct($retractionDetails = null)
    {
      $this->retractionDetails = $retractionDetails;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\RetractionDetails
     */
    public function getRetractionDetails()
    {
      return $this->retractionDetails;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\RetractionDetails $retractionDetails
     * @return \Google\AdsApi\AdManager\v202111\RetractProposals
     */
    public function setRetractionDetails($retractionDetails)
    {
      $this->retractionDetails = $retractionDetails;
      return $this;
    }

}
