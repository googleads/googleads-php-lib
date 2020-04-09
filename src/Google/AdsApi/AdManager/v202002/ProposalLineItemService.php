<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202002\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ActualizeProposalLineItems',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202002\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202002\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202002\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202002\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202002\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202002\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202002\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202002\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202002\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202002\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202002\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202002\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202002\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202002\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202002\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202002\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202002\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202002\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202002\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202002\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202002\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202002\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202002\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202002\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202002\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202002\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202002\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202002\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202002\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202002\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202002\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202002\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202002\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202002\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202002\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202002\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202002\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202002\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202002\\PreferredDealError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202002\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202002\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202002\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202002\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202002\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202002\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202002\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202002\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202002\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202002\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202002\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202002\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202002\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202002\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202002\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202002\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202002\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202002\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202002\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202002\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202002\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202002\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202002\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202002\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202002\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202002\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202002\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202002\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202002\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202002\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202002\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202002\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202002/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202002\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
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
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202002\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202002\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202002\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202002\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202002\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202002\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202002\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
