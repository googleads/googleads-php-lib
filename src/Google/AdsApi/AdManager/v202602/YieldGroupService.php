<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AbstractDisplaySettings' => 'Google\\AdsApi\\AdManager\\v202602\\AbstractDisplaySettings',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargetingError',
      'OpenBiddingSetting' => 'Google\\AdsApi\\AdManager\\v202602\\OpenBiddingSetting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'DistinctError' => 'Google\\AdsApi\\AdManager\\v202602\\DistinctError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202602\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'SdkMediationSettings' => 'Google\\AdsApi\\AdManager\\v202602\\SdkMediationSettings',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202602\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'YieldAdSource' => 'Google\\AdsApi\\AdManager\\v202602\\YieldAdSource',
      'YieldError' => 'Google\\AdsApi\\AdManager\\v202602\\YieldError',
      'YieldGroup' => 'Google\\AdsApi\\AdManager\\v202602\\YieldGroup',
      'YieldGroupPage' => 'Google\\AdsApi\\AdManager\\v202602\\YieldGroupPage',
      'YieldParameter' => 'Google\\AdsApi\\AdManager\\v202602\\YieldParameter',
      'YieldParameter_StringMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\YieldParameter_StringMapEntry',
      'YieldPartner' => 'Google\\AdsApi\\AdManager\\v202602\\YieldPartner',
      'YieldPartnerSettings' => 'Google\\AdsApi\\AdManager\\v202602\\YieldPartnerSettings',
      'createYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createYieldGroupsResponse',
      'getYieldGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getYieldGroupsByStatementResponse',
      'getYieldPartnersResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getYieldPartnersResponse',
      'updateYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateYieldGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/YieldGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202602\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function createYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('createYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

    /**
     * Gets a page of yield groups, with child tags, filtered by the given statement.
     *
     * @param \Google\AdsApi\AdManager\v202602\Statement $statement
     * @return \Google\AdsApi\AdManager\v202602\YieldGroupPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getYieldGroupsByStatement(\Google\AdsApi\AdManager\v202602\Statement $statement)
    {
      return $this->__soapCall('getYieldGroupsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns the available partners for yield groups, each one of them is backed by a company.
     *
     * @return \Google\AdsApi\AdManager\v202602\YieldPartner[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getYieldPartners()
    {
      return $this->__soapCall('getYieldPartners', array(array()))->getRval();
    }

    /**
     * Updates a list of yield groups.
     *
     * @param \Google\AdsApi\AdManager\v202602\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202602\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('updateYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

}
