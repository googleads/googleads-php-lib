<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201705\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201705\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201705\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201705\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201705\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\Dfp\\v201705\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201705\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201705\\AvailableBillingError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201705\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201705\\BooleanValue',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\Dfp\\v201705\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\Dfp\\v201705\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201705\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201705\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201705\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201705\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201705\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201705\\DateValue',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201705\\DealError',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\Dfp\\v201705\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201705\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\Dfp\\v201705\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201705\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201705\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201705\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201705\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201705\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201705\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201705\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201705\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201705\\LineItemOperationError',
      'MarketplaceComment' => 'Google\\AdsApi\\Dfp\\v201705\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\Dfp\\v201705\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalMarketplaceInfo',
      'Money' => 'Google\\AdsApi\\Dfp\\v201705\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201705\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201705\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201705\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\Dfp\\v201705\\OfflineError',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201705\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201705\\PackageError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201705\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201705\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201705\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201705\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\Dfp\\v201705\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\Dfp\\v201705\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201705\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201705\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201705\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\Dfp\\v201705\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\Dfp\\v201705\\RequestBuyerAcceptance',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201705\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\Dfp\\v201705\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\Dfp\\v201705\\ReserveProposals',
      'RetractProposals' => 'Google\\AdsApi\\Dfp\\v201705\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\Dfp\\v201705\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\Dfp\\v201705\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201705\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\Dfp\\v201705\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201705\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201705\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201705\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201705\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201705\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201705\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201705\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201705\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\Dfp\\v201705\\SubmitProposalsForArchival',
      'SyncProposalsWithMarketplace' => 'Google\\AdsApi\\Dfp\\v201705\\SyncProposalsWithMarketplace',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201705\\TeamError',
      'TerminateNegotiations' => 'Google\\AdsApi\\Dfp\\v201705\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201705\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201705\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201705\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\Dfp\\v201705\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201705\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201705\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201705\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\Dfp\\v201705\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\Dfp\\v201705\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\Dfp\\v201705\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\Dfp\\v201705\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201705\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\Dfp\\v201705\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201705\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201705/ProposalService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201705\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201705\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\MarketplaceCommentPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\ProposalPage
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\Dfp\v201705\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201705\ProposalAction $proposalAction
     * @param \Google\AdsApi\Dfp\v201705\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201705\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function performProposalAction(\Google\AdsApi\Dfp\v201705\ProposalAction $proposalAction, \Google\AdsApi\Dfp\v201705\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\Dfp\v201705\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201705\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201705\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
