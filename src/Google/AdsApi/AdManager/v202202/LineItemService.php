<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202202\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202202\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202202\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202202\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202202\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202202\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202202\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202202\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202202\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202202\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202202\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202202\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202202\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202202\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202202\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202202\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202202\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202202\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202202\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202202\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202202\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202202\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202202\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202202\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202202\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202202\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202202\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202202\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202202\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202202\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202202\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202202\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202202\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202202\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202202\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202202\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202202\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202202\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202202\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
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
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202202\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202202\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202202\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
