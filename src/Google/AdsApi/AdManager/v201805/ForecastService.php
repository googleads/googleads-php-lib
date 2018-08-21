<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201805\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201805\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201805\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v201805\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201805\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201805\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201805\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v201805\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v201805\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201805\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201805\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201805\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v201805\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201805\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201805\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201805\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201805\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v201805\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201805\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201805\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201805\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201805\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201805\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v201805\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201805\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201805\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201805\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201805\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201805\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201805\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201805\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201805\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201805\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201805\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201805\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201805\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v201805\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201805\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201805\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201805\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201805\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201805\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201805\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201805\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201805\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201805\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201805\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201805\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201805\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v201805\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201805\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201805\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201805\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201805\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201805\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201805\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201805\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201805\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v201805\\getDeliveryForecastByIdsResponse',
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
     * @param \Google\AdsApi\AdManager\v201805\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v201805\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201805\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v201805\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v201805\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v201805\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201805\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v201805\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v201805\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v201805\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201805\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v201805\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v201805\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201805\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201805\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v201805\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
