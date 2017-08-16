<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReserveProposals extends \Google\AdsApi\Dfp\v201708\ProposalAction
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
     * @return \Google\AdsApi\Dfp\v201708\ReserveProposals
     */
    public function setAllowOverbook($allowOverbook)
    {
      $this->allowOverbook = $allowOverbook;
      return $this;
    }

}
