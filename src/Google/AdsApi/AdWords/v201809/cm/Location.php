<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Location extends \Google\AdsApi\AdWords\v201809\cm\Criterion
{

    /**
     * @var string $locationName
     */
    protected $locationName = null;

    /**
     * @var string $displayType
     */
    protected $displayType = null;

    /**
     * @var string $targetingStatus
     */
    protected $targetingStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Location[] $parentLocations
     */
    protected $parentLocations = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $locationName
     * @param string $displayType
     * @param string $targetingStatus
     * @param \Google\AdsApi\AdWords\v201809\cm\Location[] $parentLocations
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $locationName = null, $displayType = null, $targetingStatus = null, array $parentLocations = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->locationName = $locationName;
      $this->displayType = $displayType;
      $this->targetingStatus = $targetingStatus;
      $this->parentLocations = $parentLocations;
    }

    /**
     * @return string
     */
    public function getLocationName()
    {
      return $this->locationName;
    }

    /**
     * @param string $locationName
     * @return \Google\AdsApi\AdWords\v201809\cm\Location
     */
    public function setLocationName($locationName)
    {
      $this->locationName = $locationName;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayType()
    {
      return $this->displayType;
    }

    /**
     * @param string $displayType
     * @return \Google\AdsApi\AdWords\v201809\cm\Location
     */
    public function setDisplayType($displayType)
    {
      $this->displayType = $displayType;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingStatus()
    {
      return $this->targetingStatus;
    }

    /**
     * @param string $targetingStatus
     * @return \Google\AdsApi\AdWords\v201809\cm\Location
     */
    public function setTargetingStatus($targetingStatus)
    {
      $this->targetingStatus = $targetingStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Location[]
     */
    public function getParentLocations()
    {
      return $this->parentLocations;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Location[] $parentLocations
     * @return \Google\AdsApi\AdWords\v201809\cm\Location
     */
    public function setParentLocations(array $parentLocations)
    {
      $this->parentLocations = $parentLocations;
      return $this;
    }

}
