<?php

namespace Google\AdsApi\AdManager\v202208;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202208\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202208\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202208\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202208\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202208\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202208\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202208\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202208\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202208\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202208\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202208\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202208\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202208\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202208\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202208\\CreativePlaceholder',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202208\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202208\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202208\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202208\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202208\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202208\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202208\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202208\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202208\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202208\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202208\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202208\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202208\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202208\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202208\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202208\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202208\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202208\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202208\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202208\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202208\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202208\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202208\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202208\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202208\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202208\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202208\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202208\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202208\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202208\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202208\\PrecisionError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202208\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202208\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202208\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202208\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202208\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202208\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202208\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202208\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202208\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202208\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202208\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202208\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202208\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202208\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202208\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202208\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202208\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202208\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202208\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202208\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202208\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202208\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202208\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202208\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202208\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202208\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202208\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202208\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202208\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202208\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202208\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202208\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202208\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202208\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202208\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202208\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202208\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202208\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202208\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202208\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202208\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202208/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202208\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202208\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
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
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202208\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202208\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202208\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202208\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202208\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202208\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202208\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202208\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202208\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202208\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
