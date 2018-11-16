<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomizableAttributes
{

    /**
     * @var boolean $allowGeoTargetingCustomization
     */
    protected $allowGeoTargetingCustomization = null;

    /**
     * @var boolean $allowAdUnitTargetingCustomization
     */
    protected $allowAdUnitTargetingCustomization = null;

    /**
     * @var boolean $allowPlacementTargetingCustomization
     */
    protected $allowPlacementTargetingCustomization = null;

    /**
     * @var boolean $allowUserDomainTargetingCustomization
     */
    protected $allowUserDomainTargetingCustomization = null;

    /**
     * @var boolean $allowBandwidthGroupTargetingCustomization
     */
    protected $allowBandwidthGroupTargetingCustomization = null;

    /**
     * @var boolean $allowBrowserTargetingCustomization
     */
    protected $allowBrowserTargetingCustomization = null;

    /**
     * @var boolean $allowBrowserLanguageTargetingCustomization
     */
    protected $allowBrowserLanguageTargetingCustomization = null;

    /**
     * @var boolean $allowOperatingSystemTargetingCustomization
     */
    protected $allowOperatingSystemTargetingCustomization = null;

    /**
     * @var boolean $allowDeviceCapabilityTargetingCustomization
     */
    protected $allowDeviceCapabilityTargetingCustomization = null;

    /**
     * @var boolean $allowDeviceCategoryTargetingCustomization
     */
    protected $allowDeviceCategoryTargetingCustomization = null;

    /**
     * @var boolean $allowMobileApplicationTargetingCustomization
     */
    protected $allowMobileApplicationTargetingCustomization = null;

    /**
     * @var boolean $allowMobileCarrierTargetingCustomization
     */
    protected $allowMobileCarrierTargetingCustomization = null;

    /**
     * @var boolean $allowMobileDeviceAndManufacturerTargetingCustomization
     */
    protected $allowMobileDeviceAndManufacturerTargetingCustomization = null;

    /**
     * @var boolean $allowAudienceSegmentTargetingCustomization
     */
    protected $allowAudienceSegmentTargetingCustomization = null;

    /**
     * @var boolean $isAllCustomTargetingKeysCustomizable
     */
    protected $isAllCustomTargetingKeysCustomizable = null;

    /**
     * @var int[] $customizableCustomTargetingKeyIds
     */
    protected $customizableCustomTargetingKeyIds = null;

    /**
     * @var boolean $allowDaypartTargetingCustomization
     */
    protected $allowDaypartTargetingCustomization = null;

    /**
     * @var boolean $allowFrequencyCapsCustomization
     */
    protected $allowFrequencyCapsCustomization = null;

    /**
     * @var boolean $allowDeliverySettingsCustomization
     */
    protected $allowDeliverySettingsCustomization = null;

    /**
     * @var boolean $allowCreativePlaceholdersCustomization
     */
    protected $allowCreativePlaceholdersCustomization = null;

    /**
     * @param boolean $allowGeoTargetingCustomization
     * @param boolean $allowAdUnitTargetingCustomization
     * @param boolean $allowPlacementTargetingCustomization
     * @param boolean $allowUserDomainTargetingCustomization
     * @param boolean $allowBandwidthGroupTargetingCustomization
     * @param boolean $allowBrowserTargetingCustomization
     * @param boolean $allowBrowserLanguageTargetingCustomization
     * @param boolean $allowOperatingSystemTargetingCustomization
     * @param boolean $allowDeviceCapabilityTargetingCustomization
     * @param boolean $allowDeviceCategoryTargetingCustomization
     * @param boolean $allowMobileApplicationTargetingCustomization
     * @param boolean $allowMobileCarrierTargetingCustomization
     * @param boolean $allowMobileDeviceAndManufacturerTargetingCustomization
     * @param boolean $allowAudienceSegmentTargetingCustomization
     * @param boolean $isAllCustomTargetingKeysCustomizable
     * @param int[] $customizableCustomTargetingKeyIds
     * @param boolean $allowDaypartTargetingCustomization
     * @param boolean $allowFrequencyCapsCustomization
     * @param boolean $allowDeliverySettingsCustomization
     * @param boolean $allowCreativePlaceholdersCustomization
     */
    public function __construct($allowGeoTargetingCustomization = null, $allowAdUnitTargetingCustomization = null, $allowPlacementTargetingCustomization = null, $allowUserDomainTargetingCustomization = null, $allowBandwidthGroupTargetingCustomization = null, $allowBrowserTargetingCustomization = null, $allowBrowserLanguageTargetingCustomization = null, $allowOperatingSystemTargetingCustomization = null, $allowDeviceCapabilityTargetingCustomization = null, $allowDeviceCategoryTargetingCustomization = null, $allowMobileApplicationTargetingCustomization = null, $allowMobileCarrierTargetingCustomization = null, $allowMobileDeviceAndManufacturerTargetingCustomization = null, $allowAudienceSegmentTargetingCustomization = null, $isAllCustomTargetingKeysCustomizable = null, array $customizableCustomTargetingKeyIds = null, $allowDaypartTargetingCustomization = null, $allowFrequencyCapsCustomization = null, $allowDeliverySettingsCustomization = null, $allowCreativePlaceholdersCustomization = null)
    {
      $this->allowGeoTargetingCustomization = $allowGeoTargetingCustomization;
      $this->allowAdUnitTargetingCustomization = $allowAdUnitTargetingCustomization;
      $this->allowPlacementTargetingCustomization = $allowPlacementTargetingCustomization;
      $this->allowUserDomainTargetingCustomization = $allowUserDomainTargetingCustomization;
      $this->allowBandwidthGroupTargetingCustomization = $allowBandwidthGroupTargetingCustomization;
      $this->allowBrowserTargetingCustomization = $allowBrowserTargetingCustomization;
      $this->allowBrowserLanguageTargetingCustomization = $allowBrowserLanguageTargetingCustomization;
      $this->allowOperatingSystemTargetingCustomization = $allowOperatingSystemTargetingCustomization;
      $this->allowDeviceCapabilityTargetingCustomization = $allowDeviceCapabilityTargetingCustomization;
      $this->allowDeviceCategoryTargetingCustomization = $allowDeviceCategoryTargetingCustomization;
      $this->allowMobileApplicationTargetingCustomization = $allowMobileApplicationTargetingCustomization;
      $this->allowMobileCarrierTargetingCustomization = $allowMobileCarrierTargetingCustomization;
      $this->allowMobileDeviceAndManufacturerTargetingCustomization = $allowMobileDeviceAndManufacturerTargetingCustomization;
      $this->allowAudienceSegmentTargetingCustomization = $allowAudienceSegmentTargetingCustomization;
      $this->isAllCustomTargetingKeysCustomizable = $isAllCustomTargetingKeysCustomizable;
      $this->customizableCustomTargetingKeyIds = $customizableCustomTargetingKeyIds;
      $this->allowDaypartTargetingCustomization = $allowDaypartTargetingCustomization;
      $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
      $this->allowDeliverySettingsCustomization = $allowDeliverySettingsCustomization;
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
    }

    /**
     * @return boolean
     */
    public function getAllowGeoTargetingCustomization()
    {
      return $this->allowGeoTargetingCustomization;
    }

    /**
     * @param boolean $allowGeoTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowGeoTargetingCustomization($allowGeoTargetingCustomization)
    {
      $this->allowGeoTargetingCustomization = $allowGeoTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAdUnitTargetingCustomization()
    {
      return $this->allowAdUnitTargetingCustomization;
    }

    /**
     * @param boolean $allowAdUnitTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowAdUnitTargetingCustomization($allowAdUnitTargetingCustomization)
    {
      $this->allowAdUnitTargetingCustomization = $allowAdUnitTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowPlacementTargetingCustomization()
    {
      return $this->allowPlacementTargetingCustomization;
    }

    /**
     * @param boolean $allowPlacementTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowPlacementTargetingCustomization($allowPlacementTargetingCustomization)
    {
      $this->allowPlacementTargetingCustomization = $allowPlacementTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowUserDomainTargetingCustomization()
    {
      return $this->allowUserDomainTargetingCustomization;
    }

    /**
     * @param boolean $allowUserDomainTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowUserDomainTargetingCustomization($allowUserDomainTargetingCustomization)
    {
      $this->allowUserDomainTargetingCustomization = $allowUserDomainTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowBandwidthGroupTargetingCustomization()
    {
      return $this->allowBandwidthGroupTargetingCustomization;
    }

    /**
     * @param boolean $allowBandwidthGroupTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowBandwidthGroupTargetingCustomization($allowBandwidthGroupTargetingCustomization)
    {
      $this->allowBandwidthGroupTargetingCustomization = $allowBandwidthGroupTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowBrowserTargetingCustomization()
    {
      return $this->allowBrowserTargetingCustomization;
    }

    /**
     * @param boolean $allowBrowserTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowBrowserTargetingCustomization($allowBrowserTargetingCustomization)
    {
      $this->allowBrowserTargetingCustomization = $allowBrowserTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowBrowserLanguageTargetingCustomization()
    {
      return $this->allowBrowserLanguageTargetingCustomization;
    }

    /**
     * @param boolean $allowBrowserLanguageTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowBrowserLanguageTargetingCustomization($allowBrowserLanguageTargetingCustomization)
    {
      $this->allowBrowserLanguageTargetingCustomization = $allowBrowserLanguageTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOperatingSystemTargetingCustomization()
    {
      return $this->allowOperatingSystemTargetingCustomization;
    }

    /**
     * @param boolean $allowOperatingSystemTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowOperatingSystemTargetingCustomization($allowOperatingSystemTargetingCustomization)
    {
      $this->allowOperatingSystemTargetingCustomization = $allowOperatingSystemTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDeviceCapabilityTargetingCustomization()
    {
      return $this->allowDeviceCapabilityTargetingCustomization;
    }

    /**
     * @param boolean $allowDeviceCapabilityTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowDeviceCapabilityTargetingCustomization($allowDeviceCapabilityTargetingCustomization)
    {
      $this->allowDeviceCapabilityTargetingCustomization = $allowDeviceCapabilityTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDeviceCategoryTargetingCustomization()
    {
      return $this->allowDeviceCategoryTargetingCustomization;
    }

    /**
     * @param boolean $allowDeviceCategoryTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowDeviceCategoryTargetingCustomization($allowDeviceCategoryTargetingCustomization)
    {
      $this->allowDeviceCategoryTargetingCustomization = $allowDeviceCategoryTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMobileApplicationTargetingCustomization()
    {
      return $this->allowMobileApplicationTargetingCustomization;
    }

    /**
     * @param boolean $allowMobileApplicationTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowMobileApplicationTargetingCustomization($allowMobileApplicationTargetingCustomization)
    {
      $this->allowMobileApplicationTargetingCustomization = $allowMobileApplicationTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMobileCarrierTargetingCustomization()
    {
      return $this->allowMobileCarrierTargetingCustomization;
    }

    /**
     * @param boolean $allowMobileCarrierTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowMobileCarrierTargetingCustomization($allowMobileCarrierTargetingCustomization)
    {
      $this->allowMobileCarrierTargetingCustomization = $allowMobileCarrierTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowMobileDeviceAndManufacturerTargetingCustomization()
    {
      return $this->allowMobileDeviceAndManufacturerTargetingCustomization;
    }

    /**
     * @param boolean $allowMobileDeviceAndManufacturerTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowMobileDeviceAndManufacturerTargetingCustomization($allowMobileDeviceAndManufacturerTargetingCustomization)
    {
      $this->allowMobileDeviceAndManufacturerTargetingCustomization = $allowMobileDeviceAndManufacturerTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowAudienceSegmentTargetingCustomization()
    {
      return $this->allowAudienceSegmentTargetingCustomization;
    }

    /**
     * @param boolean $allowAudienceSegmentTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowAudienceSegmentTargetingCustomization($allowAudienceSegmentTargetingCustomization)
    {
      $this->allowAudienceSegmentTargetingCustomization = $allowAudienceSegmentTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsAllCustomTargetingKeysCustomizable()
    {
      return $this->isAllCustomTargetingKeysCustomizable;
    }

    /**
     * @param boolean $isAllCustomTargetingKeysCustomizable
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setIsAllCustomTargetingKeysCustomizable($isAllCustomTargetingKeysCustomizable)
    {
      $this->isAllCustomTargetingKeysCustomizable = $isAllCustomTargetingKeysCustomizable;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCustomizableCustomTargetingKeyIds()
    {
      return $this->customizableCustomTargetingKeyIds;
    }

    /**
     * @param int[] $customizableCustomTargetingKeyIds
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setCustomizableCustomTargetingKeyIds(array $customizableCustomTargetingKeyIds)
    {
      $this->customizableCustomTargetingKeyIds = $customizableCustomTargetingKeyIds;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDaypartTargetingCustomization()
    {
      return $this->allowDaypartTargetingCustomization;
    }

    /**
     * @param boolean $allowDaypartTargetingCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowDaypartTargetingCustomization($allowDaypartTargetingCustomization)
    {
      $this->allowDaypartTargetingCustomization = $allowDaypartTargetingCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowFrequencyCapsCustomization()
    {
      return $this->allowFrequencyCapsCustomization;
    }

    /**
     * @param boolean $allowFrequencyCapsCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowFrequencyCapsCustomization($allowFrequencyCapsCustomization)
    {
      $this->allowFrequencyCapsCustomization = $allowFrequencyCapsCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowDeliverySettingsCustomization()
    {
      return $this->allowDeliverySettingsCustomization;
    }

    /**
     * @param boolean $allowDeliverySettingsCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowDeliverySettingsCustomization($allowDeliverySettingsCustomization)
    {
      $this->allowDeliverySettingsCustomization = $allowDeliverySettingsCustomization;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowCreativePlaceholdersCustomization()
    {
      return $this->allowCreativePlaceholdersCustomization;
    }

    /**
     * @param boolean $allowCreativePlaceholdersCustomization
     * @return \Google\AdsApi\AdManager\v201805\CustomizableAttributes
     */
    public function setAllowCreativePlaceholdersCustomization($allowCreativePlaceholdersCustomization)
    {
      $this->allowCreativePlaceholdersCustomization = $allowCreativePlaceholdersCustomization;
      return $this;
    }

}
