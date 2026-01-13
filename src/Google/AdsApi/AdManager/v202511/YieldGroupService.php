<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AbstractDisplaySettings' => 'Google\\AdsApi\\AdManager\\v202511\\AbstractDisplaySettings',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202511\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargetingError',
      'OpenBiddingSetting' => 'Google\\AdsApi\\AdManager\\v202511\\OpenBiddingSetting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturerTargeting',
      'DistinctError' => 'Google\\AdsApi\\AdManager\\v202511\\DistinctError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargetingError',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202511\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202511\\Location',
      'SdkMediationSettings' => 'Google\\AdsApi\\AdManager\\v202511\\SdkMediationSettings',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202511\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202511\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202511\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202511\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202511\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTarget',
      'YieldAdSource' => 'Google\\AdsApi\\AdManager\\v202511\\YieldAdSource',
      'YieldError' => 'Google\\AdsApi\\AdManager\\v202511\\YieldError',
      'YieldGroup' => 'Google\\AdsApi\\AdManager\\v202511\\YieldGroup',
      'YieldGroupPage' => 'Google\\AdsApi\\AdManager\\v202511\\YieldGroupPage',
      'YieldParameter' => 'Google\\AdsApi\\AdManager\\v202511\\YieldParameter',
      'YieldParameter_StringMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\YieldParameter_StringMapEntry',
      'YieldPartner' => 'Google\\AdsApi\\AdManager\\v202511\\YieldPartner',
      'YieldPartnerSettings' => 'Google\\AdsApi\\AdManager\\v202511\\YieldPartnerSettings',
      'createYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createYieldGroupsResponse',
      'getYieldGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getYieldGroupsByStatementResponse',
      'getYieldPartnersResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getYieldPartnersResponse',
      'updateYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateYieldGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/YieldGroupService?wsdl')
    {
      foreach (self::$classmap as $key => $value) {
        if (!isset($options['classmap'][$key])) {
          $options['classmap'][$key] = $value;
        }
      }
      $options = array_merge(array (
      'features' => 1,
    ), $options);
      parent::__construct($wsdl, $options);
    }

    /**
     * Creates yield groups in bulk.
     *
     * @param \Google\AdsApi\AdManager\v202511\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202511\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('createYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

    /**
     * Gets a page of yield groups, with child tags, filtered by the given statement.
     *
     * @param \Google\AdsApi\AdManager\v202511\Statement $statement
     * @return \Google\AdsApi\AdManager\v202511\YieldGroupPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getYieldGroupsByStatement(\Google\AdsApi\AdManager\v202511\Statement $statement)
    {
      return $this->__soapCall('getYieldGroupsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns the available partners for yield groups, each one of them is backed by a company.
     *
     * @return \Google\AdsApi\AdManager\v202511\YieldPartner[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getYieldPartners()
    {
      return $this->__soapCall('getYieldPartners', array(array()))->getRval();
    }

    /**
     * Updates a list of yield groups.
     *
     * @param \Google\AdsApi\AdManager\v202511\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202511\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('updateYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

}
