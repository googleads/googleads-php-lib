<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingPresetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202505\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202505\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202505\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202505\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202505\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202505\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202505\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202505\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202505\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202505\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202505\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202505\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargetingError',
      'DeleteTargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202505\\DeleteTargetingPresetAction',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturerTargeting',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargetingError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202505\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202505\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202505\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202505\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202505\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202505\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202505\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202505\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202505\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202505\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202505\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202505\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202505\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202505\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202505\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202505\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202505\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202505\\Targeting',
      'TargetingPresetAction' => 'Google\\AdsApi\\AdManager\\v202505\\TargetingPresetAction',
      'TargetingPreset' => 'Google\\AdsApi\\AdManager\\v202505\\TargetingPreset',
      'TargetingPresetPage' => 'Google\\AdsApi\\AdManager\\v202505\\TargetingPresetPage',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202505\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202505\\TimeOfDay',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202505\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTarget',
      'createTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createTargetingPresetsResponse',
      'getTargetingPresetsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getTargetingPresetsByStatementResponse',
      'performTargetingPresetActionResponse' => 'Google\\AdsApi\\AdManager\\v202505\\performTargetingPresetActionResponse',
      'updateTargetingPresetsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateTargetingPresetsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/TargetingPresetService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202505\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\TargetingPresetPage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getTargetingPresetsByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getTargetingPresetsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on the saved targeting objects that match the given {@code filterStatement}.
     *
     * @param \Google\AdsApi\AdManager\v202505\TargetingPresetAction $targetingPresetAction
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function performTargetingPresetAction(\Google\AdsApi\AdManager\v202505\TargetingPresetAction $targetingPresetAction, \Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('performTargetingPresetAction', array(array('targetingPresetAction' => $targetingPresetAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link TargetingPreset} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\TargetingPreset[] $targetingPresets
     * @return \Google\AdsApi\AdManager\v202505\TargetingPreset[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateTargetingPresets(array $targetingPresets)
    {
      return $this->__soapCall('updateTargetingPresets', array(array('targetingPresets' => $targetingPresets)))->getRval();
    }

}
