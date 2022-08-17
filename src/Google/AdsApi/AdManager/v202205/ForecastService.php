<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202205\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202205\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202205\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202205\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202205\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202205\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202205\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202205\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202205\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202205\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202205\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202205\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202205\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202205\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202205\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202205\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202205\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202205\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202205\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202205\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v202205\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202205\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202205\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202205\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202205\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202205\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202205\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202205\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202205\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalLineItemMakegoodInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202205\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202205\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202205\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202205\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202205\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202205\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202205\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202205\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202205\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202205\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202205\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202205\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202205\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202205\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202205\\TrafficDataResponse',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202205\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/ForecastService?wsdl')
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
     * Gets the availability forecast for a {@link ProspectiveLineItem}. An availability forecast
     * reports the maximum number of available units that the line item can book, and the total number
     * of units matching the line item's targeting.
     *
     * @param \Google\AdsApi\AdManager\v202205\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202205\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202205\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202205\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202205\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecast', array(array('lineItem' => $lineItem, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets an {@link AvailabilityForecast} for an existing {@link LineItem} object. An availability
     * forecast reports the maximum number of available units that the line item can be booked with,
     * and also the total number of units matching the line item's targeting.
     *
     * <p>Only line items having type {@link LineItemType#SPONSORSHIP} or {@link
     * LineItemType#STANDARD} are valid. Other types will result in {@link
     * ReservationDetailsError.Reason#LINE_ITEM_TYPE_NOT_ALLOWED}.
     *
     * @param int $lineItemId
     * @param \Google\AdsApi\AdManager\v202205\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202205\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202205\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202205\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202205\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202205\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202205\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202205\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202205\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202205\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Returns forecasted and historical traffic data for the segment of traffic specified by the
     * provided request.
     *
     * <p>Calling this endpoint programmatically is only available for Ad Manager 360 networks.
     *
     * be returned
     * traffic
     *
     * @param \Google\AdsApi\AdManager\v202205\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202205\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202205\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
