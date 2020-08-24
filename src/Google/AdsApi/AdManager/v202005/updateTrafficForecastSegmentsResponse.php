<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateTrafficForecastSegmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\TrafficForecastSegment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\TrafficForecastSegment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\TrafficForecastSegment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\TrafficForecastSegment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202005\updateTrafficForecastSegmentsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
