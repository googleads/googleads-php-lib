<?php

namespace Google\AdsApi\Dfp\v201511;

class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201511\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201511\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201511\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201511\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201511\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201511\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201511\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201511\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201511\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201511\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201511\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201511\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201511\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201511\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201511\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201511\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201511\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201511\\Location',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201511\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201511\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201511\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201511\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201511\\RangeError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201511\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201511\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201511\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201511\\Stats',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201511\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201511\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201511\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201511\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201511\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201511\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTarget',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/LineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201511\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201511\LineItem[]
     */
    public function createLineItems(array $lineItems)
    {
      return $this->__soapCall('createLineItems', array(array('lineItems' => $lineItems)))->rval;
    }

    /**
     * Gets a {@link LineItemPage} of {@link LineItem} objects that satisfy the
     * given {@link Statement#query}. The following fields are supported for
     * filtering:
     *
     * <table><tr><th>PQL property</th><th>Entity property</th></tr><tr><td><code>CostType</code></td><td>{@link LineItem#costType}</td></tr><tr><td><code>CreationDateTime</code></td><td>{@link LineItem#creationDateTime}</td></tr><tr><td><code>DeliveryRateType</code></td><td>{@link LineItem#deliveryRateType}</td></tr><tr><td><code>EndDateTime</code></td><td>{@link LineItem#endDateTime}</td></tr><tr><td><code>ExternalId</code></td><td>{@link LineItem#externalId}</td></tr><tr><td><code>Id</code></td><td>{@link LineItem#id}</td></tr><tr><td><code>IsMissingCreatives</code></td><td>{@link LineItem#isMissingCreatives}</td></tr><tr><td><code>IsSetTopBoxEnabled</code></td><td>{@link LineItem#isSetTopBoxEnabled}</td></tr><tr><td><code>LastModifiedDateTime</code></td><td>{@link LineItem#lastModifiedDateTime}</td></tr><tr><td><code>LineItemType</code></td><td>{@link LineItem#lineItemType}</td></tr><tr><td><code>Name</code></td><td>{@link LineItem#name}</td></tr><tr><td><code>OrderId</code></td><td>{@link LineItem#orderId}</td></tr><tr><td><code>StartDateTime</code></td><td>{@link LineItem#startDateTime}</td></tr><tr><td><code>Status</code></td><td>{@link LineItem#status}</td></tr><tr><td><code>Targeting</code></td><td>{@link LineItem#targeting}</td></tr><tr><td><code>UnitsBought</code></td><td>{@link LineItem#unitsBought}</td></tr></table>
     * a set of line items.
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\LineItemPage
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201511\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201511\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201511\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201511\LineItem[]
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->rval;
    }

}
