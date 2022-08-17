<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getMobileApplicationsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\MobileApplicationPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202208\MobileApplicationPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\MobileApplicationPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\MobileApplicationPage $rval
     * @return \Google\AdsApi\AdManager\v202208\getMobileApplicationsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
