<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202008\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202008\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargetingError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargetingError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202008\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202008\\Targeting',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202008\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202008\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202008\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202008\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTarget',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getTargetingPresetsByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/TargetingPresetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
