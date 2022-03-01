<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202105\\AppliedLabel',
      'ArchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\ArchiveProposalLineItems',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202105\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202105\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202105\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserTargeting',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202105\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CmsMetadataCriteria',
      'CustomTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomTargetingError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeRangeTargeting',
      'DateTimeRangeTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeRangeTargetingError',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202105\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DayPartTargeting',
      'DayPartTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\DayPartTargetingError',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202105\\DealError',
      'DeliveryData' => 'Google\\AdsApi\\AdManager\\v202105\\DeliveryData',
      'DeliveryIndicator' => 'Google\\AdsApi\\AdManager\\v202105\\DeliveryIndicator',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceManufacturerTargeting',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\DropDownCustomFieldValue',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202105\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202105\\ForecastError',
      'FrequencyCap' => 'Google\\AdsApi\\AdManager\\v202105\\FrequencyCap',
      'FrequencyCapError' => 'Google\\AdsApi\\AdManager\\v202105\\FrequencyCapError',
      'GenericTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\GenericTargetingError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\GeoTargeting',
      'GeoTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\GeoTargetingError',
      'Goal' => 'Google\\AdsApi\\AdManager\\v202105\\Goal',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\InventoryTargeting',
      'InventoryTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\InventoryTargetingError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202105\\LabelEntityAssociationError',
      'LineItemError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202105\\Location',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileApplicationTargeting',
      'MobileApplicationTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\MobileApplicationTargetingError',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202105\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202105\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PauseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\PauseProposalLineItems',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202105\\PrecisionError',
      'PreferredDealError' => 'Google\\AdsApi\\AdManager\\v202105\\PreferredDealError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202105\\ProductError',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalError',
      'ProposalLineItemAction' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemAction',
      'ProposalLineItemActionError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemActionError',
      'ProposalLineItem' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItem',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemMakegoodError',
      'ProposalLineItemMakegoodInfo' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemMakegoodInfo',
      'ProposalLineItemMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemMarketplaceInfo',
      'ProposalLineItemPage' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemPage',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemProgrammaticError',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202105\\RangeError',
      'ReleaseProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\ReleaseProposalLineItems',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\RequestPlatformTargeting',
      'RequestPlatformTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\RequestPlatformTargetingError',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredNumberError',
      'ReservationDetailsError' => 'Google\\AdsApi\\AdManager\\v202105\\ReservationDetailsError',
      'ReserveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\ReserveProposalLineItems',
      'ResumeProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\ResumeProposalLineItems',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202105\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202105\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202105\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202105\\Technology',
      'TechnologyTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\TechnologyTargetingError',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'ThirdPartyMeasurementSettings' => 'Google\\AdsApi\\AdManager\\v202105\\ThirdPartyMeasurementSettings',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202105\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202105\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UnarchiveProposalLineItems' => 'Google\\AdsApi\\AdManager\\v202105\\UnarchiveProposalLineItems',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202105\\UniqueError',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202105\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\UserDomainTargeting',
      'UserDomainTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\UserDomainTargetingError',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionTargeting',
      'VideoPositionTargetingError' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionTargetingError',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionTarget',
      'createMakegoodsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createMakegoodsResponse',
      'createProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createProposalLineItemsResponse',
      'getProposalLineItemsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getProposalLineItemsByStatementResponse',
      'performProposalLineItemActionResponse' => 'Google\\AdsApi\\AdManager\\v202105\\performProposalLineItemActionResponse',
      'updateProposalLineItemsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateProposalLineItemsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/ProposalLineItemService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItemMakegoodInfo[] $makegoodInfos
     * @return \Google\AdsApi\AdManager\v202105\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function createMakegoods(array $makegoodInfos)
    {
      return $this->__soapCall('createMakegoods', array(array('makegoodInfos' => $makegoodInfos)))->getRval();
    }

    /**
     * Creates new {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202105\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * <td>{@code isProgrammatic}</td>
     * <td>{@link ProposalLineItem#isProgrammatic}</td>
     * </tr>
     * </table>
     *
     * a set of proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\ProposalLineItemPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getProposalLineItemsByStatement(\Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalLineItemsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link ProposalLineItem} objects that match
     * the given {@link Statement#query}.
     *
     * proposal line items
     *
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItemAction $proposalLineItemAction
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function performProposalLineItemAction(\Google\AdsApi\AdManager\v202105\ProposalLineItemAction $proposalLineItemAction, \Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalLineItemAction', array(array('proposalLineItemAction' => $proposalLineItemAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link ProposalLineItem} objects.
     *
     * @param \Google\AdsApi\AdManager\v202105\ProposalLineItem[] $proposalLineItems
     * @return \Google\AdsApi\AdManager\v202105\ProposalLineItem[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateProposalLineItems(array $proposalLineItems)
    {
      return $this->__soapCall('updateProposalLineItems', array(array('proposalLineItems' => $proposalLineItems)))->getRval();
    }

}
