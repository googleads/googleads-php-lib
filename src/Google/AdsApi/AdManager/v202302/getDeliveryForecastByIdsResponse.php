<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getDeliveryForecastByIdsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202302\DeliveryForecast $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202302\DeliveryForecast $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202302\DeliveryForecast
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202302\DeliveryForecast $rval
     * @return \Google\AdsApi\AdManager\v202302\getDeliveryForecastByIdsResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
