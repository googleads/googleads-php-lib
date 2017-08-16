<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDeviceSubmodelTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Technology[] $targetedMobileDeviceSubmodels
     */
    protected $targetedMobileDeviceSubmodels = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Technology[] $excludedMobileDeviceSubmodels
     */
    protected $excludedMobileDeviceSubmodels = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $targetedMobileDeviceSubmodels
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $excludedMobileDeviceSubmodels
     */
    public function __construct(array $targetedMobileDeviceSubmodels = null, array $excludedMobileDeviceSubmodels = null)
    {
      $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
      $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Technology[]
     */
    public function getTargetedMobileDeviceSubmodels()
    {
      return $this->targetedMobileDeviceSubmodels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $targetedMobileDeviceSubmodels
     * @return \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting
     */
    public function setTargetedMobileDeviceSubmodels(array $targetedMobileDeviceSubmodels)
    {
      $this->targetedMobileDeviceSubmodels = $targetedMobileDeviceSubmodels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Technology[]
     */
    public function getExcludedMobileDeviceSubmodels()
    {
      return $this->excludedMobileDeviceSubmodels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Technology[] $excludedMobileDeviceSubmodels
     * @return \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting
     */
    public function setExcludedMobileDeviceSubmodels(array $excludedMobileDeviceSubmodels)
    {
      $this->excludedMobileDeviceSubmodels = $excludedMobileDeviceSubmodels;
      return $this;
    }

}
