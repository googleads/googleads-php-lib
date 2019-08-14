<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RetractProposals extends \Google\AdsApi\AdManager\v201908\ProposalAction
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\RetractionDetails $retractionDetails
     */
    protected $retractionDetails = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\RetractionDetails $retractionDetails
     */
    public function __construct($retractionDetails = null)
    {
      $this->retractionDetails = $retractionDetails;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\RetractionDetails
     */
    public function getRetractionDetails()
    {
      return $this->retractionDetails;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\RetractionDetails $retractionDetails
     * @return \Google\AdsApi\AdManager\v201908\RetractProposals
     */
    public function setRetractionDetails($retractionDetails)
    {
      $this->retractionDetails = $retractionDetails;
      return $this;
    }

}
