<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202511\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202511\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202511\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202511\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202511\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202511\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202511\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202511\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202511\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202511\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202511\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202511\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202511\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202511\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202511\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202511\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202511\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202511\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202511\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202511\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202511\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202511\\GrpSettingsError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202511\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202511\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202511\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202511\\PreferredDealError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202511\\ProgrammaticError',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalActionError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemProgrammaticError',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargeting',
      'PublisherProvidedSignalsTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargetingError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202511\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202511\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202511\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202511\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202511\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202511\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202511\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202511\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202511\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202511\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202511\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202511\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202511\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202511\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202511\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202511\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202511\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202511\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202511\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202511\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202511\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202511\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202511\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202511\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
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
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202511\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202511\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202511\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
