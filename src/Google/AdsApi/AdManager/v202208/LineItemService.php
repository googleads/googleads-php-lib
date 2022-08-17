<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202208\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202208\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202208\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202208\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202208\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202208\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202208\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202208\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202208\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202208\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202208\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202208\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202208\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202208\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202208\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202208\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202208\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202208\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202208\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202208\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202208\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202208\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202208\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202208\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202208\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202208\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202208\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202208\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202208\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202208\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202208\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202208\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202208\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202208\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202208\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202208\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202208\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202208\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202208\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202208\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202208\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202208\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202208\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202208\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202208\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202208\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202208\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202208\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202208\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202208\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202208\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202208\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202208\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202208\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202208\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202208\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202208\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202208\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202208\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202208\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202208\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202208\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202208\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202208\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202208\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202208\\TimeZoneError',
      'TranscodingError' => 'Google\\AdsApi\\AdManager\\v202208\\TranscodingError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202208\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202208\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202208\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202208\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202208\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202208\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202208\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202208\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202208\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202208/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202208\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202208\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function createLineItems(array $lineItems)
    {
      return $this->__soapCall('createLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

    /**
     * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
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
     * a set of line items.
     *
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202208\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202208\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202208\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202208\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202208\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202208\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
