<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDaiAuthenticationKeysByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\DaiAuthenticationKeyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\DaiAuthenticationKeyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\DaiAuthenticationKeyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\DaiAuthenticationKeyPage $rval
     * @return \Google\AdsApi\AdManager\v202108\getDaiAuthenticationKeysByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
