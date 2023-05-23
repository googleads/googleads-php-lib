<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAdUnitsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202305\AdUnitPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202305\AdUnitPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202305\AdUnitPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202305\AdUnitPage $rval
     * @return \Google\AdsApi\AdManager\v202305\getAdUnitsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
