<?php

namespace Google\AdsApi\AdManager\v202605;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202605\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202605\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202605\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202605\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202605\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202605\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202605\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202605\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202605\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202605\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202605\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202605\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202605\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202605\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202605\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202605\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202605\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202605\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202605\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202605\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202605\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202605\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202605\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202605\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202605\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202605\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202605\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202605\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202605\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202605\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202605\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUnitSizesError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202605\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202605\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202605\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202605\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202605\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202605\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202605\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202605\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202605\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202605\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202605\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202605\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202605\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202605\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202605\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202605\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202605\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202605\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202605\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202605\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202605\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202605\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202605\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202605\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202605\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202605\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202605\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202605\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202605\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202605\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202605\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202605\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202605\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202605\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202605\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202605\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202605/AdjustmentService?wsdl')
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
     * Takes a prospective forecast adjustment and calculates the daily ad opportunity counts
     * corresponding to its provided volume settings.
     *
     * @param \Google\AdsApi\AdManager\v202605\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202605\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202605\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202605\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202605\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function createTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('createTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

    /**
     * Gets a {@link ForecastAdjustmentPage} of {@link ForecastAdjustment} objects that satisfy the
     * given {@link Statement#query}.
     *
     * <p>The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ForecastAdjustment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code trafficForecastSegmentId}</td>
     * <td>{@link ForecastAdjustment#trafficForecastSegmentId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ForecastAdjustment#name}</td>
     * </tr>
     * <tr>
     * <td>{@code startDate}</td>
     * <td>{@link ForecastAdjustment#startDate}</td>
     * </tr>
     * <tr>
     * <td>{@code endDate}</td>
     * <td>{@link ForecastAdjustment#endDate}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link ForecastAdjustment#status}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('getForecastAdjustmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link TrafficForecastSegmentPage} of {@link TrafficForecastSegment} objects that
     * satisfy the given {@link Statement#query}.
     *
     * <p>The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link TrafficForecastSegment#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link TrafficForecastSegment#name}</td>
     * </tr>
     * <tr>
     * <td>{@code creationTime}</td>
     * <td>{@link TrafficForecastSegment#creationTime}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202605\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202605\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202605\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202605\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202605\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202605\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202605\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202605\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202605\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
