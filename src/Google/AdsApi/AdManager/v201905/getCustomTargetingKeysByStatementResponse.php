<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getCustomTargetingKeysByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\CustomTargetingKeyPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\CustomTargetingKeyPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\CustomTargetingKeyPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\CustomTargetingKeyPage $rval
     * @return \Google\AdsApi\AdManager\v201905\getCustomTargetingKeysByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
