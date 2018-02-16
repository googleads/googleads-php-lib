<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MobileDeviceSubmodel extends \Google\AdsApi\Dfp\v201705\Technology
{

    /**
     * @var int $mobileDeviceCriterionId
     */
    protected $mobileDeviceCriterionId = null;

    /**
     * @var int $deviceManufacturerCriterionId
     */
    protected $deviceManufacturerCriterionId = null;

    /**
     * @param int $id
     * @param string $name
     * @param int $mobileDeviceCriterionId
     * @param int $deviceManufacturerCriterionId
     */
    public function __construct($id = null, $name = null, $mobileDeviceCriterionId = null, $deviceManufacturerCriterionId = null)
    {
      parent::__construct($id, $name);
      $this->mobileDeviceCriterionId = $mobileDeviceCriterionId;
      $this->deviceManufacturerCriterionId = $deviceManufacturerCriterionId;
    }

    /**
     * @return int
     */
    public function getMobileDeviceCriterionId()
    {
      return $this->mobileDeviceCriterionId;
    }

    /**
     * @param int $mobileDeviceCriterionId
     * @return \Google\AdsApi\Dfp\v201705\MobileDeviceSubmodel
     */
    public function setMobileDeviceCriterionId($mobileDeviceCriterionId)
    {
      $this->mobileDeviceCriterionId = (!is_null($mobileDeviceCriterionId) && PHP_INT_SIZE === 4)
          ? floatval($mobileDeviceCriterionId) : $mobileDeviceCriterionId;
      return $this;
    }

    /**
     * @return int
     */
    public function getDeviceManufacturerCriterionId()
    {
      return $this->deviceManufacturerCriterionId;
    }

    /**
     * @param int $deviceManufacturerCriterionId
     * @return \Google\AdsApi\Dfp\v201705\MobileDeviceSubmodel
     */
    public function setDeviceManufacturerCriterionId($deviceManufacturerCriterionId)
    {
      $this->deviceManufacturerCriterionId = (!is_null($deviceManufacturerCriterionId) && PHP_INT_SIZE === 4)
          ? floatval($deviceManufacturerCriterionId) : $deviceManufacturerCriterionId;
      return $this;
    }

}
