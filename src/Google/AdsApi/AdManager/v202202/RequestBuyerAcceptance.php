<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RequestBuyerAcceptance extends \Google\AdsApi\AdManager\v202202\ProposalAction
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
     * @return \Google\AdsApi\AdManager\v202202\RequestBuyerAcceptance
     */
    public function setAllowOverbook($allowOverbook)
    {
      $this->allowOverbook = $allowOverbook;
      return $this;
    }

}
