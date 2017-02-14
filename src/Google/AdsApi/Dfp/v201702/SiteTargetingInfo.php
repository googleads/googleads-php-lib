<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SiteTargetingInfo
{

    /**
     * @var string $targetingDescription
     */
    protected $targetingDescription = null;

    /**
     * @var string $targetingSiteName
     */
    protected $targetingSiteName = null;

    /**
     * @var string $targetingAdLocation
     */
    protected $targetingAdLocation = null;

    /**
     * @param string $targetingDescription
     * @param string $targetingSiteName
     * @param string $targetingAdLocation
     */
    public function __construct($targetingDescription = null, $targetingSiteName = null, $targetingAdLocation = null)
    {
      $this->targetingDescription = $targetingDescription;
      $this->targetingSiteName = $targetingSiteName;
      $this->targetingAdLocation = $targetingAdLocation;
    }

    /**
     * @return string
     */
    public function getTargetingDescription()
    {
      return $this->targetingDescription;
    }

    /**
     * @param string $targetingDescription
     * @return \Google\AdsApi\Dfp\v201702\SiteTargetingInfo
     */
    public function setTargetingDescription($targetingDescription)
    {
      $this->targetingDescription = $targetingDescription;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingSiteName()
    {
      return $this->targetingSiteName;
    }

    /**
     * @param string $targetingSiteName
     * @return \Google\AdsApi\Dfp\v201702\SiteTargetingInfo
     */
    public function setTargetingSiteName($targetingSiteName)
    {
      $this->targetingSiteName = $targetingSiteName;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingAdLocation()
    {
      return $this->targetingAdLocation;
    }

    /**
     * @param string $targetingAdLocation
     * @return \Google\AdsApi\Dfp\v201702\SiteTargetingInfo
     */
    public function setTargetingAdLocation($targetingAdLocation)
    {
      $this->targetingAdLocation = $targetingAdLocation;
      return $this;
    }

}
