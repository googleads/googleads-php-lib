<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AbstractDisplaySettings' => 'Google\\AdsApi\\AdManager\\v202605\\AbstractDisplaySettings',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202605\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202605\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202605\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202605\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202605\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202605\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202605\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202605\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202605\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202605\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202605\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\DayPartTargetingError',
      'OpenBiddingSetting' => 'Google\\AdsApi\\AdManager\\v202605\\OpenBiddingSetting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturerTargeting',
      'DistinctError' => 'Google\\AdsApi\\AdManager\\v202605\\DistinctError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202605\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202605\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202605\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202605\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargetingError',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202605\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202605\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202605\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202605\\Location',
      'SdkMediationSettings' => 'Google\\AdsApi\\AdManager\\v202605\\SdkMediationSettings',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202605\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202605\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202605\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202605\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202605\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202605\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202605\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202605\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202605\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202605\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202605\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202605\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202605\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202605\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202605\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202605\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202605\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202605\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202605\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202605\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTarget',
      'YieldAdSource' => 'Google\\AdsApi\\AdManager\\v202605\\YieldAdSource',
      'YieldError' => 'Google\\AdsApi\\AdManager\\v202605\\YieldError',
      'YieldGroup' => 'Google\\AdsApi\\AdManager\\v202605\\YieldGroup',
      'YieldGroupPage' => 'Google\\AdsApi\\AdManager\\v202605\\YieldGroupPage',
      'YieldParameter' => 'Google\\AdsApi\\AdManager\\v202605\\YieldParameter',
      'YieldParameter_StringMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\YieldParameter_StringMapEntry',
      'YieldPartner' => 'Google\\AdsApi\\AdManager\\v202605\\YieldPartner',
      'YieldPartnerSettings' => 'Google\\AdsApi\\AdManager\\v202605\\YieldPartnerSettings',
      'createYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createYieldGroupsResponse',
      'getYieldGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getYieldGroupsByStatementResponse',
      'getYieldPartnersResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getYieldPartnersResponse',
      'updateYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateYieldGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202605/YieldGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202605\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202605\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('createYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

    /**
     * Gets a page of yield groups, with child tags, filtered by the given statement.
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $statement
     * @return \Google\AdsApi\AdManager\v202605\YieldGroupPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getYieldGroupsByStatement(\Google\AdsApi\AdManager\v202605\Statement $statement)
    {
      return $this->__soapCall('getYieldGroupsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns the available partners for yield groups, each one of them is backed by a company.
     *
     * @return \Google\AdsApi\AdManager\v202605\YieldPartner[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getYieldPartners()
    {
      return $this->__soapCall('getYieldPartners', array(array()))->getRval();
    }

    /**
     * Updates a list of yield groups.
     *
     * @param \Google\AdsApi\AdManager\v202605\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202605\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('updateYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

}
