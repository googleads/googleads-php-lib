<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202408\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202408\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202408\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202408\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202408\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202408\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202408\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202408\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202408\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202408\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202408\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202408\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202408\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202408\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202408\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202408\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202408\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202408\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202408\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202408\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202408\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\DayPartTargetingError',
      'DeleteTargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202408\\DeleteTargetingPresetAction',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202408\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202408\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202408\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202408\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202408\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202408\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202408\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202408\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202408\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202408\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202408\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202408\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202408\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202408\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202408\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202408\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202408\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202408\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202408\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202408\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202408\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202408\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202408\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202408\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202408\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202408\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202408\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202408\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202408\\Targeting',
      'TargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202408\\TargetingPresetAction',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202408\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202408\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202408\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202408\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202408\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202408\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202408\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202408\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202408\\VideoPositionTarget',
      'createTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202408\\createTargetingPresetsResponse',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202408\\getTargetingPresetsByStatementResponse',
      'performTargetingPresetActionResponse' => 'Google\\AdsApi\\AdManager\\v202408\\performTargetingPresetActionResponse',
      'updateTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202408\\updateTargetingPresetsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202408/TargetingPresetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202408\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202408\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
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
     * @param \Google\AdsApi\AdManager\v202408\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202408\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202408\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on the saved targeting objects that match the given {@code filterStatement}.
     *
     * @param \Google\AdsApi\AdManager\v202408\TargetingPresetAction $targetingPresetAction
     * @param \Google\AdsApi\AdManager\v202408\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202408\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function performTargetingPresetAction(\Google\AdsApi\AdManager\v202408\TargetingPresetAction $targetingPresetAction, \Google\AdsApi\AdManager\v202408\Statement $filterStatement)
    {
      return $this->__soapCall('performTargetingPresetAction', array(array('targetingPresetAction' => $targetingPresetAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link TargetingPreset} objects.
     *
     * @param \Google\AdsApi\AdManager\v202408\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202408\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202408\ApiException
     */
    public function updateTargetingPresets(array $targetingPresets)
    {
      return $this->__soapCall('updateTargetingPresets', array(array('targetingPresets' => $targetingPresets)))->getRval();
    }

}
