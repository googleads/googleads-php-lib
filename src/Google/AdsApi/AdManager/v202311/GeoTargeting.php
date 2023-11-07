<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GeoTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202311\Location[] $targetedLocations
     */
    protected $targetedLocations = null;

    /**
     * @var \Google\AdsApi\AdManager\v202311\Location[] $excludedLocations
     */
    protected $excludedLocations = null;

    /**
     * @param \Google\AdsApi\AdManager\v202311\Location[] $targetedLocations
     * @param \Google\AdsApi\AdManager\v202311\Location[] $excludedLocations
     */
    public function __construct(array $targetedLocations = null, array $excludedLocations = null)
    {
      $this->targetedLocations = $targetedLocations;
      $this->excludedLocations = $excludedLocations;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\Location[]
     */
    public function getTargetedLocations()
    {
      return $this->targetedLocations;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\Location[]|null $targetedLocations
     * @return \Google\AdsApi\AdManager\v202311\GeoTargeting
     */
    public function setTargetedLocations(array $targetedLocations = null)
    {
      $this->targetedLocations = $targetedLocations;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202311\Location[]
     */
    public function getExcludedLocations()
    {
      return $this->excludedLocations;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202311\Location[]|null $excludedLocations
     * @return \Google\AdsApi\AdManager\v202311\GeoTargeting
     */
    public function setExcludedLocations(array $excludedLocations = null)
    {
      $this->excludedLocations = $excludedLocations;
      return $this;
    }

}
