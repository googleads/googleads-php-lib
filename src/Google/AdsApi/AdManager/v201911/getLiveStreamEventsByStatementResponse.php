<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLiveStreamEventsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\LiveStreamEventPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\LiveStreamEventPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\LiveStreamEventPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\LiveStreamEventPage $rval
     * @return \Google\AdsApi\AdManager\v201911\getLiveStreamEventsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
