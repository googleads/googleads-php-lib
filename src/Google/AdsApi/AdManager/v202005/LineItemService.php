<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202005\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202005\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202005\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202005\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202005\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202005\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202005\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202005\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202005\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\BuyerUserListTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202005\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v202005\\CompanyCreditStatusError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v202005\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202005\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v202005\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomFieldValueError',
      'CustomPacingCurve' => 'Google\\AdsApi\\AdManager\\v202005\\CustomPacingCurve',
      'CustomPacingGoal' => 'Google\\AdsApi\\AdManager\\v202005\\CustomPacingGoal',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202005\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202005\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202005\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202005\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202005\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202005\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202005\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202005\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202005\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202005\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202005\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202005\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202005\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202005\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202005\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202005\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202005\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v202005\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202005\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202005\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v202005\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v202005\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v202005\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202005\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202005\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202005\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202005\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202005\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v202005\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202005\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202005\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202005\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202005\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202005\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202005\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v202005\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v202005\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202005\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202005\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202005\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v202005\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v202005\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202005\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202005\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202005\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202005\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202005\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v202005\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202005\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202005\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202005\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202005\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202005\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202005\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202005\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202005\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202005\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202005\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202005\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v202005\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202005\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202005\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202005\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202005\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202005\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202005\\getLineItemsByStatementResponse',
      'hasCustomPacingCurveResponse' => 'Google\\AdsApi\\AdManager\\v202005\\hasCustomPacingCurveResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202005\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202005\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202005/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202005\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202005\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
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
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\LineItemPage
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns whether a custom pacing curve has been uploaded to Google Cloud Storage for a line
     * item.
     *
     * @param int $lineItemId
     * @return boolean
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
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
     * @param \Google\AdsApi\AdManager\v202005\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v202005\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202005\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v202005\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v202005\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202005\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v202005\LineItem[]
     * @throws \Google\AdsApi\AdManager\v202005\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
