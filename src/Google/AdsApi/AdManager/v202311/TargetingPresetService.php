<?php

namespace Google\AdsApi\AdManager\v202311;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202311\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202311\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202311\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202311\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202311\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202311\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202311\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202311\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202311\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202311\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202311\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202311\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202311\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202311\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202311\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202311\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202311\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202311\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202311\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202311\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202311\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\DayPartTargetingError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202311\\EntityChildrenLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202311\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202311\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202311\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202311\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202311\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202311\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202311\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202311\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202311\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202311\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202311\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202311\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202311\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202311\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202311\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202311\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202311\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202311\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202311\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202311\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202311\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202311\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202311\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202311\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202311\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202311\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202311\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202311\\Targeting',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202311\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202311\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202311\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202311\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202311\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202311\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202311\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202311\\VideoPositionTarget',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202311\\getTargetingPresetsByStatementResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202311/TargetingPresetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202311\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202311\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202311\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202311\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

}
