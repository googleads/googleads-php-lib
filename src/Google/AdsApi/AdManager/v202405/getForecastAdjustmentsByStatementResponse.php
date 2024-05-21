<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getForecastAdjustmentsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202405\ForecastAdjustmentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202405\ForecastAdjustmentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202405\ForecastAdjustmentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202405\ForecastAdjustmentPage $rval
     * @return \Google\AdsApi\AdManager\v202405\getForecastAdjustmentsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
