<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201705\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201705\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201705\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201705\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201705\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201705\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201705\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201705\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201705\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201705\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201705\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201705\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201705\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201705\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201705\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201705\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201705\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201705\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201705\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201705\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201705\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201705\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201705\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201705\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201705\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201705\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201705\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201705\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/LineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201705\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\LineItemPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201705\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201705\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201705\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
