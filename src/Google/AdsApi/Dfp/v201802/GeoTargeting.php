<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class GeoTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201802\Location[] $targetedLocations
     */
    protected $targetedLocations = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\Location[] $excludedLocations
     */
    protected $excludedLocations = null;

    /**
     * @param \Google\AdsApi\Dfp\v201802\Location[] $targetedLocations
     * @param \Google\AdsApi\Dfp\v201802\Location[] $excludedLocations
     */
    public function __construct(array $targetedLocations = null, array $excludedLocations = null)
    {
      $this->targetedLocations = $targetedLocations;
      $this->excludedLocations = $excludedLocations;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Location[]
     */
    public function getTargetedLocations()
    {
      return $this->targetedLocations;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Location[] $targetedLocations
     * @return \Google\AdsApi\Dfp\v201802\GeoTargeting
     */
    public function setTargetedLocations(array $targetedLocations)
    {
      $this->targetedLocations = $targetedLocations;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\Location[]
     */
    public function getExcludedLocations()
    {
      return $this->excludedLocations;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\Location[] $excludedLocations
     * @return \Google\AdsApi\Dfp\v201802\GeoTargeting
     */
    public function setExcludedLocations(array $excludedLocations)
    {
      $this->excludedLocations = $excludedLocations;
      return $this;
    }

}
