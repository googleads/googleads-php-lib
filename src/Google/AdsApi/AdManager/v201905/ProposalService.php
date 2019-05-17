<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201905\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201905\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201905\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201905\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201905\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v201905\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201905\\AuthenticationError',
      'AvailableBillingError' => 'Google\\AdsApi\\AdManager\\v201905\\AvailableBillingError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201905\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201905\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201905\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v201905\\BuyerRfp',
      'BypassProposalWorkflowRules' => 'Google\\AdsApi\\AdManager\\v201905\\BypassProposalWorkflowRules',
      'CancelRetractionForProposals' => 'Google\\AdsApi\\AdManager\\v201905\\CancelRetractionForProposals',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201905\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201905\\CommonError',
      'ContentMetadataKeyHierarchyTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentMetadataKeyHierarchyTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201905\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201905\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201905\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201905\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201905\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201905\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201905\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201905\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v201905\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201905\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v201905\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201905\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201905\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201905\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201905\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201905\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201905\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201905\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201905\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201905\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201905\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v201905\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v201905\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201905\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201905\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201905\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201905\\NumberValue',
      'OfflineError' => 'Google\\AdsApi\\AdManager\\v201905\\OfflineError',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v201905\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v201905\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201905\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v201905\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201905\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201905\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201905\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalActionError',
      'ProposalLink' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLink',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v201905\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalPage',
      'ProposalTermsAndConditions' => 'Google\\AdsApi\\AdManager\\v201905\\ProposalTermsAndConditions',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201905\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201905\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201905\\RangeError',
      'RequestApprovalProgressAction' => 'Google\\AdsApi\\AdManager\\v201905\\RequestApprovalProgressAction',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v201905\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v201905\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201905\\RequiredNumberError',
      'ReserveInventoryProgressAction' => 'Google\\AdsApi\\AdManager\\v201905\\ReserveInventoryProgressAction',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v201905\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v201905\\ResumeProposals',
      'RetractProposals' => 'Google\\AdsApi\\AdManager\\v201905\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\AdManager\\v201905\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v201905\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201905\\AudienceSegmentError',
      'SendNotificationProgressAction' => 'Google\\AdsApi\\AdManager\\v201905\\SendNotificationProgressAction',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201905\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201905\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201905\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201905\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201905\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201905\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201905\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201905\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201905\\String_ValueMapEntry',
      'SubmitProposalsForApprovalBypassValidation' => 'Google\\AdsApi\\AdManager\\v201905\\SubmitProposalsForApprovalBypassValidation',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\AdManager\\v201905\\SubmitProposalsForApproval',
      'SubmitProposalsForArchival' => 'Google\\AdsApi\\AdManager\\v201905\\SubmitProposalsForArchival',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201905\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201905\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201905\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v201905\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201905\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201905\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201905\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201905\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v201905\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201905\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201905\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201905\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201905\\VideoPositionTarget',
      'WorkflowActionError' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowActionError',
      'ProgressAction' => 'Google\\AdsApi\\AdManager\\v201905\\ProgressAction',
      'WorkflowProgress' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowProgress',
      'ProgressStep' => 'Google\\AdsApi\\AdManager\\v201905\\ProgressStep',
      'ProgressRule' => 'Google\\AdsApi\\AdManager\\v201905\\ProgressRule',
      'WorkflowValidationError' => 'Google\\AdsApi\\AdManager\\v201905\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201905\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v201905\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201905\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201905/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201905\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201905\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\ProposalPage
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v201905\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201905\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v201905\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201905\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v201905\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v201905\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v201905\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201905\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201905\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
