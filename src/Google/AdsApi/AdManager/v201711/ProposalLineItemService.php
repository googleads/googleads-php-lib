<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201711\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201711\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201711\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201711\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201711\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201711\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201711\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201711\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201711\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201711\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201711\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201711\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201711\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201711\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201711\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201711\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201711\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201711\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201711\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201711\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201711\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201711\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201711\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201711\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201711\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201711\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201711\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201711\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201711\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201711\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201711\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201711\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201711\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201711\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201711\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201711\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201711\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201711\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201711\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201711\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201711\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201711\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201711\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201711\\PrecisionError',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201711\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201711\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201711\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201711\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201711\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201711\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201711\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201711\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201711\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201711\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201711\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201711\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201711\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201711\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201711\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201711\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201711\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201711\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201711\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201711\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201711\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201711\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201711\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201711\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201711\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201711\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201711\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201711\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201711\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201711\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201711\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201711\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201711\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201711\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201711/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201711\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201711\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
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
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v201711\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v201711\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201711\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v201711\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v201711\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201711\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201711\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201711\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
