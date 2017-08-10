<?php

namespace Google\AdsApi\AdWords\v201708\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201708\o\TrafficEstimatorResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201708\o\TrafficEstimatorResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201708\o\TrafficEstimatorResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201708\o\TrafficEstimatorResult $rval
     * @return \Google\AdsApi\AdWords\v201708\o\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
