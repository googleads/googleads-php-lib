<?php

namespace Google\AdsApi\AdManager\v202308;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202308\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202308\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202308\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202308\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202308\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202308\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202308\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202308\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202308\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202308\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202308\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202308\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202308\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202308\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202308\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202308\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202308\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202308\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202308\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202308\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202308\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202308\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202308\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202308\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202308\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202308\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202308\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202308\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202308\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202308\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202308\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202308\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202308\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202308\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202308\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202308\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202308\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202308\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202308\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202308\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202308\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202308\\GrpSettingsError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202308\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202308\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202308\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202308\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202308\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202308\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202308\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202308\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202308\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202308\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202308\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202308\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202308\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202308\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202308\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202308\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202308\\PreferredDealError',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalActionError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202308\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202308\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202308\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202308\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202308\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202308\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202308\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202308\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202308\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202308\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202308\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202308\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202308\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202308\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202308\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202308\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202308\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202308\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202308\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202308\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202308\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202308\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202308\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202308\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202308\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202308\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202308\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202308\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202308\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202308\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202308\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202308\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202308\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202308/ProposalLineItemService?wsdl')
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
     * Creates makegood proposal line items given the specifications provided.
     *
     * @param \Google\AdsApi\AdManager\v202308\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202308\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202308\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202308\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function createProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('createProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

    /**
     * Gets a {@link ProposalLineItemPage} of {@link ProposalLineItem} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * <td>{@code isProgrammatic}</td>
     * <td>{@link ProposalLineItem#isProgrammatic}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202308\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202308\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202308\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202308\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202308\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202308\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202308\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202308\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
