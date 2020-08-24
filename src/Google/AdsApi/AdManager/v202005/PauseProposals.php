<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PauseProposals extends \Google\AdsApi\AdManager\v202005\ProposalAction
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
     * @return \Google\AdsApi\AdManager\v202005\PauseProposals
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
