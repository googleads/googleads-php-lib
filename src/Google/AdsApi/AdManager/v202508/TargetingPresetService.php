<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202508\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202508\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargetingError',
      'DeleteTargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202508\\DeleteTargetingPresetAction',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202508\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202508\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202508\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202508\\Targeting',
      'TargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202508\\TargetingPresetAction',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202508\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202508\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202508\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202508\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202508\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTarget',
      'createTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createTargetingPresetsResponse',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getTargetingPresetsByStatementResponse',
      'performTargetingPresetActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performTargetingPresetActionResponse',
      'updateTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateTargetingPresetsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/TargetingPresetService?wsdl')
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
     * Creates new {@link TargetingPreset} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202508\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function createTargetingPresets(array $targetingPresets)
    {
      return $this->__soapCall('createTargetingPresets', array(array('targetingPresets' => $targetingPresets)))->getRval();
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
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on the saved targeting objects that match the given {@code filterStatement}.
     *
     * @param \Google\AdsApi\AdManager\v202508\TargetingPresetAction $targetingPresetAction
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performTargetingPresetAction(\Google\AdsApi\AdManager\v202508\TargetingPresetAction $targetingPresetAction, \Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('performTargetingPresetAction', array(array('targetingPresetAction' => $targetingPresetAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link TargetingPreset} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202508\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateTargetingPresets(array $targetingPresets)
    {
      return $this->__soapCall('updateTargetingPresets', array(array('targetingPresets' => $targetingPresets)))->getRval();
    }

}
