<?php

namespace Google\AdsApi\AdManager\v202411;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateForecastAdjustmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202411\ForecastAdjustment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202411\ForecastAdjustment[] $rval
     */
    public function __construct(?array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202411\ForecastAdjustment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202411\ForecastAdjustment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202411\updateForecastAdjustmentsResponse
     */
    public function setRval(?array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
