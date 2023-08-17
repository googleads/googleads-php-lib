<?php

namespace Google\AdsApi\AdManager\v202302;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202302\\ObjectValue',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202302\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202302\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202302\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202302\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202302\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202302\\AppliedLabel',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202302\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202302\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202302\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202302\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202302\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202302\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202302\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202302\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202302\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202302\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202302\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202302\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202302\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202302\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202302\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202302\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202302\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202302\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202302\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202302\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202302\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202302\\Date',
      'DateError' => 'Google\\AdsApi\\AdManager\\v202302\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdManager\\v202302\\DateRange',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202302\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202302\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202302\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202302\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202302\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202302\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202302\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202302\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202302\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202302\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202302\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202302\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202302\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202302\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202302\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202302\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202302\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202302\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202302\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202302\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202302\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v202302\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202302\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202302\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202302\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202302\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202302\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryUnitError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202302\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202302\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202302\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202302\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202302\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202302\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202302\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202302\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202302\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202302\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202302\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202302\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202302\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202302\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202302\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202302\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202302\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202302\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202302\\ProposalLineItem',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202302\\ProposalLineItemMakegoodInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202302\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202302\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202302\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202302\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202302\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202302\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202302\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202302\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202302\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202302\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202302\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202302\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202302\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202302\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202302\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202302\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202302\\StringLengthError',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202302\\TargetedSize',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202302\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202302\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202302\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202302\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202302\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202302\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202302\\TimeOfDay',
      'TimeSeries' => 'Google\\AdsApi\\AdManager\\v202302\\TimeSeries',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202302\\TimeZoneError',
      'TrafficDataRequest' => 'Google\\AdsApi\\AdManager\\v202302\\TrafficDataRequest',
      'TrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202302\\TrafficDataResponse',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202302\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202302\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202302\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202302\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202302\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202302\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202302\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202302\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202302\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getDeliveryForecastByIdsResponse',
      'getTrafficDataResponse' => 'Google\\AdsApi\\AdManager\\v202302\\getTrafficDataResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202302/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202302\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202302\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202302\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202302\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202302\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202302\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202302\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202302\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202302\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202302\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202302\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202302\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single delivery
     * simulation. A delivery forecast reports the number of units that will be delivered to each line
     * item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202302\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202302\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202302\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Returns forecasted and historical traffic data for the segment of traffic specified by the
     * provided request.
     *
     * <p>Calling this endpoint programmatically is only available for Ad Manager 360 networks.
     *
     * @param \Google\AdsApi\AdManager\v202302\TrafficDataRequest $trafficDataRequest
     * @return \Google\AdsApi\AdManager\v202302\TrafficDataResponse
     * @throws \Google\AdsApi\AdManager\v202302\ApiException
     */
    public function getTrafficData(\Google\AdsApi\AdManager\v202302\TrafficDataRequest $trafficDataRequest)
    {
      return $this->__soapCall('getTrafficData', array(array('trafficDataRequest' => $trafficDataRequest)))->getRval();
    }

}
