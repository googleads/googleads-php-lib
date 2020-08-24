<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getUsersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202008\UserPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202008\UserPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202008\UserPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202008\UserPage $rval
     * @return \Google\AdsApi\AdManager\v202008\getUsersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
