<?php

namespace Google\AdsApi\Dfp\v201608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201608\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201608\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201608\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201608\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201608\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201608\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201608\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201608\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201608\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201608\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201608\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201608\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataKeyHierarchyTargeting',
      'ContentMetadataTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\ContentMetadataTargetingError',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201608\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201608\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201608\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201608\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201608\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201608\\DateTime',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201608\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201608\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201608\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201608\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201608\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201608\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201608\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201608\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201608\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201608\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201608\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201608\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201608\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201608\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201608\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201608\\Location',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201608\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201608\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201608\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201608\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201608\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201608\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201608\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201608\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201608\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201608\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201608\\PrecisionError',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201608\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201608\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemError',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemPremium',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201608\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201608\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201608\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201608\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201608\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201608\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201608\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201608\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201608\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201608\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201608\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201608\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201608\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201608\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201608\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201608\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201608\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201608\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201608\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201608\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201608\\VideoPositionTarget',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201608/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201608\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201608\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function createProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('createProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->rval;
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
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\ProposalLineItemPage
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201608\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\Dfp\v201608\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201608\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\Dfp\v201608\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\Dfp\v201608\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     *
     * @param \Google\AdsApi\Dfp\v201608\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201608\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201608\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->rval;
    }

}
