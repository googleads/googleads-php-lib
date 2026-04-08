<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202602\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202602\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202602\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202602\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202602\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUnitSizesError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202602\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202602\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202602\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/AdjustmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202602\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202602\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202602\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202602\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202602\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202602\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202602\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
