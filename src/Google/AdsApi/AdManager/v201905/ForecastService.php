<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v201905\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitCodeError',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v201905\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceExtensionError',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v201905\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v201905\\AvailabilityForecastOptions',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201905\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201905\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v201905\\ContendingLineItem',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201905\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201905\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201905\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201905\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201905\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v201905\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201905\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v201905\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201905\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201905\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201905\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201905\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201905\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201905\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201905\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201905\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementPremiumFeature',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRateValue',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201905\\ProgrammaticError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItem',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemPremium',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v201905\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201905\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201905\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201905\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201905\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v201905\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201905\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201905\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201905\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201905\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201905\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UnknownPremiumFeature',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v201905\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201905\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v201905\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v201905\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v201905\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201905\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v201905\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v201905\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v201905\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201905\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v201905\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v201905\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v201905\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v201905\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
