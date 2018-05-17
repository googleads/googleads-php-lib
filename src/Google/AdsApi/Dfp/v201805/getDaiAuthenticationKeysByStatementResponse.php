<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDaiAuthenticationKeysByStatementResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201805\DaiAuthenticationKeyPage $rval
     * @return \Google\AdsApi\Dfp\v201805\getDaiAuthenticationKeysByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
