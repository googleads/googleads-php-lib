<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201802\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201802\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201802\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201802\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201802\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201802\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201802\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201802\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201802\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201802\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201802\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201802\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201802\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201802\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201802\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201802\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201802\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201802\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201802\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201802\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201802\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201802\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201802\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201802\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201802\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201802\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201802\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201802\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201802\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201802\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201802\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201802\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201802\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201802\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201802\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201802\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201802\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201802\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\Dfp\\v201802\\PreferredDealError',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201802\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201802\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201802\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201802\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201802\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201802\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201802\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201802\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201802\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201802\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201802\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201802\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201802\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201802\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201802\\StatementError',
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
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201802\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201802\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201802\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201802\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201802\\VideoPositionTarget',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201802\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\Dfp\\v201802\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\Dfp\\v201802\\updateProposalLineItemsResponse',
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
     * @param \Google\AdsApi\Dfp\v201802\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201802\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
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
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\ProposalLineItemPage
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201802\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\Dfp\v201802\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201802\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\Dfp\v201802\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\Dfp\v201802\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     *
     * @param \Google\AdsApi\Dfp\v201802\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201802\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201802\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
