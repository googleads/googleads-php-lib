<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastBreakdownEntry
{

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\BreakdownForecast $forecast
     */
    protected $forecast = null;

    /**
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202502\BreakdownForecast $forecast
     */
    public function __construct($name = null, $forecast = null)
    {
      $this->name = $name;
      $this->forecast = $forecast;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\BreakdownForecast
     */
    public function getForecast()
    {
      return $this->forecast;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\BreakdownForecast $forecast
     * @return \Google\AdsApi\AdManager\v202502\ForecastBreakdownEntry
     */
    public function setForecast($forecast)
    {
      $this->forecast = $forecast;
      return $this;
    }

}
