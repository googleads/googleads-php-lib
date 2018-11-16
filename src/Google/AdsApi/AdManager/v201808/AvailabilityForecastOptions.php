<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AvailabilityForecastOptions
{

    /**
     * @var boolean $includeTargetingCriteriaBreakdown
     */
    protected $includeTargetingCriteriaBreakdown = null;

    /**
     * @var boolean $includeContendingLineItems
     */
    protected $includeContendingLineItems = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\ForecastBreakdownOptions $breakdown
     */
    protected $breakdown = null;

    /**
     * @param boolean $includeTargetingCriteriaBreakdown
     * @param boolean $includeContendingLineItems
     * @param \Google\AdsApi\AdManager\v201808\ForecastBreakdownOptions $breakdown
     */
    public function __construct($includeTargetingCriteriaBreakdown = null, $includeContendingLineItems = null, $breakdown = null)
    {
      $this->includeTargetingCriteriaBreakdown = $includeTargetingCriteriaBreakdown;
      $this->includeContendingLineItems = $includeContendingLineItems;
      $this->breakdown = $breakdown;
    }

    /**
     * @return boolean
     */
    public function getIncludeTargetingCriteriaBreakdown()
    {
      return $this->includeTargetingCriteriaBreakdown;
    }

    /**
     * @param boolean $includeTargetingCriteriaBreakdown
     * @return \Google\AdsApi\AdManager\v201808\AvailabilityForecastOptions
     */
    public function setIncludeTargetingCriteriaBreakdown($includeTargetingCriteriaBreakdown)
    {
      $this->includeTargetingCriteriaBreakdown = $includeTargetingCriteriaBreakdown;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeContendingLineItems()
    {
      return $this->includeContendingLineItems;
    }

    /**
     * @param boolean $includeContendingLineItems
     * @return \Google\AdsApi\AdManager\v201808\AvailabilityForecastOptions
     */
    public function setIncludeContendingLineItems($includeContendingLineItems)
    {
      $this->includeContendingLineItems = $includeContendingLineItems;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ForecastBreakdownOptions
     */
    public function getBreakdown()
    {
      return $this->breakdown;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ForecastBreakdownOptions $breakdown
     * @return \Google\AdsApi\AdManager\v201808\AvailabilityForecastOptions
     */
    public function setBreakdown($breakdown)
    {
      $this->breakdown = $breakdown;
      return $this;
    }

}
