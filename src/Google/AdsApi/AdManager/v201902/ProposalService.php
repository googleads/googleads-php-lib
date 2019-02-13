<?php

namespace Google\AdsApi\AdManager\v201902;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201902\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201902\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201902\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201902\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201902\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v201902\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201902\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201902\\AvailableBillingError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201902\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201902\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201902\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v201902\\BuyerRfp',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\AdManager\\v201902\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\AdManager\\v201902\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201902\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201902\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201902\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201902\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201902\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201902\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201902\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201902\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201902\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201902\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v201902\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201902\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v201902\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201902\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201902\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201902\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201902\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201902\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201902\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201902\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201902\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201902\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201902\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v201902\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v201902\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201902\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201902\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201902\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201902\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\AdManager\\v201902\\OfflineError',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v201902\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v201902\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201902\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201902\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201902\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201902\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v201902\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\AdManager\\v201902\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201902\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201902\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201902\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\AdManager\\v201902\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v201902\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v201902\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201902\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\AdManager\\v201902\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v201902\\ReserveProposals',
      'RetractProposals' => 'Google\\AdsApi\\AdManager\\v201902\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\AdManager\\v201902\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v201902\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201902\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\AdManager\\v201902\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201902\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201902\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201902\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201902\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201902\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201902\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201902\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201902\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201902\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\AdManager\\v201902\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\AdManager\\v201902\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\AdManager\\v201902\\SubmitProposalsForArchival',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201902\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201902\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201902\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v201902\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201902\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201902\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201902\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201902\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v201902\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201902\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v201902\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201902\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201902\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201902\\VideoPositionTarget',
      'WorkflowActionError' => 'Google\\AdsApi\\AdManager\\v201902\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\AdManager\\v201902\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\AdManager\\v201902\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\AdManager\\v201902\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\AdManager\\v201902\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\AdManager\\v201902\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201902\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v201902\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201902\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201902/ProposalService?wsdl')
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
     * For each proposal, the following fields are required:
     * <ul>
     * <li>{@link Proposal#name}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201902\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201902\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
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
     * comments
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getMarketplaceCommentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link ProposalPage} of {@link Proposal} objects that satisfy the given
     * {@link Statement#query}. The following fields are supported for filtering:
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
     * <td>
     * {@code thirdPartyAdServerId}
     * <div class="constraint">
     * Only applicable for non-programmatic proposals using sales management
     * </div>
     * </td>
     * <td>{@link Proposal#thirdPartyAdServerId}</td>
     * </tr>
     * <tr>
     * <td>
     * {@code customThirdPartyAdServerName}
     * <div class="constraint">
     * Only applicable for non-programmatic proposals using sales management
     * </div>
     * </td>
     * <td>{@link Proposal#customThirdPartyAdServerName}</td>
     * </tr>
     * <tr>
     * <td>{@code hasOfflineErrors}</td>
     * <td>{@link Proposal#hasOfflineErrors}</td>
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
     * a set of proposals
     *
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\ProposalPage
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Proposal} objects that match the given {@link Statement#query}.
     *
     * The following fields are also required when submitting proposals for approval:
     * <ul>
     * <li>{@link Proposal#advertiser}</li>
     * <li>{@link Proposal#primarySalesperson}</li>
     * <li>{@link Proposal#primaryTraffickerId}</li>
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v201902\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v201902\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201902\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v201902\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v201902\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v201902\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201902\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201902\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
