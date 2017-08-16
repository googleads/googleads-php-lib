<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OperatingSystemVersionTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Technology[] $targetedOperatingSystemVersions
     */
    protected $targetedOperatingSystemVersions = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Technology[] $excludedOperatingSystemVersions
     */
    protected $excludedOperatingSystemVersions = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $targetedOperatingSystemVersions
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $excludedOperatingSystemVersions
     */
    public function __construct(array $targetedOperatingSystemVersions = null, array $excludedOperatingSystemVersions = null)
    {
      $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
      $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Technology[]
     */
    public function getTargetedOperatingSystemVersions()
    {
      return $this->targetedOperatingSystemVersions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $targetedOperatingSystemVersions
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemVersionTargeting
     */
    public function setTargetedOperatingSystemVersions(array $targetedOperatingSystemVersions)
    {
      $this->targetedOperatingSystemVersions = $targetedOperatingSystemVersions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Technology[]
     */
    public function getExcludedOperatingSystemVersions()
    {
      return $this->excludedOperatingSystemVersions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $excludedOperatingSystemVersions
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemVersionTargeting
     */
    public function setExcludedOperatingSystemVersions(array $excludedOperatingSystemVersions)
    {
      $this->excludedOperatingSystemVersions = $excludedOperatingSystemVersions;
      return $this;
    }

}
