<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201902\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201902\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201902\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201902\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201902\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201902\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201902\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201902\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201902\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201902\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201902\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201902\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201902\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201902\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201902\\PreferredDealError',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201902\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201902\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201902\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201902\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201902\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201902\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201902\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201902\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201902\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201902\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201902\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201902\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201902\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
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
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v201902\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v201902\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201902\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201902\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
