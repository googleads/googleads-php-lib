<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202202\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202202\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202202\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202202\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202202\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202202\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202202\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202202\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202202\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202202\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202202\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202202\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202202\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202202\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202202\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202202\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202202\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202202\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202202\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202202\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202202\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202202\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202202\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202202\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202202\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202202\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202202\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202202\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202202\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202202\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202202\\GrpSettingsError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202202\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202202\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202202\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202202\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202202\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202202\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202202\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202202\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202202\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202202\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202202\\PreferredDealError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202202\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202202\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202202\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202202\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202202\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202202\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202202\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202202\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202202\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202202\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202202\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202202\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202202\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202202\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202202\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202202\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202202\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202202\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202202\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202202\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202202\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202202\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202202\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202202\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202202\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202202\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202202\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202202\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202202\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202202\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202202\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202202\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202202\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202202/ProposalLineItemService?wsdl')
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
     * Creates makegood proposal line items given the specifications provided.
     *
     * @param \Google\AdsApi\AdManager\v202202\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202202\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202202\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function createProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('createProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

    /**
     * Gets a {@link ProposalLineItemPage} of {@link ProposalLineItem} objects
     * that satisfy the given {@link Statement#query}.  The following fields are supported for
     * filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th> <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link ProposalLineItem#id}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link ProposalLineItem#name}</td>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link ProposalLineItem#proposalId}</td>
     * </tr>
     * <tr>
     * <td>{@code startDateTime}</td>
     * <td>{@link ProposalLineItem#startDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code endDateTime}</td>
     * <td>{@link ProposalLineItem#endDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link ProposalLineItem#isArchived}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link ProposalLineItem#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code isProgrammatic}</td>
     * <td>{@link ProposalLineItem#isProgrammatic}</td>
     * </tr>
     * </table>
     *
     * a set of proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202202\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202202\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202202\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202202\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202202\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202202\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202202\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202202\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
