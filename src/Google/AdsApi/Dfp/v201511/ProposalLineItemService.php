<?php

namespace Google\AdsApi\Dfp\v201511;

class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201511\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201511\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201511\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201511\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201511\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201511\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201511\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201511\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201511\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201511\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201511\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201511\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201511\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201511\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201511\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201511\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201511\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201511\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201511\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201511\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201511\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201511\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201511\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201511\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201511\\Location',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201511\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201511\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201511\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201511\\PrecisionError',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201511\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201511\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemError',
      'ProposalLineItemPage' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\Dfp\\v201511\\ProposalLineItemPremium',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201511\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201511\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201511\\ReservationDetailsError',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201511\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201511\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201511\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201511\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201511\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201511\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201511\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201511\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201511\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201511\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201511\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201511\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201511\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201511\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201511\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201511\\VideoPositionTarget',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201511/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201511\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201511\ProposalLineItem[]
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
     * <td>{@code useThirdPartyAdServerFromProposal}</td>
     * <td>{@link ProposalLineItem#useThirdPartyAdServerFromProposal}</td>
     * </tr>
     * <tr>
     * <td>{@code thirdPartyAdServerId}</td>
     * <td>{@link ProposalLineItem#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>{@code customThirdPartyAdServerName}</td>
     * <td>{@link ProposalLineItem#customThirdPartyAdServerName}</td>
     * </tr>
     * </table>
     *
     * a set of proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\ProposalLineItemPage
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201511\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\Dfp\v201511\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201511\UpdateResult
     */
    public function performProposalLineItemAction(\Google\AdsApi\Dfp\v201511\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\Dfp\v201511\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     *
     * @param \Google\AdsApi\Dfp\v201511\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201511\ProposalLineItem[]
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->rval;
    }

}
