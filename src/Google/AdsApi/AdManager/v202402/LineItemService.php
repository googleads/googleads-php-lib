<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202402\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202402\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202402\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202402\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202402\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ArchiveLineItems',
      'AssetError' => 'Google\\AdsApi\\AdManager\\v202402\\AssetError',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202402\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202402\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202402\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202402\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202402\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202402\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202402\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202402\\CrossSellError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202402\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202402\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202402\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202402\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202402\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202402\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202402\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202402\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202402\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202402\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202402\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202402\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202402\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202402\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202402\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202402\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202402\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202402\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202402\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202402\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202402\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202402\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202402\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202402\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202402\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202402\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202402\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202402\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202402\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202402\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202402\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202402\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202402\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202402\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202402\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202402\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202402\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202402\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202402\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202402\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202402\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202402\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202402\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202402\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202402\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202402\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202402\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202402\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202402\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202402\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202402\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202402\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202402\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202402\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202402\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202402\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202402\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202402\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202402\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202402\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202402\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202402\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202402\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202402\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202402\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202402\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202402\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202402\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202402\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202402\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202402\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202402\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202402\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202402/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202402\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202402\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
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
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given {@link Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202402\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202402\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202402\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202402\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202402\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202402\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202402\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202402\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
