<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ActivateLineItems',
      'AdProductBookingError' => 'Google\\AdsApi\\AdManager\\v202608\\AdProductBookingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202608\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ArchiveLineItems',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202608\\AssetError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202608\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202608\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202608\\CompanyCreditStatusError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202608\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202608\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202608\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202608\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202608\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202608\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202608\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202608\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202608\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202608\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202608\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202608\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202608\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202608\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202608\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202608\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202608\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202608\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202608\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202608\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202608\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202608\\ProgrammaticError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202608\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202608\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ReleaseLineItems',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202608\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202608\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202608\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202608\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202608\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202608\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202608\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202608\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202608\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202608\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202608\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202608\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/LineItemService?wsdl')
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
     * Creates new {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202608\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202608\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function createLineItems(array $lineItems)
    {
      return $this->__soapCall('createLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

    /**
     * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tbody>
     * <tr>
     * <th>PQL property</th>
     * <th>Entity property</th>
     * </tr>
     * <tr>
     * <td>
     * {@code CostType}
     * </td>
     * <td>
     * {@link LineItem#costType}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code CreationDateTime}
     * </td>
     * <td>
     * {@link LineItem#creationDateTime}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code DeliveryRateType}
     * </td>
     * <td>
     * {@link LineItem#deliveryRateType}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code EndDateTime}
     * </td>
     * <td>
     * {@link LineItem#endDateTime}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code ExternalId}
     * </td>
     * <td>
     * {@link LineItem#externalId}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code Id}
     * </td>
     * <td>
     * {@link LineItem#id}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code IsMissingCreatives}
     * </td>
     * <td>
     * {@link LineItem#isMissingCreatives}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code IsSetTopBoxEnabled}
     * </td>
     * <td>
     * {@link LineItem#isSetTopBoxEnabled}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code LastModifiedDateTime}
     * </td>
     * <td>
     * {@link LineItem#lastModifiedDateTime}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code LineItemType}
     * </td>
     * <td>
     * {@link LineItem#lineItemType}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code Name}
     * </td>
     * <td>
     * {@link LineItem#name}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code OrderId}
     * </td>
     * <td>
     * {@link LineItem#orderId}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code StartDateTime}
     * </td>
     * <td>
     * {@link LineItem#startDateTime}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code Status}
     * </td>
     * <td>
     * {@link LineItem#status}
     * </td>
     * </tr>
     * <tr>
     * <td>
     * {@code UnitsBought}
     * </td>
     * <td>
     * {@link LineItem#unitsBought}
     * </td>
     * </tr>
     * </tbody>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202608\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202608\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202608\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202608\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
