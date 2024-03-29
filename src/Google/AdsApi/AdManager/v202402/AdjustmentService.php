<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdjustmentService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202402\\ObjectValue',
      'ActivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202402\\ActivateForecastAdjustments',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202402\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202402\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202402\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202402\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BandwidthGroupTargeting',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202402\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202402\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202402\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\ContentTargeting',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaSet',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceSegmentCriteria',
      'DailyVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202402\\DailyVolumeSettings',
      'Date' => 'Google\\AdsApi\\AdManager\\v202402\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202402\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202402\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202402\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202402\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DayPartTargetingError',
      'DeactivateForecastAdjustments' => 'Google\\AdsApi\\AdManager\\v202402\\DeactivateForecastAdjustments',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceManufacturerTargeting',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202402\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202402\\FieldPathElement',
      'ForecastAdjustmentAction' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastAdjustmentAction',
      'ForecastAdjustment' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastAdjustment',
      'ForecastAdjustmentError' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastAdjustmentError',
      'ForecastAdjustmentPage' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastAdjustmentPage',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GeoTargetingError',
      'HistoricalBasisVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202402\\HistoricalBasisVolumeSettings',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202402\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202402\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUnitError',
      'InventoryUnitSizesError' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUnitSizesError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUrlTargeting',
      'Location' => 'Google\\AdsApi\\AdManager\\v202402\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202402\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceTargeting',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202402\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202402\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202402\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202402\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202402\\PermissionError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202402\\QuotaError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202402\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202402\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202402\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202402\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202402\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202402\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202402\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202402\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202402\\Targeting',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202402\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202402\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202402\\TimeOfDay',
      'TotalVolumeSettings' => 'Google\\AdsApi\\AdManager\\v202402\\TotalVolumeSettings',
      'TrafficForecastSegment' => 'Google\\AdsApi\\AdManager\\v202402\\TrafficForecastSegment',
      'TrafficForecastSegmentError' => 'Google\\AdsApi\\AdManager\\v202402\\TrafficForecastSegmentError',
      'TrafficForecastSegmentPage' => 'Google\\AdsApi\\AdManager\\v202402\\TrafficForecastSegmentPage',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202402\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202402\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202402\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202402\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTarget',
      'calculateDailyAdOpportunityCountsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\calculateDailyAdOpportunityCountsResponse',
      'createForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\createForecastAdjustmentsResponse',
      'createTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\createTrafficForecastSegmentsResponse',
      'getForecastAdjustmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getForecastAdjustmentsByStatementResponse',
      'getTrafficForecastSegmentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getTrafficForecastSegmentsByStatementResponse',
      'performForecastAdjustmentActionResponse' => 'Google\\AdsApi\\AdManager\\v202402\\performForecastAdjustmentActionResponse',
      'updateForecastAdjustmentsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\updateForecastAdjustmentsResponse',
      'updateTrafficForecastSegmentsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\updateTrafficForecastSegmentsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202402/AdjustmentService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202402\ForecastAdjustment $forecastAdjustment
     * @return \Google\AdsApi\AdManager\v202402\ForecastAdjustment
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function calculateDailyAdOpportunityCounts(\Google\AdsApi\AdManager\v202402\ForecastAdjustment $forecastAdjustment)
    {
      return $this->__soapCall('calculateDailyAdOpportunityCounts', array(array('forecastAdjustment' => $forecastAdjustment)))->getRval();
    }

    /**
     * Creates new {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202402\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function createForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('createForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Creates new {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202402\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\ForecastAdjustmentPage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getForecastAdjustmentsByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\TrafficForecastSegmentPage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getTrafficForecastSegmentsByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('getTrafficForecastSegmentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ForecastAdjustment} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202402\ForecastAdjustmentAction $forecastAdjustmentAction
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function performForecastAdjustmentAction(\Google\AdsApi\AdManager\v202402\ForecastAdjustmentAction $forecastAdjustmentAction, \Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('performForecastAdjustmentAction', array(array('forecastAdjustmentAction' => $forecastAdjustmentAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ForecastAdjustment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\ForecastAdjustment[] $forecastAdjustments
     * @return \Google\AdsApi\AdManager\v202402\ForecastAdjustment[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function updateForecastAdjustments(array $forecastAdjustments)
    {
      return $this->__soapCall('updateForecastAdjustments', array(array('forecastAdjustments' => $forecastAdjustments)))->getRval();
    }

    /**
     * Updates the specified {@link TrafficForecastSegment} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\TrafficForecastSegment[] $trafficForecastSegments
     * @return \Google\AdsApi\AdManager\v202402\TrafficForecastSegment[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function updateTrafficForecastSegments(array $trafficForecastSegments)
    {
      return $this->__soapCall('updateTrafficForecastSegments', array(array('trafficForecastSegments' => $trafficForecastSegments)))->getRval();
    }

}
