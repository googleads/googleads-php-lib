<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\Dfp\\v201802\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\Dfp\\v201802\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\Dfp\\v201802\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201802\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\Dfp\\v201802\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\Dfp\\v201802\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201802\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201802\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\Dfp\\v201802\\ContendingLineItem',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201802\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201802\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201802\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryData',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201802\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201802\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\Dfp\\v201802\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201802\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201802\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201802\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201802\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201802\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201802\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201802\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201802\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201802\\ProgrammaticError',
      'ProspectiveLineItem' => 'Google\\AdsApi\\Dfp\\v201802\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201802\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201802\\RegExError',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201802\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201802\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201802\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201802\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\Dfp\\v201802\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201802\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201802\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201802\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201802\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201802\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201802\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201802\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201802\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/ForecastService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201802\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\Dfp\v201802\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201802\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\Dfp\v201802\ProspectiveLineItem $lineItem, \Google\AdsApi\Dfp\v201802\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\Dfp\v201802\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201802\AvailabilityForecast
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\Dfp\v201802\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\Dfp\v201802\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\Dfp\v201802\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201802\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\Dfp\v201802\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\Dfp\v201802\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\Dfp\v201802\DeliveryForecast
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\Dfp\v201802\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
