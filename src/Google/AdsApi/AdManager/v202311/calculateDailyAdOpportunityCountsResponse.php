<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class calculateDailyAdOpportunityCountsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\ForecastAdjustment $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\ForecastAdjustment $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\ForecastAdjustment
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\ForecastAdjustment $rval
     * @return \Google\AdsApi\AdManager\v202311\calculateDailyAdOpportunityCountsResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
