<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201911\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\ActualizeProposalLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201911\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201911\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201911\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201911\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201911\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201911\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201911\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201911\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201911\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201911\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201911\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201911\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201911\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201911\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201911\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201911\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201911\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201911\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201911\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201911\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201911\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201911\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201911\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201911\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201911\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201911\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201911\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201911\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201911\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201911\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201911\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201911\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201911\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201911\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201911\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201911\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201911\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201911\\PreferredDealError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201911\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201911\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201911\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201911\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201911\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201911\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201911\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201911\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201911\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201911\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201911\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201911\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201911\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201911\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201911\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201911\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201911\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201911\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201911\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201911\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201911\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201911\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201911\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201911\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201911\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201911\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201911\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201911\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201911\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201911\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201911\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201911\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201911/ProposalLineItemService?wsdl')
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
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201911\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
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
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v201911\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v201911\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201911\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v201911\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v201911\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201911\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201911\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201911\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
