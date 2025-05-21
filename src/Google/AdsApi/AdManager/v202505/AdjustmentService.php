<?php

namespace Google\AdsApi\AdManager\v202505;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202505\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202505\\ActivateForecastAdjustments',
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
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202505\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202505\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202505\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202505\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202505\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202505\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202505\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202505\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202505\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202505\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202505\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202505\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202505\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202505\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202505\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUnitSizesError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202505\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202505\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202505\\NullError',
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
      'Technology' => 'Google\\AdsApi\\AdManager\\v202505\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202505\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202505\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202505\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202505\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202505\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202505\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202505\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202505\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202505\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202505\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202505\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202505\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202505\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202505\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202505\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202505/AdjustmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202505\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202505\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202505\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202505\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202505\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202505\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202505\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202505\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202505\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202505\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202505\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202505\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202505\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202505\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
