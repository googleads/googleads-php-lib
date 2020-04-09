<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getTrafficAdjustmentsByStatementResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\TrafficForecastAdjustmentPage $rval
     * @return \Google\AdsApi\AdManager\v201908\getTrafficAdjustmentsByStatementResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
