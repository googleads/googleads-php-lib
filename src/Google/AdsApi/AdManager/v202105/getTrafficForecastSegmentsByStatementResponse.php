<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getTrafficForecastSegmentsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202105\TrafficForecastSegmentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202105\TrafficForecastSegmentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\TrafficForecastSegmentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\TrafficForecastSegmentPage $rval
     * @return \Google\AdsApi\AdManager\v202105\getTrafficForecastSegmentsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
