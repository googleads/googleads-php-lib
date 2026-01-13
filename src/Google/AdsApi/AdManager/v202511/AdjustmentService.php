<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202511\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202511\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202511\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202511\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202511\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202511\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202511\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUnitSizesError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202511\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202511\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202511\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202511\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202511\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202511\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202511\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202511\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202511\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202511\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202511\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/AdjustmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202511\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202511\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202511\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202511\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202511\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
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
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202511\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202511\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202511\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202511\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
