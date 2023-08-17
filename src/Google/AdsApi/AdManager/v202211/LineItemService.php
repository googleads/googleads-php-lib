<?php

namespace Google\AdsApi\AdManager\v202211;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202211\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202211\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202211\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202211\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202211\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ArchiveLineItems',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202211\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202211\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202211\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202211\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202211\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202211\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202211\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202211\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202211\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202211\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202211\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202211\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202211\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202211\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202211\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202211\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202211\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202211\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202211\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202211\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202211\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202211\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202211\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202211\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202211\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202211\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202211\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202211\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202211\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202211\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202211\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202211\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202211\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202211\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202211\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202211\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202211\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202211\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202211\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202211\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202211\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202211\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202211\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202211\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202211\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202211\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202211\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202211\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202211\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202211\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202211\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202211\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202211\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202211\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202211\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202211\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202211\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202211\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202211\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202211\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202211\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202211\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202211\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202211\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202211\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202211\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202211\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202211\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202211\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202211\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202211\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202211\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202211\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202211\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202211\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202211\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202211\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202211\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202211\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202211\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202211\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202211\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202211\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202211\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202211\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202211\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202211/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202211\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202211\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
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
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202211\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202211\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202211\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202211\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202211\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202211\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202211\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202211\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
