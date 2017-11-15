<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201708\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201708\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201708\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201708\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201708\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201708\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201708\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201708\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201708\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201708\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201708\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201708\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201708\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201708\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201708\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201708\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201708\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201708\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201708\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201708\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201708\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201708\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201708\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201708\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201708\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201708\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201708\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201708\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201708\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/LineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201708\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\LineItemPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201708\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201708\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201708\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
