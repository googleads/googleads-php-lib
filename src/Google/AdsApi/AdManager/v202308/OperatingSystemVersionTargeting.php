<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OperatingSystemVersionTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202308\Technology[] $targetedOperatingSystemVersions
     */
    protected $targetedOperatingSystemVersions = null;

    /**
     * @var \Google\AdsApi\AdManager\v202308\Technology[] $excludedOperatingSystemVersions
     */
    protected $excludedOperatingSystemVersions = null;

    /**
     * @param \Google\AdsApi\AdManager\v202308\Technology[] $targetedOperatingSystemVersions
     * @param \Google\AdsApi\AdManager\v202308\Technology[] $excludedOperatingSystemVersions
     */
    public function __construct(array $targetedOperatingSystemVersions = null, array $excludedOperatingSystemVersions = null)
    {
      $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
      $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\Technology[]
     */
    public function getTargetedOperatingSystemVersions()
    {
      return $this->targetedOperatingSystemVersions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\Technology[]|null $targetedOperatingSystemVersions
     * @return \Google\AdsApi\AdManager\v202308\OperatingSystemVersionTargeting
     */
    public function setTargetedOperatingSystemVersions(array $targetedOperatingSystemVersions = null)
    {
      $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202308\Technology[]
     */
    public function getExcludedOperatingSystemVersions()
    {
      return $this->excludedOperatingSystemVersions;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202308\Technology[]|null $excludedOperatingSystemVersions
     * @return \Google\AdsApi\AdManager\v202308\OperatingSystemVersionTargeting
     */
    public function setExcludedOperatingSystemVersions(array $excludedOperatingSystemVersions = null)
    {
      $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
      return $this;
    }

}
