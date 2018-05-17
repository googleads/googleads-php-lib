<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201805\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201805\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201805\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201805\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201805\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201805\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201805\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201805\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201805\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201805\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201805\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201805\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201805\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201805\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201805\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201805\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201805\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201805\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201805\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201805\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201805\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/LineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201805\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\LineItemPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201805\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201805\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201805\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
