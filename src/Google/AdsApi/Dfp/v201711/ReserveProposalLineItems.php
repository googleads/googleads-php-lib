<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReserveProposalLineItems extends \Google\AdsApi\Dfp\v201711\ProposalLineItemAction
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
     * @return \Google\AdsApi\Dfp\v201711\ReserveProposalLineItems
     */
    public function setAllowOverbook($allowOverbook)
    {
      $this->allowOverbook = $allowOverbook;
      return $this;
    }

}
