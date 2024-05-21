<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PauseProposalLineItems extends \Google\AdsApi\AdManager\v202405\ProposalLineItemAction
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
     * @return \Google\AdsApi\AdManager\v202405\PauseProposalLineItems
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
