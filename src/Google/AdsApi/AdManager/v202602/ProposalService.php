<?php

namespace Google\AdsApi\AdManager\v202602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202602\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202602\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202602\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202602\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202602\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202602\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202602\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202602\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202602\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202602\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202602\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202602\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202602\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202602\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202602\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202602\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202602\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202602\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202602\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202602\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202602\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202602\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202602\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202602\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202602\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202602\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202602\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202602\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202602\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202602\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202602\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202602\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202602\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202602\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202602\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202602\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202602\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202602\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202602\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202602\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202602\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202602\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202602\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202602\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProgrammaticError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202602\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalLineItemMakegoodError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202602\\ProposalPage',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202602\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202602\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202602\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202602\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202602\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202602\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202602\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202602\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202602\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202602\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202602\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202602\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202602\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202602\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202602\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202602\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202602\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202602\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202602\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202602\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202602\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202602\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202602\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202602\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202602\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202602\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202602\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202602\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202602\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202602\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202602\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202602\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202602\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202602\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202602\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202602\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202602/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202602\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202602\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202602\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202602\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202602\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202602\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202602\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202602\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202602\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202602\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202602\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
