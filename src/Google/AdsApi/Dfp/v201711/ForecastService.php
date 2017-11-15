<?php

namespace Google\AdsApi\Dfp\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201711\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201711\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201711\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\Dfp\\v201711\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201711\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201711\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201711\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201711\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\Dfp\\v201711\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\Dfp\\v201711\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201711\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201711\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201711\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201711\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201711\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\Dfp\\v201711\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201711\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201711\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201711\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201711\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201711\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201711\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201711\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\Dfp\\v201711\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201711\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201711\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201711\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201711\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201711\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201711\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201711\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201711\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\Dfp\\v201711\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201711\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201711\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201711\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201711\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201711\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201711\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201711\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201711\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201711\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201711\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201711\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201711\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201711\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201711\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201711\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201711\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201711\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201711\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201711\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\Dfp\\v201711\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201711\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201711\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201711\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201711\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201711\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201711\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201711\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201711\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201711\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201711\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201711\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201711\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201711\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\Dfp\\v201711\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201711\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201711\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201711\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201711\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201711\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201711\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201711\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201711\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201711\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201711\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\Dfp\\v201711\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ForecastService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201711\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\Dfp\v201711\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201711\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\Dfp\v201711\ProspectiveLineItem $lineItem, \Google\AdsApi\Dfp\v201711\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\Dfp\v201711\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201711\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\Dfp\v201711\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\Dfp\v201711\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\Dfp\v201711\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201711\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\Dfp\v201711\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\Dfp\v201711\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201711\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201711\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\Dfp\v201711\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
