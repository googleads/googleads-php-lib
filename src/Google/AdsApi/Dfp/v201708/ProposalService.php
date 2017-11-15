<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201708\\ObjectValue',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201708\\ApiException',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201708\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201708\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201708\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\Dfp\\v201708\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201708\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201708\\AvailableBillingError',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201708\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201708\\BooleanValue',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\Dfp\\v201708\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\Dfp\\v201708\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201708\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201708\\CommonError',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201708\\CustomFieldValueError',
      'Date' => 'Google\\AdsApi\\Dfp\\v201708\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201708\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201708\\DateValue',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201708\\DealError',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\Dfp\\v201708\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201708\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\Dfp\\v201708\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201708\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201708\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201708\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201708\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201708\\ForecastError',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201708\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201708\\InvalidUrlError',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201708\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201708\\LineItemOperationError',
      'MarketplaceComment' => 'Google\\AdsApi\\Dfp\\v201708\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\Dfp\\v201708\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalMarketplaceInfo',
      'Money' => 'Google\\AdsApi\\Dfp\\v201708\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201708\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201708\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201708\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\Dfp\\v201708\\OfflineError',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201708\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201708\\PackageError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201708\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201708\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201708\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201708\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\Dfp\\v201708\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\Dfp\\v201708\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201708\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201708\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201708\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\Dfp\\v201708\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\Dfp\\v201708\\RequestBuyerAcceptance',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201708\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\Dfp\\v201708\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\Dfp\\v201708\\ReserveProposals',
      'RetractProposals' => 'Google\\AdsApi\\Dfp\\v201708\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\Dfp\\v201708\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\Dfp\\v201708\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201708\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\Dfp\\v201708\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201708\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201708\\SetValue',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201708\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201708\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201708\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201708\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201708\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201708\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\Dfp\\v201708\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\Dfp\\v201708\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\Dfp\\v201708\\SubmitProposalsForArchival',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201708\\TeamError',
      'TerminateNegotiations' => 'Google\\AdsApi\\Dfp\\v201708\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201708\\TextValue',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201708\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201708\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\Dfp\\v201708\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201708\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201708\\UpdateResult',
      'Value' => 'Google\\AdsApi\\Dfp\\v201708\\Value',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201708\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\Dfp\\v201708\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\Dfp\\v201708\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\Dfp\\v201708\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\Dfp\\v201708\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\Dfp\\v201708\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201708\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\Dfp\\v201708\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201708\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201708/ProposalService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201708\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201708\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\MarketplaceCommentPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\ProposalPage
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\Dfp\v201708\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201708\ProposalAction $proposalAction
     * @param \Google\AdsApi\Dfp\v201708\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function performProposalAction(\Google\AdsApi\Dfp\v201708\ProposalAction $proposalAction, \Google\AdsApi\Dfp\v201708\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\Dfp\v201708\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201708\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201708\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
