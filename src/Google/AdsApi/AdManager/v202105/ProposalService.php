<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202105\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202105\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202105\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202105\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202105\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202105\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202105\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202105\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202105\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202105\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202105\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202105\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202105\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202105\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202105\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202105\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202105\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202105\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202105\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202105\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202105\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202105\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202105\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202105\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202105\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202105\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202105\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202105\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202105\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202105\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202105\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202105\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\InventoryTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202105\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202105\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202105\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202105\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202105\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202105\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202105\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202105\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202105\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202105\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v202105\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v202105\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202105\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202105\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202105\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202105\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202105\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202105\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202105\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202105\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202105\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202105\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202105\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202105\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202105\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202105\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202105\\ResumeProposals',
      'RetractProposals' => 'Google\\AdsApi\\AdManager\\v202105\\RetractProposals',
      'RetractionDetails' => 'Google\\AdsApi\\AdManager\\v202105\\RetractionDetails',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202105\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202105\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202105\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202105\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202105\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202105\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202105\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202105\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202105\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202105\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202105\\String_ValueMapEntry',
      'SubmitProposalsForApproval' => 'Google\\AdsApi\\AdManager\\v202105\\SubmitProposalsForApproval',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202105\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202105\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202105\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202105\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202105\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202105\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202105\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202105\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202105\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202105\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202105\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202105\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202105\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202105\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202105\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202105\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202105\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202105/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202105\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202105\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
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
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202105\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202105\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202105\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202105\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202105\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202105\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202105\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202105\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202105\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202105\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
