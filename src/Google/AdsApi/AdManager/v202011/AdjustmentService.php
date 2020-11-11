<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202011\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\AdUnitTargeting',
      'AdjustmentError' => 'Google\\AdsApi\\AdManager\\v202011\\AdjustmentError',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202011\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202011\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202011\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202011\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202011\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202011\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202011\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202011\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202011\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202011\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryUnitSizesError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202011\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202011\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202011\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202011\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202011\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202011\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202011\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202011\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202011\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202011\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202011\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202011\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202011\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202011\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/AdjustmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202011\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202011\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202011\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202011\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * adjustments
     *
     * @param \Google\AdsApi\AdManager\v202011\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202011\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202011\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202011\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202011\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202011\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202011\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202011\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
