<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getTeamsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\TeamPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202208\TeamPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\TeamPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\TeamPage $rval
     * @return \Google\AdsApi\AdManager\v202208\getTeamsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
