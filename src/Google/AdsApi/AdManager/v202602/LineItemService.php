<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202602\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ArchiveLineItems',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202602\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202602\\CompanyCreditStatusError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202602\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202602\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202602\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202602\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202602\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202602\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202602\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202602\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202602\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202602\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202602\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202602\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202602\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202602\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202602\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202602\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202602\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202602\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202602\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202602\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202602\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202602\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202602\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202602\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202602\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
