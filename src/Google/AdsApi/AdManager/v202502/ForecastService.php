<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202502\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202502\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202502\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202502\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202502\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202502\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202502\\AppliedLabel',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202502\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202502\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202502\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202502\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202502\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202502\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202502\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202502\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202502\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202502\\ContendingLineItem',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202502\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202502\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202502\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202502\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202502\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202502\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202502\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202502\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202502\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202502\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202502\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202502\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202502\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202502\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202502\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202502\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202502\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202502\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202502\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202502\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202502\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202502\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202502\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202502\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202502\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202502\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202502\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202502\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202502\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202502\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202502\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202502\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202502\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202502\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202502\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202502\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202502\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202502\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202502\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202502\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202502\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202502\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202502\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202502\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202502\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202502\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202502\\ProposalLineItemMakegoodInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202502\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202502\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202502\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202502\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202502\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202502\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202502\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202502\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202502\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202502\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202502\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202502\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202502\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202502\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202502\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202502\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202502\\StringLengthError',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202502\\TargetedSize',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202502\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202502\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202502\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202502\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202502\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202502\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202502\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202502\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202502\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202502\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202502\\TrafficDataResponse',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202502\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202502\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202502\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202502\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202502\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202502\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202502/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202502\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202502\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202502\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202502\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202502\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202502\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202502\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202502\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202502\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202502\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202502\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single delivery
     * simulation. A delivery forecast reports the number of units that will be delivered to each line
     * item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202502\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202502\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202502\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Returns forecasted and historical traffic data for the segment of traffic specified by the
     * provided request.
     *
     * <p>Calling this endpoint programmatically is only available for Ad Manager 360 networks.
     *
     * @param \Google\AdsApi\AdManager\v202502\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202502\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202502\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202502\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
