<?php

namespace Google\AdsApi\AdManager\v202511;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
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
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202511\\ArchiveProposals',
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
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202511\\BuyerRfp',
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
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202511\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202511\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202511\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202511\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202511\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202511\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202511\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202511\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202511\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202511\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202511\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202511\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202511\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202511\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202511\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202511\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202511\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202511\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202511\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202511\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202511\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202511\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202511\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202511\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202511\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202511\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202511\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202511\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202511\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202511\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202511\\ProgrammaticError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202511\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemMakegoodError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202511\\ProposalPage',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202511\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202511\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202511\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202511\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202511\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202511\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202511\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202511\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202511\\SalespersonSplit',
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
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202511\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202511\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202511\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202511\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202511\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202511\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202511\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202511\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202511\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202511\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202511\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202511\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202511\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202511/ProposalService?wsdl')
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
     * Creates new {@link Proposal} objects.
     *
     * <p>For each proposal, the following fields are required:
     *
     * <ul>
     * <li>{@link Proposal#name}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202511\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202511\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function createProposals(array $proposals)
    {
      return $this->__soapCall('createProposals', array(array('proposals' => $proposals)))->getRval();
    }

    /**
     * Gets a {@link MarketplaceCommentPage} of {@link MarketplaceComment} objects that satisfy the
     * given {@link Statement#query}. This method only returns comments already sent to Marketplace,
     * local draft {@link ProposalMarketplaceInfo#marketplaceComment} are not included. The following
     * fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code proposalId}</td>
     * <td>{@link MarketplaceComment#proposalId}</td>
     * </tr>
     * </table>
     *
     * The query must specify a {@code proposalId}, and only supports a subset of PQL syntax:<br>
     * <code>[WHERE <condition> {AND <condition> ...}]</code><br>
     * <code>[ORDER BY <property> [ASC | DESC]]</code><br>
     * <code>[LIMIT {[<offset>,] <count>} | {<count> OFFSET <offset>}]</code><br>
     *
     * <p><code><condition></code><br>
     * &nbsp;&nbsp;&nbsp;&nbsp; <code>:= <property> = <value></code><br>
     * <code><condition> := <property> IN <list></code><br>
     * Only supports {@code ORDER BY} {@link MarketplaceComment#creationTime}.
     *
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getMarketplaceCommentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link ProposalPage} of {@link Proposal} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
     *
     * <table>
     * <tr>
     * <th scope="col">PQL Property</th>
     * <th scope="col">Object Property</th>
     * </tr>
     * <tr>
     * <td>{@code id}</td>
     * <td>{@link Proposal#id}</td>
     * </tr>
     * <tr>
     * <td>{@code dfpOrderId}</td>
     * <td>{@link Proposal#dfpOrderId}</td>
     * </tr>
     * <tr>
     * <td>{@code name}</td>
     * <td>{@link Proposal#name}</td>
     * </tr>
     * <tr>
     * <td>{@code status}</td>
     * <td>{@link Proposal#status}</td>
     * </tr>
     * <tr>
     * <td>{@code isArchived}</td>
     * <td>{@link Proposal#isArchived}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code approvalStatus}
     * <div class="constraint">Only applicable for proposals using sales management</div>
     * </td>
     * <td>{@link Proposal#approvalStatus}</td>
     * </tr>
     * <tr>
     * <td>{@code lastModifiedDateTime}</td>
     * <td>{@link Proposal#lastModifiedDateTime}</td>
     * </tr>
     * <tr>
     * <td>{@code isProgrammatic}</td>
     * <td>{@link Proposal#isProgrammatic}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code negotiationStatus}
     * <div class="constraint">Only applicable for programmatic proposals</div>
     * </td>
     * <td>{@link ProposalMarketplaceInfo#negotiationStatus}</td>
     * </tr>
     * </table>
     *
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Proposal} objects that match the given {@link Statement#query}.
     *
     * <p>The following fields are also required when submitting proposals for approval:
     *
     * <ul>
     * <li>{@link Proposal#advertiser}
     * <li>{@link Proposal#primarySalesperson}
     * <li>{@link Proposal#primaryTraffickerId}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202511\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202511\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202511\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202511\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202511\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202511\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202511\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202511\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
