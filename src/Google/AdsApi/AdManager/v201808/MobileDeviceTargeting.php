<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDeviceTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201808\Technology[] $targetedMobileDevices
     */
    protected $targetedMobileDevices = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Technology[] $excludedMobileDevices
     */
    protected $excludedMobileDevices = null;

    /**
     * @param \Google\AdsApi\AdManager\v201808\Technology[] $targetedMobileDevices
     * @param \Google\AdsApi\AdManager\v201808\Technology[] $excludedMobileDevices
     */
    public function __construct(array $targetedMobileDevices = null, array $excludedMobileDevices = null)
    {
      $this->targetedMobileDevices = $targetedMobileDevices;
      $this->excludedMobileDevices = $excludedMobileDevices;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Technology[]
     */
    public function getTargetedMobileDevices()
    {
      return $this->targetedMobileDevices;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Technology[] $targetedMobileDevices
     * @return \Google\AdsApi\AdManager\v201808\MobileDeviceTargeting
     */
    public function setTargetedMobileDevices(array $targetedMobileDevices)
    {
      $this->targetedMobileDevices = $targetedMobileDevices;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Technology[]
     */
    public function getExcludedMobileDevices()
    {
      return $this->excludedMobileDevices;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Technology[] $excludedMobileDevices
     * @return \Google\AdsApi\AdManager\v201808\MobileDeviceTargeting
     */
    public function setExcludedMobileDevices(array $excludedMobileDevices)
    {
      $this->excludedMobileDevices = $excludedMobileDevices;
      return $this;
    }

}
