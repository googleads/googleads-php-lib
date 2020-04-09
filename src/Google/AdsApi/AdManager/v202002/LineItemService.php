<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202002\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202002\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202002\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202002\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202002\\AuthenticationError',
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
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryData',
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
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202002\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202002\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202002\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202002\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202002\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202002\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202002\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemPage',
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
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202002\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202002\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202002\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202002\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202002\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202002\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202002\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v202002\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202002\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202002\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202002\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202002\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202002\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202002\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202002\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202002\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202002\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202002\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202002\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202002\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202002\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202002\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202002\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202002\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202002\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202002\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getLineItemsByStatementResponse',
      'hasCustomPacingCurveResponse' => 'Google\\AdsApi\\AdManager\\v202002\\hasCustomPacingCurveResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202002\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202002/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202002\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202002\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
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
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns whether a custom pacing curve has been uploaded to Google Cloud Storage for a line
     * item.
     *
     * @param int $lineItemId
     * @return boolean
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function hasCustomPacingCurve($lineItemId)
    {
      return $this->__soapCall('hasCustomPacingCurve', array(array('lineItemId' => $lineItemId)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\AdManager\v202002\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202002\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202002\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
