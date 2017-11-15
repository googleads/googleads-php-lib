<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeviceCategoryTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201711\Technology[] $targetedDeviceCategories
     */
    protected $targetedDeviceCategories = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\Technology[] $excludedDeviceCategories
     */
    protected $excludedDeviceCategories = null;

    /**
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $targetedDeviceCategories
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $excludedDeviceCategories
     */
    public function __construct(array $targetedDeviceCategories = null, array $excludedDeviceCategories = null)
    {
      $this->targetedDeviceCategories = $targetedDeviceCategories;
      $this->excludedDeviceCategories = $excludedDeviceCategories;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Technology[]
     */
    public function getTargetedDeviceCategories()
    {
      return $this->targetedDeviceCategories;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $targetedDeviceCategories
     * @return \Google\AdsApi\Dfp\v201711\DeviceCategoryTargeting
     */
    public function setTargetedDeviceCategories(array $targetedDeviceCategories)
    {
      $this->targetedDeviceCategories = $targetedDeviceCategories;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\Technology[]
     */
    public function getExcludedDeviceCategories()
    {
      return $this->excludedDeviceCategories;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\Technology[] $excludedDeviceCategories
     * @return \Google\AdsApi\Dfp\v201711\DeviceCategoryTargeting
     */
    public function setExcludedDeviceCategories(array $excludedDeviceCategories)
    {
      $this->excludedDeviceCategories = $excludedDeviceCategories;
      return $this;
    }

}
