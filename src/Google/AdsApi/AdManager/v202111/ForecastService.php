<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202111\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202111\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202111\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202111\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202111\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202111\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202111\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202111\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202111\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202111\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202111\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202111\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202111\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202111\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202111\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202111\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202111\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202111\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v202111\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202111\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202111\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202111\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202111\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202111\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202111\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202111\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202111\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202111\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202111\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202111\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202111\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202111\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202111\\ProposalLineItemMarketplaceInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202111\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202111\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202111\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202111\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202111\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202111\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202111\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202111\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202111\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202111\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202111\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202111\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202111\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202111\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202111\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202111\\TrafficDataResponse',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202111\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202111\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202111\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202111\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202111\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202111\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202111\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202111\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202111\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202111\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202111\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202111\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202111\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202111\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202111\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202111\DeliveryForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202111\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202111\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202111\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
