<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201802\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201802\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201802\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201802\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201802\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201802\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201802\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201802\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201802\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201802\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201802\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201802\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201802\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201802\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201802\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201802\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201802\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\AdManager\\v201802\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\AdManager\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201802\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201802\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201802\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201802\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v201802\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v201802\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201802\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201802\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201802\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201802\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201802\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v201802\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v201802\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\AdManager\\v201802\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201802\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201802\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v201802\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201802\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201802\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201802\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201802\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201802\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201802\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201802\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201802\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v201802\\PreferredDealError',
      'PremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\AdManager\\v201802\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201802\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201802\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201802\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201802\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v201802\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201802\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201802\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201802\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201802\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201802\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201802\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201802\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201802\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201802\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201802\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201802\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201802\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201802\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\AdManager\\v201802\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201802\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v201802\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201802\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201802\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201802\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v201802\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v201802\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201802/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201802\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201802\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
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
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v201802\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v201802\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201802\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v201802\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v201802\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v201802\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v201802\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
