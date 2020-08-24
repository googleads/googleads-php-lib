<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateTrafficAdjustmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\TrafficForecastAdjustment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\TrafficForecastAdjustment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\TrafficForecastAdjustment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\TrafficForecastAdjustment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202002\updateTrafficAdjustmentsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
