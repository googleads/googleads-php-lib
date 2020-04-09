<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeviceCategoryTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\Technology[] $targetedDeviceCategories
     */
    protected $targetedDeviceCategories = null;

    /**
     * @var \Google\AdsApi\AdManager\v201905\Technology[] $excludedDeviceCategories
     */
    protected $excludedDeviceCategories = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\Technology[] $targetedDeviceCategories
     * @param \Google\AdsApi\AdManager\v201905\Technology[] $excludedDeviceCategories
     */
    public function __construct(array $targetedDeviceCategories = null, array $excludedDeviceCategories = null)
    {
      $this->targetedDeviceCategories = $targetedDeviceCategories;
      $this->excludedDeviceCategories = $excludedDeviceCategories;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\Technology[]
     */
    public function getTargetedDeviceCategories()
    {
      return $this->targetedDeviceCategories;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\Technology[]|null $targetedDeviceCategories
     * @return \Google\AdsApi\AdManager\v201905\DeviceCategoryTargeting
     */
    public function setTargetedDeviceCategories(array $targetedDeviceCategories = null)
    {
      $this->targetedDeviceCategories = $targetedDeviceCategories;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\Technology[]
     */
    public function getExcludedDeviceCategories()
    {
      return $this->excludedDeviceCategories;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\Technology[]|null $excludedDeviceCategories
     * @return \Google\AdsApi\AdManager\v201905\DeviceCategoryTargeting
     */
    public function setExcludedDeviceCategories(array $excludedDeviceCategories = null)
    {
      $this->excludedDeviceCategories = $excludedDeviceCategories;
      return $this;
    }

}
