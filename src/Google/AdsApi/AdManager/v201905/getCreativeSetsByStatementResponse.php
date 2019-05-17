<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeSetsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\CreativeSetPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\CreativeSetPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\CreativeSetPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\CreativeSetPage $rval
     * @return \Google\AdsApi\AdManager\v201905\getCreativeSetsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
