<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCreativeWrappersByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201902\CreativeWrapperPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201902\CreativeWrapperPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201902\CreativeWrapperPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201902\CreativeWrapperPage $rval
     * @return \Google\AdsApi\AdManager\v201902\getCreativeWrappersByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
