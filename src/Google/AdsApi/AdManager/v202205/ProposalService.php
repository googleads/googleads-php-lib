<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202205\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202205\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202205\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202205\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202205\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202205\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202205\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202205\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202205\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202205\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202205\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202205\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202205\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202205\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202205\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202205\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202205\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202205\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202205\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202205\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202205\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202205\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202205\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202205\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202205\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202205\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202205\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202205\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202205\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202205\\InvalidUrlError',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202205\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202205\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202205\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202205\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202205\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202205\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202205\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202205\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202205\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\OperatingSystemVersionTargeting',
      'PackageActionError' => 'Google\\AdsApi\\AdManager\\v202205\\PackageActionError',
      'PackageError' => 'Google\\AdsApi\\AdManager\\v202205\\PackageError',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202205\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202205\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202205\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202205\\PrecisionError',
      'ProductError' => 'Google\\AdsApi\\AdManager\\v202205\\ProductError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202205\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202205\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202205\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202205\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202205\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202205\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202205\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202205\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202205\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202205\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202205\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202205\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202205\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202205\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202205\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202205\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202205\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202205\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202205\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202205\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202205\\String_ValueMapEntry',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202205\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202205\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202205\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202205\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202205\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202205\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202205\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202205\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202205\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202205\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202205\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202205\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202205\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202205\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202205\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202205\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202205/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202205\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202205\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202205\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202205\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202205\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202205\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202205\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202205\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202205\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202205\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202205\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
