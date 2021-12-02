<?php

namespace Google\AdsApi\AdManager\v202111;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202111\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202111\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202111\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202111\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202111\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202111\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202111\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202111\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202111\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202111\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202111\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202111\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202111\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202111\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202111\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202111\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202111\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202111\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202111\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202111\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202111\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202111\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202111\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202111\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202111\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202111\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202111\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202111\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202111\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202111\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202111\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202111\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202111\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202111\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202111\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202111\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202111\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202111\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202111\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202111\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202111\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202111\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202111\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202111\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202111\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202111\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202111\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202111\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202111\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202111\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202111\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202111\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202111\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202111\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202111\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202111\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202111\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202111\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202111\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202111\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202111\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202111\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202111\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202111\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202111\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202111\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202111\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202111\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202111\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202111\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202111\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202111\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202111\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202111\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202111\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202111\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202111\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202111\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202111\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202111\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202111\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202111/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202111\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202111\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
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
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202111\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202111\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202111\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202111\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202111\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202111\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202111\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202111\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
