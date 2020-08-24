<?php

namespace Google\AdsApi\AdManager\v202008;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202008\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202008\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202008\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202008\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202008\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202008\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202008\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202008\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202008\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202008\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202008\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202008\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202008\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202008\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202008\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202008\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202008\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202008\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202008\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202008\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202008\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202008\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202008\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202008\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202008\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202008\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202008\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202008\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202008\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202008\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202008\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202008\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202008\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202008\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202008\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202008\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202008\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202008\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202008\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202008\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202008\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202008\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202008\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202008\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202008\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202008\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202008\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202008\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202008\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202008\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202008\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202008\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202008\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202008\\ServerError',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202008\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202008\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202008\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202008\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202008\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202008\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202008\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202008\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202008\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202008\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202008\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202008\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202008\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202008\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202008\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202008\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202008\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202008\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202008\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202008\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202008\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202008\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202008\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202008\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202008\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202008\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202008/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202008\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202008\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
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
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202008\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202008\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202008\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202008\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202008\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202008\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202008\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202008\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
