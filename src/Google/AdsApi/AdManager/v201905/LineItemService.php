<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201905\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\AdManager\\v201905\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\AdManager\\v201905\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201905\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\AdManager\\v201905\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201905\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201905\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v201905\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v201905\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\AdManager\\v201905\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201905\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemCreativeAssociationError',
      'LineItemDealInfoDto' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemDealInfoDto',
      'LineItem' => 'Google\\AdsApi\\AdManager\\v201905\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\AdManager\\v201905\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\AdManager\\v201905\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\AdManager\\v201905\\OrderError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201905\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RegExError' => 'Google\\AdsApi\\AdManager\\v201905\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ReleaseLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201905\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\AdManager\\v201905\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'Stats' => 'Google\\AdsApi\\AdManager\\v201905\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201905\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201905\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201905\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201905\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201905\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getLineItemsByStatementResponse',
      'hasCustomPacingCurveResponse' => 'Google\\AdsApi\\AdManager\\v201905\\hasCustomPacingCurveResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/LineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v201905\LineItem[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * <table><tr><th>PQL property</th><th>Entity property</th></tr><tr><td><code>CostType</code></td><td>{@link LineItem#costType}</td></tr><tr><td><code>CreationDateTime</code></td><td>{@link LineItem#creationDateTime}</td></tr><tr><td><code>DeliveryRateType</code></td><td>{@link LineItem#deliveryRateType}</td></tr><tr><td><code>EndDateTime</code></td><td>{@link LineItem#endDateTime}</td></tr><tr><td><code>ExternalId</code></td><td>{@link LineItem#externalId}</td></tr><tr><td><code>Id</code></td><td>{@link LineItem#id}</td></tr><tr><td><code>IsMissingCreatives</code></td><td>{@link LineItem#isMissingCreatives}</td></tr><tr><td><code>IsSetTopBoxEnabled</code></td><td>{@link LineItem#isSetTopBoxEnabled}</td></tr><tr><td><code>LastModifiedDateTime</code></td><td>{@link LineItem#lastModifiedDateTime}</td></tr><tr><td><code>LineItemType</code></td><td>{@link LineItem#lineItemType}</td></tr><tr><td><code>Name</code></td><td>{@link LineItem#name}</td></tr><tr><td><code>OrderId</code></td><td>{@link LineItem#orderId}</td></tr><tr><td><code>StartDateTime</code></td><td>{@link LineItem#startDateTime}</td></tr><tr><td><code>Status</code></td><td>{@link LineItem#status}</td></tr><tr><td><code>Targeting</code></td><td>{@link LineItem#targeting}</td></tr><tr><td><code>UnitsBought</code></td><td>{@link LineItem#unitsBought}</td></tr></table>
     * a set of line items.
     *
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\LineItemPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Returns whether a custom pacing curve has been uploaded to Google Cloud Storage for a line
     * item.
     *
     * @param int $lineItemId
     * @return boolean
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * @param \Google\AdsApi\AdManager\v201905\LineItemAction $lineItemAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\AdManager\v201905\LineItemAction $lineItemAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\LineItem[] $lineItems
     * @return \Google\AdsApi\AdManager\v201905\LineItem[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
