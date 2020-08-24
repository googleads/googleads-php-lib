<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDeviceTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202005\Technology[] $targetedMobileDevices
     */
    protected $targetedMobileDevices = null;

    /**
     * @var \Google\AdsApi\AdManager\v202005\Technology[] $excludedMobileDevices
     */
    protected $excludedMobileDevices = null;

    /**
     * @param \Google\AdsApi\AdManager\v202005\Technology[] $targetedMobileDevices
     * @param \Google\AdsApi\AdManager\v202005\Technology[] $excludedMobileDevices
     */
    public function __construct(array $targetedMobileDevices = null, array $excludedMobileDevices = null)
    {
      $this->targetedMobileDevices = $targetedMobileDevices;
      $this->excludedMobileDevices = $excludedMobileDevices;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Technology[]
     */
    public function getTargetedMobileDevices()
    {
      return $this->targetedMobileDevices;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Technology[]|null $targetedMobileDevices
     * @return \Google\AdsApi\AdManager\v202005\MobileDeviceTargeting
     */
    public function setTargetedMobileDevices(array $targetedMobileDevices = null)
    {
      $this->targetedMobileDevices = $targetedMobileDevices;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202005\Technology[]
     */
    public function getExcludedMobileDevices()
    {
      return $this->excludedMobileDevices;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202005\Technology[]|null $excludedMobileDevices
     * @return \Google\AdsApi\AdManager\v202005\MobileDeviceTargeting
     */
    public function setExcludedMobileDevices(array $excludedMobileDevices = null)
    {
      $this->excludedMobileDevices = $excludedMobileDevices;
      return $this;
    }

}
