<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createTrafficForecastSegmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\TrafficForecastSegment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\TrafficForecastSegment[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\TrafficForecastSegment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\TrafficForecastSegment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202411\createTrafficForecastSegmentsResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
