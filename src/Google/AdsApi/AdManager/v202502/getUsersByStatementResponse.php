<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getUsersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\UserPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\UserPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\UserPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\UserPage $rval
     * @return \Google\AdsApi\AdManager\v202502\getUsersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
