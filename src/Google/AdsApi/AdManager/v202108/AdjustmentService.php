<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202108\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202108\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202108\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202108\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202108\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202108\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202108\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202108\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202108\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202108\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202108\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202108\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202108\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202108\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202108\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202108\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202108\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202108\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202108\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202108\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202108\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202108\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202108\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryUnitSizesError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202108\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202108\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202108\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202108\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202108\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202108\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202108\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202108\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202108\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202108\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202108\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202108\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202108\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202108\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202108\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202108\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202108\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202108\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202108\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202108\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202108\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202108\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202108\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202108\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202108\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202108\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202108\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202108\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202108\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202108\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202108/AdjustmentService?wsdl')
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
     * calculatedDailyAdOpportunityCounts} field populated
     *
     * @param \Google\AdsApi\AdManager\v202108\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202108\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202108\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202108\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202108\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
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
     * forecast segments
     *
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202108\Statement $filterStatement)
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
     * forecast segments
     *
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202108\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * adjustments
     *
     * @param \Google\AdsApi\AdManager\v202108\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202108\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202108\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202108\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202108\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
