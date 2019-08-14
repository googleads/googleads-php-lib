<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PauseProposals extends \Google\AdsApi\AdManager\v201908\ProposalAction
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $reason
     */
    public function __construct($reason = null)
    {
      $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\AdManager\v201908\PauseProposals
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
