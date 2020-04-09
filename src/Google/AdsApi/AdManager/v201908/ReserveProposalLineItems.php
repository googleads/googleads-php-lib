<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReserveProposalLineItems extends \Google\AdsApi\AdManager\v201908\ProposalLineItemAction
{

    /**
     * @var boolean $allowOverbook
     */
    protected $allowOverbook = null;

    /**
     * @param boolean $allowOverbook
     */
    public function __construct($allowOverbook = null)
    {
      $this->allowOverbook = $allowOverbook;
    }

    /**
     * @return boolean
     */
    public function getAllowOverbook()
    {
      return $this->allowOverbook;
    }

    /**
     * @param boolean $allowOverbook
     * @return \Google\AdsApi\AdManager\v201908\ReserveProposalLineItems
     */
    public function setAllowOverbook($allowOverbook)
    {
      $this->allowOverbook = $allowOverbook;
      return $this;
    }

}
