<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202508\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202508\\AppliedLabel',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202508\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202508\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202508\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202508\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202508\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202508\\ContendingLineItem',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202508\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202508\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202508\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202508\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202508\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202508\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202508\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202508\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202508\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202508\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202508\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202508\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202508\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202508\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202508\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202508\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202508\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202508\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202508\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202508\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202508\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202508\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202508\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemMakegoodInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202508\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202508\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202508\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202508\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202508\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202508\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202508\\TargetedSize',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202508\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202508\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202508\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202508\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202508\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202508\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202508\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202508\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202508\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202508\\TrafficDataResponse',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202508\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202508\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202508\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202508\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202508\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202508\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202508\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202508\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202508\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202508\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202508\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202508\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202508\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202508\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202508\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single delivery
     * simulation. A delivery forecast reports the number of units that will be delivered to each line
     * item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202508\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202508\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202508\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Returns forecasted and historical traffic data for the segment of traffic specified by the
     * provided request.
     *
     * <p>Calling this endpoint programmatically is only available for Ad Manager 360 networks.
     *
     * @param \Google\AdsApi\AdManager\v202508\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202508\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202508\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
