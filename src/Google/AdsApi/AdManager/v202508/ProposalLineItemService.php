<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202508\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202508\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202508\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202508\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202508\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202508\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202508\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202508\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202508\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202508\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202508\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202508\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202508\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202508\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202508\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202508\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202508\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202508\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202508\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202508\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202508\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202508\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202508\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202508\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202508\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202508\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202508\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202508\\Goal',
      'GrpSettings' => 'Google\\AdsApi\\AdManager\\v202508\\GrpSettings',
      'GrpSettingsError' => 'Google\\AdsApi\\AdManager\\v202508\\GrpSettingsError',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202508\\InternalApiError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryTargetingError',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202508\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemError',
      'LineItemFlightDateError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemFlightDateError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202508\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202508\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202508\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202508\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202508\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202508\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202508\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202508\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202508\\PreferredDealError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202508\\ProgrammaticError',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalActionError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202508\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202508\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202508\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202508\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202508\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202508\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202508\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202508\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202508\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202508\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202508\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202508\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202508\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202508\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202508\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202508\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202508\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202508\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202508\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202508\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202508\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202508\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202508\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202508\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202508\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202508\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202508\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202508\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202508\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202508\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202508\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202508\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202508\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202508/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202508\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202508\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202508\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
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
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match the given {@link
     * Statement#query}.
     *
     * @param \Google\AdsApi\AdManager\v202508\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202508\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202508\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202508\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202508\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202508\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202508\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202508\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
