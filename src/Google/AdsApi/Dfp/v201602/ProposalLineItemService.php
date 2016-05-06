<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201602\\ObjectValue',
      'ActualizeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\ActualizeProposalLineItems',
      'AdUnitPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitPremiumFeature',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201602\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\ArchiveProposalLineItems',
      'AudienceSegmentPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceSegmentPremiumFeature',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201602\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201602\\AvailableBillingError',
      'BandwidthPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\BandwidthPremiumFeature',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201602\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201602\\Browser',
      'BrowserPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\BrowserPremiumFeature',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201602\\BrowserLanguage',
      'BrowserLanguagePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\BrowserLanguagePremiumFeature',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\BrowserTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201602\\CommonError',
      'ContentBundlePremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\ContentBundlePremiumFeature',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201602\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201602\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomFieldValueError',
      'CustomTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingError',
      'CustomTargetingPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\CustomTargetingPremiumFeature',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceSegmentCriteria',
      'CustomizableAttributes' => 'Google\\AdsApi\\Dfp\\v201602\\CustomizableAttributes',
      'Date' => 'Google\\AdsApi\\Dfp\\v201602\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201602\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201602\\DayPart',
      'DaypartPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\DaypartPremiumFeature',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\DayPartTargetingError',
      'DeliveryData' => 'Google\\AdsApi\\Dfp\\v201602\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\Dfp\\v201602\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCapability',
      'DeviceCapabilityPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCapabilityPremiumFeature',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCategory',
      'DeviceCategoryPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCategoryPremiumFeature',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceManufacturer',
      'DeviceManufacturerPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceManufacturerPremiumFeature',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201602\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201602\\EntityLimitReachedError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201602\\FeatureError',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201602\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapError',
      'FrequencyCapPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\FrequencyCapPremiumFeature',
      'GenericTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\GeoTargetingError',
      'GeographyPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\GeographyPremiumFeature',
      'Goal' => 'Google\\AdsApi\\Dfp\\v201602\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201602\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201602\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201602\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201602\\Location',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201602\\MobileCarrier',
      'MobileCarrierPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\MobileCarrierPremiumFeature',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201602\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201602\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201602\\OperatingSystem',
      'OperatingSystemPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\OperatingSystemPremiumFeature',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201602\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201602\\PermissionError',
      'PlacementPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\PlacementPremiumFeature',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201602\\PrecisionError',
      'PremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\PremiumFeature',
      'PremiumRateValue' => 'Google\\AdsApi\\Dfp\\v201602\\PremiumRateValue',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201602\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemActionError',
      'ProposalLineItemConstraints' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemConstraints',
      'ProposalLineItem' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemError',
      'ProposalLineItemPage' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemPage',
      'ProposalLineItemPremium' => 'Google\\AdsApi\\Dfp\\v201602\\ProposalLineItemPremium',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201602\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\ReleaseProposalLineItems',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201602\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\Dfp\\v201602\\ReservationDetailsError',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201602\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201602\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201602\\StatementError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201602\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201602\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201602\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201602\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201602\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201602\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201602\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201602\\UniqueError',
      'UnknownPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\UnknownPremiumFeature',
      'UnlinkProposalLineItems' => 'Google\\AdsApi\\Dfp\\v201602\\UnlinkProposalLineItems',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201602\\UpdateResult',
      'UserDomainPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainPremiumFeature',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\Dfp\\v201602\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\Dfp\\v201602\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPosition',
      'VideoPositionPremiumFeature' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionPremiumFeature',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201602\\VideoPositionTarget',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201602/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201602\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201602\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
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
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\ProposalLineItemPage
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\Dfp\v201602\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\Dfp\v201602\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201602\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\Dfp\v201602\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\Dfp\v201602\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->rval;
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects. If free editing mode is enabled,
     * this will trigger inventory reservation and cause the proposal to be pushed to DFP again.
     *
     * @param \Google\AdsApi\Dfp\v201602\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\Dfp\v201602\ProposalLineItem[]
     * @throws \Google\AdsApi\Dfp\v201602\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->rval;
    }

}
