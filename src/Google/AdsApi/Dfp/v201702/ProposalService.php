<?php

namespace Google\AdsApi\Dfp\v201702;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201702\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201702\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201702\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201702\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201702\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\Dfp\\v201702\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201702\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201702\\AvailableBillingError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201702\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201702\\BooleanValue',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\Dfp\\v201702\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\Dfp\\v201702\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201702\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201702\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201702\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201702\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201702\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201702\\DateValue',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201702\\DealError',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\Dfp\\v201702\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201702\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\Dfp\\v201702\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201702\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201702\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201702\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201702\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201702\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201702\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201702\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201702\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201702\\LineItemOperationError',
      'MarketplaceComment' => 'Google\\AdsApi\\Dfp\\v201702\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\Dfp\\v201702\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalMarketplaceInfo',
      'Money' => 'Google\\AdsApi\\Dfp\\v201702\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201702\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201702\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201702\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\Dfp\\v201702\\OfflineError',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201702\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201702\\PackageError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201702\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201702\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201702\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201702\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\Dfp\\v201702\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\Dfp\\v201702\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201702\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201702\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201702\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\Dfp\\v201702\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\Dfp\\v201702\\RequestBuyerAcceptance',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201702\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\Dfp\\v201702\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\Dfp\\v201702\\ReserveProposals',
      'RetractProposals' => 'Google\\AdsApi\\Dfp\\v201702\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\Dfp\\v201702\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\Dfp\\v201702\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201702\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\Dfp\\v201702\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201702\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201702\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201702\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201702\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201702\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201702\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201702\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201702\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\Dfp\\v201702\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\Dfp\\v201702\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\Dfp\\v201702\\SubmitProposalsForArchival',
      'SyncProposalsWithMarketplace' => 'Google\\AdsApi\\Dfp\\v201702\\SyncProposalsWithMarketplace',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201702\\TeamError',
      'TerminateNegotiations' => 'Google\\AdsApi\\Dfp\\v201702\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201702\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201702\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201702\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\Dfp\\v201702\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201702\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201702\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201702\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201702\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\Dfp\\v201702\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\Dfp\\v201702\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\Dfp\\v201702\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\Dfp\\v201702\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\Dfp\\v201702\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201702\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\Dfp\\v201702\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201702\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201702/ProposalService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201702\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201702\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\MarketplaceCommentPage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\ProposalPage
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\Dfp\v201702\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201702\ProposalAction $proposalAction
     * @param \Google\AdsApi\Dfp\v201702\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201702\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function performProposalAction(\Google\AdsApi\Dfp\v201702\ProposalAction $proposalAction, \Google\AdsApi\Dfp\v201702\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\Dfp\v201702\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201702\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201702\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
