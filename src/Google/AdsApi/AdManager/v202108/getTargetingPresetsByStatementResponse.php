<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getTargetingPresetsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\TargetingPresetPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\TargetingPresetPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\TargetingPresetPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\TargetingPresetPage $rval
     * @return \Google\AdsApi\AdManager\v202108\getTargetingPresetsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
