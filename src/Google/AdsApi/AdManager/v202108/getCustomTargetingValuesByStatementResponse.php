<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomTargetingValuesByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\CustomTargetingValuePage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\CustomTargetingValuePage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\CustomTargetingValuePage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\CustomTargetingValuePage $rval
     * @return \Google\AdsApi\AdManager\v202108\getCustomTargetingValuesByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
