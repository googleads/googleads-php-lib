<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitTargeting',
      'AdjustmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AdjustmentError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201902\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201902\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargetingError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargetingError',
      'HistoricalAdjustment' => 'Google\\AdsApi\\AdManager\\v201902\\HistoricalAdjustment',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryUnitError',
      'AdUnitSize' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitSize',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryUnitSizesError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201902\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201902\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201902\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201902\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201902\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v201902\\TimeSeries',
      'TrafficForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v201902\\TrafficForecastAdjustment',
      'TrafficForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v201902\\TrafficForecastAdjustmentPage',
      'TrafficForecastAdjustmentSegment' => 'Google\\AdsApi\\AdManager\\v201902\\TrafficForecastAdjustmentSegment',
      'TrafficTimeSeriesFilterCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\TrafficTimeSeriesFilterCriteria',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTarget',
      'getTrafficAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getTrafficAdjustmentsByStatementResponse',
      'updateTrafficAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\updateTrafficAdjustmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/AdjustmentService?wsdl')
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
     * Returns a {@link TrafficForecastAdjustmentPage} of all {@link TrafficForecastAdjustment}s that
     * satisfy the given {@link Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link TrafficForecastAdjustment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link TrafficForecastAdjustment#lastModifiedDateTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\TrafficForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getTrafficAdjustmentsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficAdjustmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Saves all of the provided traffic adjustments.
     *
     * <p>If there is already a {@link TrafficForecastAdjustment} saved for the same {@link
     * TrafficTimeSeriesFilterCriteria}, the pre-existing {@link TrafficForecastAdjustment} will be
     * completely replaced with the submitted {@link TrafficForecastAdjustment}.
     *
     * <p>This method is only available when MAKE_TRAFFIC_FORECAST_ADJUSTMENTS_IN_BULK is enabled in
     * the global settings on your network.
     *
     * @param \Google\AdsApi\AdManager\v201902\TrafficForecastAdjustment[] $adjustments
     * @return \Google\AdsApi\AdManager\v201902\TrafficForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function updateTrafficAdjustments(array $adjustments)
    {
      return $this->__soapCall('updateTrafficAdjustments', array(array('adjustments' => $adjustments)))->getRval();
    }

}
