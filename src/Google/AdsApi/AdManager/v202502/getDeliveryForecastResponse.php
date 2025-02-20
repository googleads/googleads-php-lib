<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDeliveryForecastResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\DeliveryForecast $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\DeliveryForecast $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\DeliveryForecast
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\DeliveryForecast $rval
     * @return \Google\AdsApi\AdManager\v202502\getDeliveryForecastResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
