<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201708\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\Dfp\\v201708\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\Dfp\\v201708\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\Dfp\\v201708\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201708\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201708\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\Dfp\\v201708\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201708\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201708\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201708\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201708\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201708\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\Dfp\\v201708\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201708\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201708\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201708\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201708\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201708\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201708\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201708\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\Dfp\\v201708\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201708\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201708\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201708\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\Dfp\\v201708\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201708\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201708\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201708\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201708\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201708\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/ForecastService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\Dfp\v201708\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201708\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\Dfp\v201708\ProspectiveLineItem $lineItem, \Google\AdsApi\Dfp\v201708\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\Dfp\v201708\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201708\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\Dfp\v201708\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\Dfp\v201708\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\Dfp\v201708\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201708\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\Dfp\v201708\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\Dfp\v201708\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201708\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\Dfp\v201708\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
