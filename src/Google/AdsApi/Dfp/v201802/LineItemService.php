<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'ActivateLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ActivateLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201802\\AppliedLabel',
      'ArchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ArchiveLineItems',
      'AudienceExtensionError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceExtensionError',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\BaseCustomFieldValue',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201802\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserTargeting',
      'ClickTrackingLineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\ClickTrackingLineItemError',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'CompanyCreditStatusError' => 'Google\\AdsApi\\Dfp\\v201802\\CompanyCreditStatusError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentTargeting',
      'CreativeError' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeError',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201802\\CreativePlaceholder',
      'CreativeTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\CreativeTargeting',
      'CrossSellError' => 'Google\\AdsApi\\Dfp\\v201802\\CrossSellError',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201802\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargetingError',
      'DeleteLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\DeleteLineItems',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201802\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201802\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\Dfp\\v201802\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\Dfp\\v201802\\GrpSettingsError',
      'ImageError' => 'Google\\AdsApi\\Dfp\\v201802\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201802\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LabelEntityAssociationError',
      'LineItemAction' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemAction',
      'LineItemActivityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemActivityAssociationError',
      'LineItemActivityAssociation' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemActivityAssociation',
      'LineItemCreativeAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemCreativeAssociationError',
      'LineItem' => 'Google\\AdsApi\\Dfp\\v201802\\LineItem',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemOperationError',
      'LineItemPage' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemPage',
      'LineItemSummary' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemSummary',
      'Location' => 'Google\\AdsApi\\Dfp\\v201802\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201802\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersionTargeting',
      'OrderActionError' => 'Google\\AdsApi\\Dfp\\v201802\\OrderActionError',
      'OrderError' => 'Google\\AdsApi\\Dfp\\v201802\\OrderError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PauseLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\PauseLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'ProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201802\\ProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201802\\RangeError',
      'RegExError' => 'Google\\AdsApi\\Dfp\\v201802\\RegExError',
      'ReleaseLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ReleaseLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredNumberError',
      'RequiredSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredSizeError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201802\\ReservationDetailsError',
      'ReserveAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ReserveAndOverbookLineItems',
      'ReserveLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ReserveLineItems',
      'ResumeAndOverbookLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ResumeAndOverbookLineItems',
      'ResumeLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ResumeLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetTopBoxInfo' => 'Google\\AdsApi\\Dfp\\v201802\\SetTopBoxInfo',
      'SetTopBoxLineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\SetTopBoxLineItemError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
      'Stats' => 'Google\\AdsApi\\Dfp\\v201802\\Stats',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201802\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201802\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201802\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201802\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201802\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201802\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201802\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201802\\TypeError',
      'UnarchiveLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\UnarchiveLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201802\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201802\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTarget',
      'createLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createLineItemsResponse',
      'getLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getLineItemsByStatementResponse',
      'performLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\performLineItemActionResponse',
      'updateLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/LineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201802\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201802\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
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
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\LineItemPage
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getLineItemsByStatement(\Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link LineItem} objects that match the given
     * {@link Statement#query}.
     *
     * a set of line items
     *
     * @param \Google\AdsApi\Dfp\v201802\LineItemAction $lineItemAction
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function performLineItemAction(\Google\AdsApi\Dfp\v201802\LineItemAction $lineItemAction, \Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performLineItemAction', array(array('lineItemAction' => $lineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link LineItem} objects.
     *
     * @param \Google\AdsApi\Dfp\v201802\LineItem[] $lineItems
     * @return \Google\AdsApi\Dfp\v201802\LineItem[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateLineItems(array $lineItems)
    {
      return $this->__soapCall('updateLineItems', array(array('lineItems' => $lineItems)))->getRval();
    }

}
