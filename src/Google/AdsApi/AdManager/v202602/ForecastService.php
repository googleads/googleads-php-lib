<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202602\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202602\\AppliedLabel',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202602\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202602\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202602\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202602\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202602\\ContendingLineItem',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202602\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202602\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202602\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202602\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
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
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202602\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202602\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202602\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202602\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202602\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalLineItemMakegoodInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202602\\ProspectiveLineItem',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202602\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202602\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202602\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202602\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202602\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202602\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202602\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202602\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202602\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202602\\TrafficDataResponse',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202602\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202602\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202602\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202602\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202602\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202602\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202602\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202602\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202602\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202602\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202602\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202602\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single delivery
     * simulation. A delivery forecast reports the number of units that will be delivered to each line
     * item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202602\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202602\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202602\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Returns forecasted and historical traffic data for the segment of traffic specified by the
     * provided request.
     *
     * <p>Calling this endpoint programmatically is only available for Ad Manager 360 networks.
     *
     * @param \Google\AdsApi\AdManager\v202602\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202602\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202602\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
