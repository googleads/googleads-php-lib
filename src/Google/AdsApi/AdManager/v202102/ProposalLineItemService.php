<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202102\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\ActualizeProposalLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202102\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202102\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202102\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202102\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202102\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202102\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202102\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202102\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202102\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202102\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202102\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202102\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202102\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202102\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202102\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202102\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202102\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202102\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202102\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202102\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202102\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202102\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202102\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202102\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202102\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202102\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202102\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202102\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202102\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202102\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202102\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202102\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202102\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202102\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202102\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202102\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202102\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202102\\PreferredDealError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202102\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202102\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202102\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202102\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202102\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202102\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202102\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202102\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202102\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202102\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202102\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202102\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202102\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202102\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202102\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202102\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202102\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202102\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202102\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202102\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202102\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202102\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202102\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202102\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202102\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202102\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202102/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
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
     * <td>
     * {@code useThirdPartyAdServerFromProposal}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#useThirdPartyAdServerFromProposal}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code thirdPartyAdServerId}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code customThirdPartyAdServerName}
     * <div class="constraint">
     * Only applicable for non-programmatic proposal line items using sales management
     * </div>
     * </td>
     * <td>{@link ProposalLineItem#customThirdPartyAdServerName}</td>
     * </tr>
     * <tr>
     * <td>{@code isProgrammatic}</td>
     * <td>{@link ProposalLineItem#isProgrammatic}</td>
     * </tr>
     * </table>
     *
     * a set of proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202102\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202102\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202102\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
