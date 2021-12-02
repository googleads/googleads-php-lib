<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202108\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202108\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202108\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202108\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202108\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202108\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202108\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202108\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202108\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202108\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202108\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202108\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202108\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202108\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202108\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202108\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202108\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202108\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202108\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202108\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202108\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202108\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202108\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202108\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202108\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202108\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202108\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202108\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202108\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202108\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202108\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202108\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202108\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202108\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202108\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202108\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202108\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202108\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202108\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202108\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202108\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202108\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202108\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202108\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202108\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202108\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202108\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202108\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202108\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202108\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202108\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202108\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202108\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202108\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202108\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202108\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202108\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202108\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202108\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202108\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202108\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202108\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202108\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202108\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202108\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202108\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202108\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202108\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202108\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202108\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202108\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202108\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202108\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202108\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202108\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202108\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202108\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202108\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202108\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202108\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202108\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202108\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202108\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202108\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202108\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202108\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202108\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202108\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202108\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202108\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202108\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202108\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202108/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202108\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202108\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
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
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202108\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202108\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202108\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202108\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202108\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202108\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202108\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202108\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202108\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
