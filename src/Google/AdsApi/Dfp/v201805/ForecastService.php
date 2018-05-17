<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201805\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\Dfp\\v201805\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201805\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\Dfp\\v201805\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\Dfp\\v201805\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201805\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\Dfp\\v201805\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201805\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201805\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201805\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201805\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\Dfp\\v201805\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201805\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201805\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201805\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201805\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201805\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\Dfp\\v201805\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201805\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201805\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201805\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\Dfp\\v201805\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201805\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201805\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ForecastService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\Dfp\v201805\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201805\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\Dfp\v201805\ProspectiveLineItem $lineItem, \Google\AdsApi\Dfp\v201805\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\Dfp\v201805\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201805\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\Dfp\v201805\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\Dfp\v201805\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\Dfp\v201805\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201805\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\Dfp\v201805\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\Dfp\v201805\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201805\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\Dfp\v201805\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
