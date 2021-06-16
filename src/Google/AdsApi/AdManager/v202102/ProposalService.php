<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202102\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202102\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202102\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202102\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202102\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202102\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202102\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202102\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202102\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202102\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202102\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202102\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202102\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202102\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202102\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202102\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202102\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202102\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202102\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202102\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202102\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202102\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202102\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202102\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202102\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202102\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202102\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202102\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202102\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202102\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202102\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202102\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202102\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202102\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202102\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202102\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202102\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202102\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202102\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202102\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202102\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202102\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v202102\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v202102\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202102\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202102\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202102\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202102\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202102\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202102\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202102\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202102\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202102\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202102\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202102\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202102\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202102\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202102\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202102\\ResumeProposals',
      'RetractProposals' => 'Google\\AdsApi\\AdManager\\v202102\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\AdManager\\v202102\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202102\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202102\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202102\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202102\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202102\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202102\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202102\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202102\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202102\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202102\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202102\\String_ValueMapEntry',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\AdManager\\v202102\\SubmitProposalsForApproval',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202102\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202102\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202102\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202102\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202102\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202102\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202102\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202102\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202102\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202102\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202102\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202102\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202102\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202102\\VideoPositionTarget',
      'WorkflowActionError' => 'Google\\AdsApi\\AdManager\\v202102\\WorkflowActionError',
      'WorkflowValidationError' => 'Google\\AdsApi\\AdManager\\v202102\\WorkflowValidationError',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202102\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202102\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202102\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202102\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202102/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202102\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202102\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
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
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202102\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202102\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202102\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202102\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202102\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202102\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202102\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202102\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202102\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202102\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
