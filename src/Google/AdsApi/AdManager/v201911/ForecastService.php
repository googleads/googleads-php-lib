<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201911\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v201911\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201911\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v201911\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v201911\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201911\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201911\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v201911\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201911\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201911\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201911\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v201911\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201911\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201911\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201911\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v201911\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201911\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201911\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201911\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201911\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201911\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201911\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201911\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201911\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201911\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201911\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItem',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemMarketplaceInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v201911\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201911\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201911\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201911\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201911\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v201911\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201911\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201911\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201911\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201911\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201911\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201911\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v201911\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201911\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v201911\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v201911\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v201911\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201911\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v201911\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v201911\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v201911\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201911\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v201911\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v201911\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201911\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v201911\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
