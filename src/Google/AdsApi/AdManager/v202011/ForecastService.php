<?php

namespace Google\AdsApi\AdManager\v202011;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202011\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202011\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202011\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202011\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202011\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202011\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202011\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202011\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202011\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202011\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202011\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202011\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202011\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202011\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202011\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202011\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202011\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202011\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202011\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202011\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202011\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202011\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202011\\Date',
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
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202011\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202011\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202011\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202011\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202011\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202011\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202011\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202011\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202011\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202011\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202011\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202011\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202011\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v202011\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202011\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202011\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202011\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202011\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202011\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202011\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202011\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202011\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202011\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202011\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202011\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202011\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202011\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202011\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202011\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202011\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202011\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202011\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202011\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202011\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202011\\ProposalLineItemMarketplaceInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202011\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202011\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202011\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202011\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202011\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202011\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202011\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202011\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202011\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202011\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202011\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202011\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202011\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202011\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202011\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202011\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202011\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202011\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202011\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202011\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202011\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202011\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202011\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202011\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202011\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202011\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202011\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202011\\TrafficDataResponse',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202011\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202011\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202011\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202011\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202011\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202011/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202011\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202011\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202011\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202011\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202011\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202011\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202011\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202011\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202011\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202011\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202011\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202011\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202011\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202011\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202011\DeliveryForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202011\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202011\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202011\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202011\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
