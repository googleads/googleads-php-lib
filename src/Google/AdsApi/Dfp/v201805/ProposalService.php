<?php

namespace Google\AdsApi\Dfp\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\Dfp\\v201805\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiError',
      'ApiException' => 'Google\\AdsApi\\Dfp\\v201805\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\Dfp\\v201805\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\Dfp\\v201805\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\Dfp\\v201805\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\Dfp\\v201805\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\Dfp\\v201805\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\Dfp\\v201805\\AvailableBillingError',
      'BandwidthGroup' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\Dfp\\v201805\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\Dfp\\v201805\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\Dfp\\v201805\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\Dfp\\v201805\\BuyerRfp',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\Dfp\\v201805\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\Dfp\\v201805\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\Dfp\\v201805\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\Dfp\\v201805\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\Dfp\\v201805\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\Dfp\\v201805\\CustomFieldValueError',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\Dfp\\v201805\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\Dfp\\v201805\\Date',
      'DateTime' => 'Google\\AdsApi\\Dfp\\v201805\\DateTime',
      'DateTimeValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\Dfp\\v201805\\DateValue',
      'DayPart' => 'Google\\AdsApi\\Dfp\\v201805\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\Dfp\\v201805\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\Dfp\\v201805\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\Dfp\\v201805\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\Dfp\\v201805\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\Dfp\\v201805\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\Dfp\\v201805\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\Dfp\\v201805\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\Dfp\\v201805\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\Dfp\\v201805\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\Dfp\\v201805\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\Dfp\\v201805\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\Dfp\\v201805\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\Dfp\\v201805\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\Dfp\\v201805\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\Dfp\\v201805\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\Dfp\\v201805\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\Dfp\\v201805\\Money',
      'NotNullError' => 'Google\\AdsApi\\Dfp\\v201805\\NotNullError',
      'NullError' => 'Google\\AdsApi\\Dfp\\v201805\\NullError',
      'NumberValue' => 'Google\\AdsApi\\Dfp\\v201805\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\Dfp\\v201805\\OfflineError',
      'OperatingSystem' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\Dfp\\v201805\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\Dfp\\v201805\\PackageError',
      'ParseError' => 'Google\\AdsApi\\Dfp\\v201805\\ParseError',
      'PermissionError' => 'Google\\AdsApi\\Dfp\\v201805\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\Dfp\\v201805\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\Dfp\\v201805\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\Dfp\\v201805\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\Dfp\\v201805\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\Dfp\\v201805\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\Dfp\\v201805\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\Dfp\\v201805\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\Dfp\\v201805\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\Dfp\\v201805\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\Dfp\\v201805\\RequestBuyerReview',
      'RequiredCollectionError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\Dfp\\v201805\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\Dfp\\v201805\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\Dfp\\v201805\\ReserveProposals',
      'RetractProposals' => 'Google\\AdsApi\\Dfp\\v201805\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\Dfp\\v201805\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\Dfp\\v201805\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\Dfp\\v201805\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\Dfp\\v201805\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\Dfp\\v201805\\ServerError',
      'SetValue' => 'Google\\AdsApi\\Dfp\\v201805\\SetValue',
      'Size' => 'Google\\AdsApi\\Dfp\\v201805\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\Dfp\\v201805\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\Dfp\\v201805\\Statement',
      'StatementError' => 'Google\\AdsApi\\Dfp\\v201805\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\Dfp\\v201805\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\Dfp\\v201805\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\Dfp\\v201805\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\Dfp\\v201805\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\Dfp\\v201805\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\Dfp\\v201805\\SubmitProposalsForArchival',
      'Targeting' => 'Google\\AdsApi\\Dfp\\v201805\\Targeting',
      'TeamError' => 'Google\\AdsApi\\Dfp\\v201805\\TeamError',
      'Technology' => 'Google\\AdsApi\\Dfp\\v201805\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\Dfp\\v201805\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\Dfp\\v201805\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\Dfp\\v201805\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\Dfp\\v201805\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\Dfp\\v201805\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\Dfp\\v201805\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\Dfp\\v201805\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\Dfp\\v201805\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\Dfp\\v201805\\Value',
      'VideoPosition' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\Dfp\\v201805\\VideoPositionTarget',
      'WorkflowActionError' => 'Google\\AdsApi\\Dfp\\v201805\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\Dfp\\v201805\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\Dfp\\v201805\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\Dfp\\v201805\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\Dfp\\v201805\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\Dfp\\v201805\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\Dfp\\v201805\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\Dfp\\v201805\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\Dfp\\v201805\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201805/ProposalService?wsdl')
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
     * @param \Google\AdsApi\Dfp\v201805\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201805\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\MarketplaceCommentPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\ProposalPage
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\Dfp\v201805\Statement $filterStatement)
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
     * @param \Google\AdsApi\Dfp\v201805\ProposalAction $proposalAction
     * @param \Google\AdsApi\Dfp\v201805\Statement $filterStatement
     * @return \Google\AdsApi\Dfp\v201805\UpdateResult
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function performProposalAction(\Google\AdsApi\Dfp\v201805\ProposalAction $proposalAction, \Google\AdsApi\Dfp\v201805\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\Dfp\v201805\Proposal[] $proposals
     * @return \Google\AdsApi\Dfp\v201805\Proposal[]
     * @throws \Google\AdsApi\Dfp\v201805\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
