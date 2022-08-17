<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class calculateDailyAdOpportunityCountsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202208\ForecastAdjustment $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202208\ForecastAdjustment $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202208\ForecastAdjustment
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202208\ForecastAdjustment $rval
     * @return \Google\AdsApi\AdManager\v202208\calculateDailyAdOpportunityCountsResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
