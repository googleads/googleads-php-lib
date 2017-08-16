<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDeliveryForecastResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\DeliveryForecast $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\DeliveryForecast $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DeliveryForecast
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DeliveryForecast $rval
     * @return \Google\AdsApi\Dfp\v201708\getDeliveryForecastResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
