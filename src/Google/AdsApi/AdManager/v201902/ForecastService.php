<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201902\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitCodeError',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v201902\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201902\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceExtensionError',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v201902\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v201902\\AvailabilityForecastOptions',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201902\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201902\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v201902\\ContendingLineItem',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201902\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201902\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201902\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201902\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201902\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v201902\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201902\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v201902\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201902\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201902\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201902\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201902\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201902\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201902\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201902\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201902\\PremiumRateValue',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201902\\ProgrammaticError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItem',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemPremium',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v201902\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201902\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201902\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201902\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201902\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201902\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v201902\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201902\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201902\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201902\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201902\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201902\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v201902\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201902\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v201902\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v201902\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v201902\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201902\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v201902\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v201902\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v201902\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201902\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v201902\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v201902\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201902\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v201902\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
