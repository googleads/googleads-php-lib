<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductSegmentation
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\GeoTargeting $geoSegment
     */
    protected $geoSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\AdUnitTargeting[] $adUnitSegments
     */
    protected $adUnitSegments = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\PlacementTargeting $placementSegment
     */
    protected $placementSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\CustomCriteria[] $customTargetingSegment
     */
    protected $customTargetingSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\UserDomainTargeting $userDomainSegment
     */
    protected $userDomainSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\BandwidthGroupTargeting $bandwidthSegment
     */
    protected $bandwidthSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\BrowserTargeting $browserSegment
     */
    protected $browserSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\BrowserLanguageTargeting $browserLanguageSegment
     */
    protected $browserLanguageSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\OperatingSystemTargeting $operatingSystemSegment
     */
    protected $operatingSystemSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\MobileCarrierTargeting $mobileCarrierSegment
     */
    protected $mobileCarrierSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DeviceCapabilityTargeting $deviceCapabilitySegment
     */
    protected $deviceCapabilitySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DeviceCategoryTargeting $deviceCategorySegment
     */
    protected $deviceCategorySegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DeviceManufacturerTargeting $deviceManufacturerSegment
     */
    protected $deviceManufacturerSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\MobileDeviceTargeting $mobileDeviceSegment
     */
    protected $mobileDeviceSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     */
    protected $mobileDeviceSubmodelSegment = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\VideoPositionTargeting $videoPositionSegment
     */
    protected $videoPositionSegment = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\GeoTargeting $geoSegment
     * @param \Google\AdsApi\Dfp\v201708\AdUnitTargeting[] $adUnitSegments
     * @param \Google\AdsApi\Dfp\v201708\PlacementTargeting $placementSegment
     * @param \Google\AdsApi\Dfp\v201708\CustomCriteria[] $customTargetingSegment
     * @param \Google\AdsApi\Dfp\v201708\UserDomainTargeting $userDomainSegment
     * @param \Google\AdsApi\Dfp\v201708\BandwidthGroupTargeting $bandwidthSegment
     * @param \Google\AdsApi\Dfp\v201708\BrowserTargeting $browserSegment
     * @param \Google\AdsApi\Dfp\v201708\BrowserLanguageTargeting $browserLanguageSegment
     * @param \Google\AdsApi\Dfp\v201708\OperatingSystemTargeting $operatingSystemSegment
     * @param \Google\AdsApi\Dfp\v201708\MobileCarrierTargeting $mobileCarrierSegment
     * @param \Google\AdsApi\Dfp\v201708\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @param \Google\AdsApi\Dfp\v201708\DeviceCategoryTargeting $deviceCategorySegment
     * @param \Google\AdsApi\Dfp\v201708\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @param \Google\AdsApi\Dfp\v201708\MobileDeviceTargeting $mobileDeviceSegment
     * @param \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @param \Google\AdsApi\Dfp\v201708\VideoPositionTargeting $videoPositionSegment
     */
    public function __construct($geoSegment = null, array $adUnitSegments = null, $placementSegment = null, array $customTargetingSegment = null, $userDomainSegment = null, $bandwidthSegment = null, $browserSegment = null, $browserLanguageSegment = null, $operatingSystemSegment = null, $mobileCarrierSegment = null, $deviceCapabilitySegment = null, $deviceCategorySegment = null, $deviceManufacturerSegment = null, $mobileDeviceSegment = null, $mobileDeviceSubmodelSegment = null, $videoPositionSegment = null)
    {
      $this->geoSegment = $geoSegment;
      $this->adUnitSegments = $adUnitSegments;
      $this->placementSegment = $placementSegment;
      $this->customTargetingSegment = $customTargetingSegment;
      $this->userDomainSegment = $userDomainSegment;
      $this->bandwidthSegment = $bandwidthSegment;
      $this->browserSegment = $browserSegment;
      $this->browserLanguageSegment = $browserLanguageSegment;
      $this->operatingSystemSegment = $operatingSystemSegment;
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      $this->deviceCategorySegment = $deviceCategorySegment;
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      $this->videoPositionSegment = $videoPositionSegment;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\GeoTargeting
     */
    public function getGeoSegment()
    {
      return $this->geoSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\GeoTargeting $geoSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setGeoSegment($geoSegment)
    {
      $this->geoSegment = $geoSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\AdUnitTargeting[]
     */
    public function getAdUnitSegments()
    {
      return $this->adUnitSegments;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\AdUnitTargeting[] $adUnitSegments
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setAdUnitSegments(array $adUnitSegments)
    {
      $this->adUnitSegments = $adUnitSegments;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\PlacementTargeting
     */
    public function getPlacementSegment()
    {
      return $this->placementSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\PlacementTargeting $placementSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setPlacementSegment($placementSegment)
    {
      $this->placementSegment = $placementSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CustomCriteria[]
     */
    public function getCustomTargetingSegment()
    {
      return $this->customTargetingSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CustomCriteria[] $customTargetingSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setCustomTargetingSegment(array $customTargetingSegment)
    {
      $this->customTargetingSegment = $customTargetingSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\UserDomainTargeting
     */
    public function getUserDomainSegment()
    {
      return $this->userDomainSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\UserDomainTargeting $userDomainSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setUserDomainSegment($userDomainSegment)
    {
      $this->userDomainSegment = $userDomainSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\BandwidthGroupTargeting
     */
    public function getBandwidthSegment()
    {
      return $this->bandwidthSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\BandwidthGroupTargeting $bandwidthSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setBandwidthSegment($bandwidthSegment)
    {
      $this->bandwidthSegment = $bandwidthSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\BrowserTargeting
     */
    public function getBrowserSegment()
    {
      return $this->browserSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\BrowserTargeting $browserSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setBrowserSegment($browserSegment)
    {
      $this->browserSegment = $browserSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\BrowserLanguageTargeting
     */
    public function getBrowserLanguageSegment()
    {
      return $this->browserLanguageSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\BrowserLanguageTargeting $browserLanguageSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setBrowserLanguageSegment($browserLanguageSegment)
    {
      $this->browserLanguageSegment = $browserLanguageSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\OperatingSystemTargeting
     */
    public function getOperatingSystemSegment()
    {
      return $this->operatingSystemSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\OperatingSystemTargeting $operatingSystemSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setOperatingSystemSegment($operatingSystemSegment)
    {
      $this->operatingSystemSegment = $operatingSystemSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\MobileCarrierTargeting
     */
    public function getMobileCarrierSegment()
    {
      return $this->mobileCarrierSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\MobileCarrierTargeting $mobileCarrierSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setMobileCarrierSegment($mobileCarrierSegment)
    {
      $this->mobileCarrierSegment = $mobileCarrierSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DeviceCapabilityTargeting
     */
    public function getDeviceCapabilitySegment()
    {
      return $this->deviceCapabilitySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DeviceCapabilityTargeting $deviceCapabilitySegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setDeviceCapabilitySegment($deviceCapabilitySegment)
    {
      $this->deviceCapabilitySegment = $deviceCapabilitySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DeviceCategoryTargeting
     */
    public function getDeviceCategorySegment()
    {
      return $this->deviceCategorySegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DeviceCategoryTargeting $deviceCategorySegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setDeviceCategorySegment($deviceCategorySegment)
    {
      $this->deviceCategorySegment = $deviceCategorySegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DeviceManufacturerTargeting
     */
    public function getDeviceManufacturerSegment()
    {
      return $this->deviceManufacturerSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DeviceManufacturerTargeting $deviceManufacturerSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setDeviceManufacturerSegment($deviceManufacturerSegment)
    {
      $this->deviceManufacturerSegment = $deviceManufacturerSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\MobileDeviceTargeting
     */
    public function getMobileDeviceSegment()
    {
      return $this->mobileDeviceSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\MobileDeviceTargeting $mobileDeviceSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setMobileDeviceSegment($mobileDeviceSegment)
    {
      $this->mobileDeviceSegment = $mobileDeviceSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting
     */
    public function getMobileDeviceSubmodelSegment()
    {
      return $this->mobileDeviceSubmodelSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\MobileDeviceSubmodelTargeting $mobileDeviceSubmodelSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setMobileDeviceSubmodelSegment($mobileDeviceSubmodelSegment)
    {
      $this->mobileDeviceSubmodelSegment = $mobileDeviceSubmodelSegment;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\VideoPositionTargeting
     */
    public function getVideoPositionSegment()
    {
      return $this->videoPositionSegment;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\VideoPositionTargeting $videoPositionSegment
     * @return \Google\AdsApi\Dfp\v201708\ProductSegmentation
     */
    public function setVideoPositionSegment($videoPositionSegment)
    {
      $this->videoPositionSegment = $videoPositionSegment;
      return $this;
    }

}
