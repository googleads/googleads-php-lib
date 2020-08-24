<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDeviceSubmodelTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\Technology[] $targetedMobileDeviceSubmodels
     */
    protected $targetedMobileDeviceSubmodels = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Technology[] $excludedMobileDeviceSubmodels
     */
    protected $excludedMobileDeviceSubmodels = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\Technology[] $targetedMobileDeviceSubmodels
     * @param \Google\AdsApi\AdManager\v201911\Technology[] $excludedMobileDeviceSubmodels
     */
    public function __construct(array $targetedMobileDeviceSubmodels = null, array $excludedMobileDeviceSubmodels = null)
    {
      $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
      $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Technology[]
     */
    public function getTargetedMobileDeviceSubmodels()
    {
      return $this->targetedMobileDeviceSubmodels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Technology[]|null $targetedMobileDeviceSubmodels
     * @return \Google\AdsApi\AdManager\v201911\MobileDeviceSubmodelTargeting
     */
    public function setTargetedMobileDeviceSubmodels(array $targetedMobileDeviceSubmodels = null)
    {
      $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Technology[]
     */
    public function getExcludedMobileDeviceSubmodels()
    {
      return $this->excludedMobileDeviceSubmodels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Technology[]|null $excludedMobileDeviceSubmodels
     * @return \Google\AdsApi\AdManager\v201911\MobileDeviceSubmodelTargeting
     */
    public function setExcludedMobileDeviceSubmodels(array $excludedMobileDeviceSubmodels = null)
    {
      $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
      return $this;
    }

}
