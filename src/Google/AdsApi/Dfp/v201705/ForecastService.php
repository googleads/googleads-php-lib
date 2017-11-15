<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201705\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201705\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\Dfp\\v201705\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\Dfp\\v201705\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\Dfp\\v201705\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201705\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201705\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\Dfp\\v201705\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201705\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201705\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201705\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201705\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201705\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\Dfp\\v201705\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201705\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201705\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201705\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201705\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201705\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\Dfp\\v201705\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201705\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201705\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201705\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201705\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\Dfp\\v201705\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201705\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201705\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201705\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201705\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201705\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ForecastService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\Dfp\v201705\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201705\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\Dfp\v201705\ProspectiveLineItem $lineItem, \Google\AdsApi\Dfp\v201705\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\Dfp\v201705\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201705\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\Dfp\v201705\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\Dfp\v201705\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\Dfp\v201705\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201705\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\Dfp\v201705\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\Dfp\v201705\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201705\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\Dfp\v201705\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
