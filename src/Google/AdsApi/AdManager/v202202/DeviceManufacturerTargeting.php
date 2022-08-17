<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DeviceManufacturerTargeting
{

    /**
     * @var boolean $isTargeted
     */
    protected $isTargeted = null;

    /**
     * @var \Google\AdsApi\AdManager\v202202\Technology[] $deviceManufacturers
     */
    protected $deviceManufacturers = null;

    /**
     * @param boolean $isTargeted
     * @param \Google\AdsApi\AdManager\v202202\Technology[] $deviceManufacturers
     */
    public function __construct($isTargeted = null, array $deviceManufacturers = null)
    {
      $this->isTargeted = $isTargeted;
      $this->deviceManufacturers = $deviceManufacturers;
    }

    /**
     * @return boolean
     */
    public function getIsTargeted()
    {
      return $this->isTargeted;
    }

    /**
     * @param boolean $isTargeted
     * @return \Google\AdsApi\AdManager\v202202\DeviceManufacturerTargeting
     */
    public function setIsTargeted($isTargeted)
    {
      $this->isTargeted = $isTargeted;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\Technology[]
     */
    public function getDeviceManufacturers()
    {
      return $this->deviceManufacturers;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\Technology[]|null $deviceManufacturers
     * @return \Google\AdsApi\AdManager\v202202\DeviceManufacturerTargeting
     */
    public function setDeviceManufacturers(array $deviceManufacturers = null)
    {
      $this->deviceManufacturers = $deviceManufacturers;
      return $this;
    }

}
