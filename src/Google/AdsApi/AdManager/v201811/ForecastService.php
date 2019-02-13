<?php

namespace Google\AdsApi\AdManager\v201811;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201811\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201811\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201811\\AdUnitCodeError',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v201811\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201811\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201811\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201811\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201811\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceExtensionError',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201811\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v201811\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v201811\\AvailabilityForecastOptions',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201811\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201811\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201811\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201811\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201811\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201811\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201811\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201811\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v201811\\ContendingLineItem',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201811\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201811\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201811\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201811\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201811\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201811\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201811\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201811\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201811\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201811\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201811\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201811\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v201811\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v201811\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201811\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201811\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201811\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201811\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201811\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201811\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201811\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v201811\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v201811\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v201811\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v201811\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201811\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201811\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201811\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201811\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v201811\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201811\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201811\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201811\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201811\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201811\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201811\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201811\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemCreativeAssociationError',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201811\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201811\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201811\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201811\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201811\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201811\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201811\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201811\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201811\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201811\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201811\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201811\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201811\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201811\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201811\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201811\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201811\\PremiumRateValue',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201811\\ProgrammaticError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201811\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201811\\ProposalLineItem',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201811\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201811\\ProposalLineItemPremium',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v201811\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201811\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201811\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201811\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201811\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201811\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201811\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201811\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201811\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201811\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201811\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201811\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201811\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201811\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201811\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201811\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201811\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201811\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v201811\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201811\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201811\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201811\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201811\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201811\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201811\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201811\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201811\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201811\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201811\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v201811\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201811/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201811\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v201811\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201811\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v201811\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v201811\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v201811\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201811\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v201811\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v201811\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v201811\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201811\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v201811\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v201811\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201811\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201811\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v201811\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
