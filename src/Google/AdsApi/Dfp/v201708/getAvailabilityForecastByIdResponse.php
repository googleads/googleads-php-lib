<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getAvailabilityForecastByIdResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\AvailabilityForecast $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\AvailabilityForecast $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\AvailabilityForecast
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\AvailabilityForecast $rval
     * @return \Google\AdsApi\Dfp\v201708\getAvailabilityForecastByIdResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
