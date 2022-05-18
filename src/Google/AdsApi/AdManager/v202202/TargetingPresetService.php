<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202202\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202202\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargetingError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202202\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202202\\Targeting',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202202\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202202\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202202\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202202\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTarget',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getTargetingPresetsByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/TargetingPresetService?wsdl')
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
     * Gets a {@link TargetingPresetPage} of {@link TargetingPreset} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link TargetingPreset#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link TargetingPreset#name}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
