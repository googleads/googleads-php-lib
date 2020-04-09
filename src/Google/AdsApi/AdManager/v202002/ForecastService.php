<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ForecastService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202002\\ObjectValue',
      'AdRuleSlotError' => 'Google\\AdsApi\\AdManager\\v202002\\AdRuleSlotError',
      'AdUnitCodeError' => 'Google\\AdsApi\\AdManager\\v202002\\AdUnitCodeError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\AdUnitTargeting',
      'AlternativeUnitTypeForecast' => 'Google\\AdsApi\\AdManager\\v202002\\AlternativeUnitTypeForecast',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202002\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202002\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202002\\AppliedLabel',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202002\\AuthenticationError',
      'AvailabilityForecast' => 'Google\\AdsApi\\AdManager\\v202002\\AvailabilityForecast',
      'AvailabilityForecastOptions' => 'Google\\AdsApi\\AdManager\\v202002\\AvailabilityForecastOptions',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202002\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202002\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202002\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202002\\CompanyCreditStatusError',
      'ContendingLineItem' => 'Google\\AdsApi\\AdManager\\v202002\\ContendingLineItem',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202002\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202002\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202002\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202002\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202002\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202002\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202002\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202002\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202002\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryData',
      'BreakdownForecast' => 'Google\\AdsApi\\AdManager\\v202002\\BreakdownForecast',
      'DeliveryForecastOptions' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryForecastOptions',
      'DeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryForecast',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202002\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202002\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202002\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202002\\FieldPathElement',
      'ForecastBreakdown' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastBreakdown',
      'ForecastBreakdownEntry' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastBreakdownEntry',
      'ForecastBreakdownOptions' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastBreakdownOptions',
      'ForecastBreakdownTarget' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastBreakdownTarget',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202002\\Goal',
      'GrpDemographicBreakdown' => 'Google\\AdsApi\\AdManager\\v202002\\GrpDemographicBreakdown',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202002\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202002\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202002\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202002\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202002\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargetingError',
      'InventoryUnitError' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryUnitError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LabelEntityAssociationError',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemDealInfoDto',
      'LineItemDeliveryForecast' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemDeliveryForecast',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202002\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemOperationError',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202002\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202002\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202002\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202002\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202002\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202002\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202002\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202002\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202002\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202002\\ProgrammaticError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItem',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemMarketplaceInfo',
      'ProspectiveLineItem' => 'Google\\AdsApi\\AdManager\\v202002\\ProspectiveLineItem',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202002\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202002\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202002\\RegExError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202002\\ReservationDetailsError',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202002\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v202002\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202002\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202002\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapResponseHeader',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202002\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202002\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202002\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202002\\StringLengthError',
      'TargetingCriteriaBreakdown' => 'Google\\AdsApi\\AdManager\\v202002\\TargetingCriteriaBreakdown',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202002\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202002\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202002\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202002\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202002\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202002\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202002\\TypeError',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202002\\UniqueError',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202002\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTarget',
      'getAvailabilityForecastResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getAvailabilityForecastResponse',
      'getAvailabilityForecastByIdResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getAvailabilityForecastByIdResponse',
      'getDeliveryForecastResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getDeliveryForecastResponse',
      'getDeliveryForecastByIdsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getDeliveryForecastByIdsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202002/ForecastService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202002\ProspectiveLineItem $lineItem
     * @param \Google\AdsApi\AdManager\v202002\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202002\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getAvailabilityForecast(\Google\AdsApi\AdManager\v202002\ProspectiveLineItem $lineItem, \Google\AdsApi\AdManager\v202002\AvailabilityForecastOptions $forecastOptions)
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
     * @param \Google\AdsApi\AdManager\v202002\AvailabilityForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202002\AvailabilityForecast
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getAvailabilityForecastById($lineItemId, \Google\AdsApi\AdManager\v202002\AvailabilityForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getAvailabilityForecastById', array(array('lineItemId' => $lineItemId, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of {@link ProspectiveLineItem} objects in a single
     * delivery simulation with line items potentially contending with each other. A delivery forecast
     * reports the number of units that will be delivered to each line item given the line item goals
     * and contentions from other line items.
     *
     * @param \Google\AdsApi\AdManager\v202002\ProspectiveLineItem[] $lineItems
     * @param \Google\AdsApi\AdManager\v202002\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202002\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getDeliveryForecast(array $lineItems, \Google\AdsApi\AdManager\v202002\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecast', array(array('lineItems' => $lineItems, 'forecastOptions' => $forecastOptions)))->getRval();
    }

    /**
     * Gets the delivery forecast for a list of existing {@link LineItem} objects in a single
     * delivery simulation. A delivery forecast reports the number of units that will be delivered
     * to each line item given the line item goals and contentions from other line items.
     *
     * @param long[] $lineItemIds
     * @param \Google\AdsApi\AdManager\v202002\DeliveryForecastOptions $forecastOptions
     * @return \Google\AdsApi\AdManager\v202002\DeliveryForecast
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getDeliveryForecastByIds(array $lineItemIds, \Google\AdsApi\AdManager\v202002\DeliveryForecastOptions $forecastOptions)
    {
      return $this->__soapCall('getDeliveryForecastByIds', array(array('lineItemIds' => $lineItemIds, 'forecastOptions' => $forecastOptions)))->getRval();
    }

}
