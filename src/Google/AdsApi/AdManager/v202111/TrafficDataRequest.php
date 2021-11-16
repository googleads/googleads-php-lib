<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficDataRequest
{

    /**
     * @var \Google\AdsApi\AdManager\v202111\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202111\DateRange $requestedDateRange
     */
    protected $requestedDateRange = null;

    /**
     * @param \Google\AdsApi\AdManager\v202111\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v202111\DateRange $requestedDateRange
     */
    public function __construct($targeting = null, $requestedDateRange = null)
    {
      $this->targeting = $targeting;
      $this->requestedDateRange = $requestedDateRange;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202111\TrafficDataRequest
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202111\DateRange
     */
    public function getRequestedDateRange()
    {
      return $this->requestedDateRange;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202111\DateRange $requestedDateRange
     * @return \Google\AdsApi\AdManager\v202111\TrafficDataRequest
     */
    public function setRequestedDateRange($requestedDateRange)
    {
      $this->requestedDateRange = $requestedDateRange;
      return $this;
    }

}
