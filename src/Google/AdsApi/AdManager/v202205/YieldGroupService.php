<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AbstractDisplaySettings' => 'Google\\AdsApi\\AdManager\\v202205\\AbstractDisplaySettings',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202205\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202205\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargetingError',
      'OpenBiddingSetting' => 'Google\\AdsApi\\AdManager\\v202205\\OpenBiddingSetting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturerTargeting',
      'DistinctError' => 'Google\\AdsApi\\AdManager\\v202205\\DistinctError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargetingError',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202205\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202205\\Location',
      'SdkMediationSettings' => 'Google\\AdsApi\\AdManager\\v202205\\SdkMediationSettings',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202205\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202205\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202205\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202205\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTarget',
      'YieldAdSource' => 'Google\\AdsApi\\AdManager\\v202205\\YieldAdSource',
      'YieldError' => 'Google\\AdsApi\\AdManager\\v202205\\YieldError',
      'YieldGroup' => 'Google\\AdsApi\\AdManager\\v202205\\YieldGroup',
      'YieldGroupPage' => 'Google\\AdsApi\\AdManager\\v202205\\YieldGroupPage',
      'YieldParameter' => 'Google\\AdsApi\\AdManager\\v202205\\YieldParameter',
      'YieldParameter_StringMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\YieldParameter_StringMapEntry',
      'YieldPartner' => 'Google\\AdsApi\\AdManager\\v202205\\YieldPartner',
      'YieldPartnerSettings' => 'Google\\AdsApi\\AdManager\\v202205\\YieldPartnerSettings',
      'createYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createYieldGroupsResponse',
      'getYieldGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getYieldGroupsByStatementResponse',
      'getYieldPartnersResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getYieldPartnersResponse',
      'updateYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateYieldGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/YieldGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202205\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function createYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('createYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

    /**
     * Gets a page of yield groups, with child tags, filtered by the given statement.
     *
     * @param \Google\AdsApi\AdManager\v202205\Statement $statement
     * @return \Google\AdsApi\AdManager\v202205\YieldGroupPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getYieldGroupsByStatement(\Google\AdsApi\AdManager\v202205\Statement $statement)
    {
      return $this->__soapCall('getYieldGroupsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns the available partners for yield groups, each one of them is backed by a company.
     *
     * @return \Google\AdsApi\AdManager\v202205\YieldPartner[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getYieldPartners()
    {
      return $this->__soapCall('getYieldPartners', array(array()))->getRval();
    }

    /**
     * Updates a list of yield groups.
     *
     * @param \Google\AdsApi\AdManager\v202205\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202205\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('updateYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

}
