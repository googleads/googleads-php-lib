<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getTargetingPresetsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\TargetingPresetPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\TargetingPresetPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\TargetingPresetPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\TargetingPresetPage $rval
     * @return \Google\AdsApi\AdManager\v202105\getTargetingPresetsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
