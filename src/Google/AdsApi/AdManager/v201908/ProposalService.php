<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v201908\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v201908\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v201908\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v201908\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v201908\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v201908\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v201908\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v201908\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v201908\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v201908\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v201908\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v201908\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v201908\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v201908\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v201908\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v201908\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v201908\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v201908\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v201908\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v201908\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v201908\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v201908\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v201908\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v201908\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v201908\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v201908\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v201908\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v201908\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v201908\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v201908\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v201908\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v201908\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v201908\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v201908\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v201908\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v201908\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v201908\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v201908\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v201908\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v201908\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v201908\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v201908\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v201908\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v201908\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v201908\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v201908\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v201908\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v201908\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v201908\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v201908\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v201908\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v201908\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v201908\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v201908\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v201908\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v201908\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v201908\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v201908\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v201908\\ResumeProposals',
      'RetractProposals' => 'Google\\AdsApi\\AdManager\\v201908\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\AdManager\\v201908\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v201908\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v201908\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v201908\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v201908\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v201908\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v201908\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v201908\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v201908\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v201908\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v201908\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v201908\\String_ValueMapEntry',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\AdManager\\v201908\\SubmitProposalsForApproval',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v201908\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v201908\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v201908\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v201908\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v201908\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v201908\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v201908\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v201908\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v201908\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v201908\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v201908\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v201908\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v201908\\VideoPositionTarget',
      'WorkflowActionError' => 'Google\\AdsApi\\AdManager\\v201908\\WorkflowActionError',
      'WorkflowValidationError' => 'Google\\AdsApi\\AdManager\\v201908\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v201908\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v201908\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v201908\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v201908/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v201908\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201908\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\ProposalPage
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v201908\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v201908\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v201908\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v201908\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v201908\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v201908\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v201908\Proposal[]
     * @throws \Google\AdsApi\AdManager\v201908\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
