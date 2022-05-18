<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createForecastAdjustmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\ForecastAdjustment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\ForecastAdjustment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\ForecastAdjustment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\ForecastAdjustment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202205\createForecastAdjustmentsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
