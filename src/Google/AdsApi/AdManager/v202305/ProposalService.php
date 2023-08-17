<?php

namespace Google\AdsApi\AdManager\v202305;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202305\\ObjectValue',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202305\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202305\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202305\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202305\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202305\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202305\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202305\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202305\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202305\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202305\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202305\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202305\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202305\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202305\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202305\\CommonError',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202305\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202305\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202305\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202305\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202305\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202305\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202305\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202305\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202305\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202305\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202305\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202305\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202305\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202305\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202305\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202305\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202305\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202305\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202305\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202305\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202305\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202305\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202305\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202305\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202305\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202305\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202305\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202305\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202305\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202305\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202305\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202305\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202305\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202305\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202305\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202305\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202305\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202305\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202305\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202305\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202305\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202305\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202305\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202305\\PrecisionError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202305\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalLineItemError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202305\\ProposalPage',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202305\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202305\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202305\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202305\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202305\\RequestBuyerReview',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202305\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202305\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202305\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202305\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202305\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202305\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202305\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202305\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202305\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202305\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202305\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202305\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202305\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202305\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202305\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202305\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202305\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202305\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202305\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202305\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202305\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202305\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202305\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202305\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202305\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202305\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202305\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202305\\Value',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202305\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202305\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202305\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202305\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202305\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202305\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202305\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202305/ProposalService?wsdl')
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
     * <p>For each proposal, the following fields are required:
     *
     * <ul>
     * <li>{@link Proposal#name}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202305\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202305\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
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
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('getMarketplaceCommentsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Gets a {@link ProposalPage} of {@link Proposal} objects that satisfy the given {@link
     * Statement#query}. The following fields are supported for filtering:
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
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('getProposalsByStatement', array(array('filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Performs actions on {@link Proposal} objects that match the given {@link Statement#query}.
     *
     * <p>The following fields are also required when submitting proposals for approval:
     *
     * <ul>
     * <li>{@link Proposal#advertiser}
     * <li>{@link Proposal#primarySalesperson}
     * <li>{@link Proposal#primaryTraffickerId}
     * </ul>
     *
     * @param \Google\AdsApi\AdManager\v202305\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202305\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202305\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202305\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202305\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202305\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202305\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202305\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
