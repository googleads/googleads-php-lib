<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201611\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201611\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201611\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201611\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201611\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201611\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201611\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201611\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201611\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201611\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201611\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201611\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201611\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201611\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201611\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201611\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201611\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201611\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201611\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201611\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201611\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201611\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201611\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201611\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201611\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201611\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201611\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201611\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201611\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201611\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201611\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201611\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201611\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201611\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201611\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201611\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201611\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201611\\PrecisionError',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201611\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201611\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201611\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201611\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201611\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201611\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201611\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201611\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201611\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201611\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201611\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201611\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201611\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201611\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201611\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201611\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201611\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201611\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201611\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201611\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201611\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201611\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201611\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201611\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201611\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201611\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201611\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201611\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201611\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201611\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201611\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201611\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201611/ProposalLineItemService?wsdl')
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
     * For each proposal line item, the following fields are required:
     * <ul>
     * <li>{@link ProposalLineItem#proposalId}</li>
     * <li>{@link ProposalLineItem#rateCardId}</li>
     * <li>{@link ProposalLineItem#productId}</li>
     * <li>{@link ProposalLineItem#name}</li>
     * <li>{@link ProposalLineItem#startDateTime}</li>
     * <li>{@link ProposalLineItem#endDateTime}</li>
     * </ul>
     *
     * @param \Google\AdsApi\Dfp\v201611\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
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
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItemPage
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201611\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\Dfp\v201611\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201611\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\Dfp\v201611\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\Dfp\v201611\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     *
     * @param \Google\AdsApi\Dfp\v201611\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201611\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201611\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
