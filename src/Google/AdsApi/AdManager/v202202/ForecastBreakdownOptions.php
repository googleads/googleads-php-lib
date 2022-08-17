<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastBreakdownOptions
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\DateTime[] $timeWindows
     */
    protected $timeWindows = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\ForecastBreakdownTarget[] $targets
     */
    protected $targets = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime[] $timeWindows
     * @param \Google\AdsApi\AdManager\v202202\ForecastBreakdownTarget[] $targets
     */
    public function __construct(array $timeWindows = null, array $targets = null)
    {
      $this->timeWindows = $timeWindows;
      $this->targets = $targets;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\DateTime[]
     */
    public function getTimeWindows()
    {
      return $this->timeWindows;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\DateTime[]|null $timeWindows
     * @return \Google\AdsApi\AdManager\v202202\ForecastBreakdownOptions
     */
    public function setTimeWindows(array $timeWindows = null)
    {
      $this->timeWindows = $timeWindows;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\ForecastBreakdownTarget[]
     */
    public function getTargets()
    {
      return $this->targets;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\ForecastBreakdownTarget[]|null $targets
     * @return \Google\AdsApi\AdManager\v202202\ForecastBreakdownOptions
     */
    public function setTargets(array $targets = null)
    {
      $this->targets = $targets;
      return $this;
    }

}
