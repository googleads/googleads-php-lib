<?php

namespace Google\AdsApi\Dfp\v201511;

class RetractProposals extends \Google\AdsApi\Dfp\v201511\ProposalAction
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\RetractionDetails $retractionDetails
     */
    protected $retractionDetails = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\RetractionDetails $retractionDetails
     */
    public function __construct($retractionDetails = null)
    {
      $this->retractionDetails = $retractionDetails;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\RetractionDetails
     */
    public function getRetractionDetails()
    {
      return $this->retractionDetails;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\RetractionDetails $retractionDetails
     * @return \Google\AdsApi\Dfp\v201511\RetractProposals
     */
    public function setRetractionDetails($retractionDetails)
    {
      $this->retractionDetails = $retractionDetails;
      return $this;
    }

}
