<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemMakegoodInfo
{

    /**
     * @var int $originalProposalLineItemId
     */
    protected $originalProposalLineItemId = null;

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param int $originalProposalLineItemId
     * @param string $reason
     */
    public function __construct($originalProposalLineItemId = null, $reason = null)
    {
      $this->originalProposalLineItemId = $originalProposalLineItemId;
      $this->reason = $reason;
    }

    /**
     * @return int
     */
    public function getOriginalProposalLineItemId()
    {
      return $this->originalProposalLineItemId;
    }

    /**
     * @param int $originalProposalLineItemId
     * @return \Google\AdsApi\AdManager\v202005\ProposalLineItemMakegoodInfo
     */
    public function setOriginalProposalLineItemId($originalProposalLineItemId)
    {
      $this->originalProposalLineItemId = (!is_null($originalProposalLineItemId) && PHP_INT_SIZE === 4)
          ? floatval($originalProposalLineItemId) : $originalProposalLineItemId;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202005\ProposalLineItemMakegoodInfo
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
