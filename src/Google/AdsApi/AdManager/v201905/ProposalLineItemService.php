<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201905\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201905\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201905\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201905\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201905\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201905\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201905\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201905\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201905\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201905\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201905\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201905\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201905\\PreferredDealError',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201905\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201905\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201905\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201905\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201905\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201905\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201905\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201905\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201905\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201905\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v201905\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v201905\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201905\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
