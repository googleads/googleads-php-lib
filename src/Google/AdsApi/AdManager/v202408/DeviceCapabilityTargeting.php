<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeviceCapabilityTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\Technology[] $targetedDeviceCapabilities
     */
    protected $targetedDeviceCapabilities = null;

    /**
     * @var \Google\AdsApi\AdManager\v202408\Technology[] $excludedDeviceCapabilities
     */
    protected $excludedDeviceCapabilities = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\Technology[] $targetedDeviceCapabilities
     * @param \Google\AdsApi\AdManager\v202408\Technology[] $excludedDeviceCapabilities
     */
    public function __construct(array $targetedDeviceCapabilities = null, array $excludedDeviceCapabilities = null)
    {
      $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
      $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\Technology[]
     */
    public function getTargetedDeviceCapabilities()
    {
      return $this->targetedDeviceCapabilities;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\Technology[]|null $targetedDeviceCapabilities
     * @return \Google\AdsApi\AdManager\v202408\DeviceCapabilityTargeting
     */
    public function setTargetedDeviceCapabilities(array $targetedDeviceCapabilities = null)
    {
      $this->targetedDeviceCapabilities = $targetedDeviceCapabilities;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\Technology[]
     */
    public function getExcludedDeviceCapabilities()
    {
      return $this->excludedDeviceCapabilities;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\Technology[]|null $excludedDeviceCapabilities
     * @return \Google\AdsApi\AdManager\v202408\DeviceCapabilityTargeting
     */
    public function setExcludedDeviceCapabilities(array $excludedDeviceCapabilities = null)
    {
      $this->excludedDeviceCapabilities = $excludedDeviceCapabilities;
      return $this;
    }

}
