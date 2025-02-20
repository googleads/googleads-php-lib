<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class YieldGroupService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AbstractDisplaySettings' => 'Google\\AdsApi\\AdManager\\v202502\\AbstractDisplaySettings',
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202502\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202502\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202502\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DayPartTargetingError',
      'OpenBiddingSetting' => 'Google\\AdsApi\\AdManager\\v202502\\OpenBiddingSetting',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceManufacturerTargeting',
      'DistinctError' => 'Google\\AdsApi\\AdManager\\v202502\\DistinctError',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GeoTargetingError',
      'IdError' => 'Google\\AdsApi\\AdManager\\v202502\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202502\\Location',
      'SdkMediationSettings' => 'Google\\AdsApi\\AdManager\\v202502\\SdkMediationSettings',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202502\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202502\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredNumberError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202502\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202502\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202502\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202502\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202502\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202502\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTarget',
      'YieldAdSource' => 'Google\\AdsApi\\AdManager\\v202502\\YieldAdSource',
      'YieldError' => 'Google\\AdsApi\\AdManager\\v202502\\YieldError',
      'YieldGroup' => 'Google\\AdsApi\\AdManager\\v202502\\YieldGroup',
      'YieldGroupPage' => 'Google\\AdsApi\\AdManager\\v202502\\YieldGroupPage',
      'YieldParameter' => 'Google\\AdsApi\\AdManager\\v202502\\YieldParameter',
      'YieldParameter_StringMapEntry' => 'Google\\AdsApi\\AdManager\\v202502\\YieldParameter_StringMapEntry',
      'YieldPartner' => 'Google\\AdsApi\\AdManager\\v202502\\YieldPartner',
      'YieldPartnerSettings' => 'Google\\AdsApi\\AdManager\\v202502\\YieldPartnerSettings',
      'createYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\createYieldGroupsResponse',
      'getYieldGroupsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getYieldGroupsByStatementResponse',
      'getYieldPartnersResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getYieldPartnersResponse',
      'updateYieldGroupsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\updateYieldGroupsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/YieldGroupService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202502\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202502\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function createYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('createYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

    /**
     * Gets a page of yield groups, with child tags, filtered by the given statement.
     *
     * @param \Google\AdsApi\AdManager\v202502\Statement $statement
     * @return \Google\AdsApi\AdManager\v202502\YieldGroupPage
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getYieldGroupsByStatement(\Google\AdsApi\AdManager\v202502\Statement $statement)
    {
      return $this->__soapCall('getYieldGroupsByStatement', array(array('statement' => $statement)))->getRval();
    }

    /**
     * Returns the available partners for yield groups, each one of them is backed by a company.
     *
     * @return \Google\AdsApi\AdManager\v202502\YieldPartner[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getYieldPartners()
    {
      return $this->__soapCall('getYieldPartners', array(array()))->getRval();
    }

    /**
     * Updates a list of yield groups.
     *
     * @param \Google\AdsApi\AdManager\v202502\YieldGroup[] $yieldGroups
     * @return \Google\AdsApi\AdManager\v202502\YieldGroup[]
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function updateYieldGroups(array $yieldGroups)
    {
      return $this->__soapCall('updateYieldGroups', array(array('yieldGroups' => $yieldGroups)))->getRval();
    }

}
