<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getYieldGroupsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\YieldGroupPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\YieldGroupPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\YieldGroupPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\YieldGroupPage $rval
     * @return \Google\AdsApi\AdManager\v202311\getYieldGroupsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
