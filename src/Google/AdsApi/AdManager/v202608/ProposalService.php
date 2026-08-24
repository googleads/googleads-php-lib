<?php

namespace Google\AdsApi\AdManager\v202608;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ObjectValue' => 'Google\\AdsApi\\AdManager\\v202608\\ObjectValue',
      'AdProductBookingError' => 'Google\\AdsApi\\AdManager\\v202608\\AdProductBookingError',
      'AdUnitTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\AdUnitTargeting',
      'ApiError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdManager\\v202608\\ApiException',
      'TechnologyTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\TechnologyTargeting',
      'ApiVersionError' => 'Google\\AdsApi\\AdManager\\v202608\\ApiVersionError',
      'ApplicationException' => 'Google\\AdsApi\\AdManager\\v202608\\ApplicationException',
      'AppliedLabel' => 'Google\\AdsApi\\AdManager\\v202608\\AppliedLabel',
      'ArchiveProposals' => 'Google\\AdsApi\\AdManager\\v202608\\ArchiveProposals',
      'AuthenticationError' => 'Google\\AdsApi\\AdManager\\v202608\\AuthenticationError',
      'BandwidthGroup' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroup',
      'BandwidthGroupTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BandwidthGroupTargeting',
      'BaseCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\BaseCustomFieldValue',
      'BillingError' => 'Google\\AdsApi\\AdManager\\v202608\\BillingError',
      'BooleanValue' => 'Google\\AdsApi\\AdManager\\v202608\\BooleanValue',
      'Browser' => 'Google\\AdsApi\\AdManager\\v202608\\Browser',
      'BrowserLanguage' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguage',
      'BrowserLanguageTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserLanguageTargeting',
      'BrowserTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BrowserTargeting',
      'BuyerRfp' => 'Google\\AdsApi\\AdManager\\v202608\\BuyerRfp',
      'BuyerUserListTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\BuyerUserListTargeting',
      'CollectionSizeError' => 'Google\\AdsApi\\AdManager\\v202608\\CollectionSizeError',
      'CommonError' => 'Google\\AdsApi\\AdManager\\v202608\\CommonError',
      'ContentLabelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentLabelTargeting',
      'ContentTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\ContentTargeting',
      'CreativePlaceholder' => 'Google\\AdsApi\\AdManager\\v202608\\CreativePlaceholder',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdManager\\v202608\\CurrencyCodeError',
      'CustomCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteria',
      'CustomCriteriaSet' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaSet',
      'CustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValue',
      'CustomFieldValueError' => 'Google\\AdsApi\\AdManager\\v202608\\CustomFieldValueError',
      'CmsMetadataCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\CmsMetadataCriteria',
      'CustomCriteriaLeaf' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaLeaf',
      'CustomCriteriaNode' => 'Google\\AdsApi\\AdManager\\v202608\\CustomCriteriaNode',
      'AudienceSegmentCriteria' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentCriteria',
      'Date' => 'Google\\AdsApi\\AdManager\\v202608\\Date',
      'DateTime' => 'Google\\AdsApi\\AdManager\\v202608\\DateTime',
      'DateTimeRange' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRange',
      'DateTimeRangeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeRangeTargeting',
      'DateTimeValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateTimeValue',
      'DateValue' => 'Google\\AdsApi\\AdManager\\v202608\\DateValue',
      'DayPart' => 'Google\\AdsApi\\AdManager\\v202608\\DayPart',
      'DayPartTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DayPartTargeting',
      'DealError' => 'Google\\AdsApi\\AdManager\\v202608\\DealError',
      'DeviceCapability' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapability',
      'DeviceCapabilityTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCapabilityTargeting',
      'DeviceCategory' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategory',
      'DeviceCategoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceCategoryTargeting',
      'DeviceManufacturer' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturer',
      'DeviceManufacturerTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\DeviceManufacturerTargeting',
      'DiscardLocalVersionEdits' => 'Google\\AdsApi\\AdManager\\v202608\\DiscardLocalVersionEdits',
      'DropDownCustomFieldValue' => 'Google\\AdsApi\\AdManager\\v202608\\DropDownCustomFieldValue',
      'EditProposalsForNegotiation' => 'Google\\AdsApi\\AdManager\\v202608\\EditProposalsForNegotiation',
      'EntityChildrenLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityChildrenLimitReachedError',
      'EntityLimitReachedError' => 'Google\\AdsApi\\AdManager\\v202608\\EntityLimitReachedError',
      'ExchangeRateError' => 'Google\\AdsApi\\AdManager\\v202608\\ExchangeRateError',
      'FeatureError' => 'Google\\AdsApi\\AdManager\\v202608\\FeatureError',
      'FieldPathElement' => 'Google\\AdsApi\\AdManager\\v202608\\FieldPathElement',
      'ForecastError' => 'Google\\AdsApi\\AdManager\\v202608\\ForecastError',
      'GeoTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\GeoTargeting',
      'InternalApiError' => 'Google\\AdsApi\\AdManager\\v202608\\InternalApiError',
      'InvalidUrlError' => 'Google\\AdsApi\\AdManager\\v202608\\InvalidUrlError',
      'InventorySizeTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventorySizeTargeting',
      'InventoryTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryTargeting',
      'InventoryUrl' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrl',
      'InventoryUrlTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\InventoryUrlTargeting',
      'LabelEntityAssociationError' => 'Google\\AdsApi\\AdManager\\v202608\\LabelEntityAssociationError',
      'LineItemOperationError' => 'Google\\AdsApi\\AdManager\\v202608\\LineItemOperationError',
      'Location' => 'Google\\AdsApi\\AdManager\\v202608\\Location',
      'MarketplaceComment' => 'Google\\AdsApi\\AdManager\\v202608\\MarketplaceComment',
      'MarketplaceCommentPage' => 'Google\\AdsApi\\AdManager\\v202608\\MarketplaceCommentPage',
      'ProposalMarketplaceInfo' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalMarketplaceInfo',
      'MobileApplicationTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileApplicationTargeting',
      'MobileCarrier' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrier',
      'MobileCarrierTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileCarrierTargeting',
      'MobileDevice' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDevice',
      'MobileDeviceSubmodel' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodel',
      'MobileDeviceSubmodelTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceSubmodelTargeting',
      'MobileDeviceTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\MobileDeviceTargeting',
      'Money' => 'Google\\AdsApi\\AdManager\\v202608\\Money',
      'NotNullError' => 'Google\\AdsApi\\AdManager\\v202608\\NotNullError',
      'NullError' => 'Google\\AdsApi\\AdManager\\v202608\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdManager\\v202608\\NumberValue',
      'OperatingSystem' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystem',
      'OperatingSystemTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemTargeting',
      'OperatingSystemVersion' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersion',
      'OperatingSystemVersionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\OperatingSystemVersionTargeting',
      'ParseError' => 'Google\\AdsApi\\AdManager\\v202608\\ParseError',
      'PauseProposals' => 'Google\\AdsApi\\AdManager\\v202608\\PauseProposals',
      'PermissionError' => 'Google\\AdsApi\\AdManager\\v202608\\PermissionError',
      'PrecisionError' => 'Google\\AdsApi\\AdManager\\v202608\\PrecisionError',
      'ProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202608\\ProgrammaticError',
      'ProposalAction' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalAction',
      'ProposalActionError' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalActionError',
      'ProposalCompanyAssociation' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalCompanyAssociation',
      'Proposal' => 'Google\\AdsApi\\AdManager\\v202608\\Proposal',
      'ProposalError' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalError',
      'ProposalLineItemError' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalLineItemError',
      'ProposalLineItemMakegoodError' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalLineItemMakegoodError',
      'ProposalLineItemProgrammaticError' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalLineItemProgrammaticError',
      'ProposalPage' => 'Google\\AdsApi\\AdManager\\v202608\\ProposalPage',
      'PublisherProvidedSignalsTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherProvidedSignalsTargeting',
      'PublisherQueryLanguageContextError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageContextError',
      'PublisherQueryLanguageSyntaxError' => 'Google\\AdsApi\\AdManager\\v202608\\PublisherQueryLanguageSyntaxError',
      'QuotaError' => 'Google\\AdsApi\\AdManager\\v202608\\QuotaError',
      'RangeError' => 'Google\\AdsApi\\AdManager\\v202608\\RangeError',
      'RequestBuyerAcceptance' => 'Google\\AdsApi\\AdManager\\v202608\\RequestBuyerAcceptance',
      'RequestBuyerReview' => 'Google\\AdsApi\\AdManager\\v202608\\RequestBuyerReview',
      'RequestError' => 'Google\\AdsApi\\AdManager\\v202608\\RequestError',
      'RequestPlatformTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\RequestPlatformTargeting',
      'RequiredCollectionError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredCollectionError',
      'RequiredError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredError',
      'RequiredNumberError' => 'Google\\AdsApi\\AdManager\\v202608\\RequiredNumberError',
      'ReserveProposals' => 'Google\\AdsApi\\AdManager\\v202608\\ReserveProposals',
      'ResumeProposals' => 'Google\\AdsApi\\AdManager\\v202608\\ResumeProposals',
      'SalespersonSplit' => 'Google\\AdsApi\\AdManager\\v202608\\SalespersonSplit',
      'AudienceSegmentError' => 'Google\\AdsApi\\AdManager\\v202608\\AudienceSegmentError',
      'ServerError' => 'Google\\AdsApi\\AdManager\\v202608\\ServerError',
      'SetValue' => 'Google\\AdsApi\\AdManager\\v202608\\SetValue',
      'Size' => 'Google\\AdsApi\\AdManager\\v202608\\Size',
      'SoapRequestHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapRequestHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdManager\\v202608\\SoapResponseHeader',
      'Statement' => 'Google\\AdsApi\\AdManager\\v202608\\Statement',
      'StatementError' => 'Google\\AdsApi\\AdManager\\v202608\\StatementError',
      'StringFormatError' => 'Google\\AdsApi\\AdManager\\v202608\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdManager\\v202608\\StringLengthError',
      'String_ValueMapEntry' => 'Google\\AdsApi\\AdManager\\v202608\\String_ValueMapEntry',
      'TargetedSize' => 'Google\\AdsApi\\AdManager\\v202608\\TargetedSize',
      'Targeting' => 'Google\\AdsApi\\AdManager\\v202608\\Targeting',
      'TeamError' => 'Google\\AdsApi\\AdManager\\v202608\\TeamError',
      'Technology' => 'Google\\AdsApi\\AdManager\\v202608\\Technology',
      'TerminateNegotiations' => 'Google\\AdsApi\\AdManager\\v202608\\TerminateNegotiations',
      'TextValue' => 'Google\\AdsApi\\AdManager\\v202608\\TextValue',
      'TimeOfDay' => 'Google\\AdsApi\\AdManager\\v202608\\TimeOfDay',
      'TimeZoneError' => 'Google\\AdsApi\\AdManager\\v202608\\TimeZoneError',
      'TypeError' => 'Google\\AdsApi\\AdManager\\v202608\\TypeError',
      'UnarchiveProposals' => 'Google\\AdsApi\\AdManager\\v202608\\UnarchiveProposals',
      'UniqueError' => 'Google\\AdsApi\\AdManager\\v202608\\UniqueError',
      'UpdateOrderWithSellerData' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateOrderWithSellerData',
      'UpdateResult' => 'Google\\AdsApi\\AdManager\\v202608\\UpdateResult',
      'UserDomainTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\UserDomainTargeting',
      'Value' => 'Google\\AdsApi\\AdManager\\v202608\\Value',
      'VerticalTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VerticalTargeting',
      'VideoPosition' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPosition',
      'VideoPositionTargeting' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTargeting',
      'VideoPositionWithinPod' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionWithinPod',
      'VideoPositionTarget' => 'Google\\AdsApi\\AdManager\\v202608\\VideoPositionTarget',
      'createProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\createProposalsResponse',
      'getMarketplaceCommentsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getMarketplaceCommentsByStatementResponse',
      'getProposalsByStatementResponse' => 'Google\\AdsApi\\AdManager\\v202608\\getProposalsByStatementResponse',
      'performProposalActionResponse' => 'Google\\AdsApi\\AdManager\\v202608\\performProposalActionResponse',
      'updateProposalsResponse' => 'Google\\AdsApi\\AdManager\\v202608\\updateProposalsResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://ads.google.com/apis/ads/publisher/v202608/ProposalService?wsdl')
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
     * @param \Google\AdsApi\AdManager\v202608\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202608\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\MarketplaceCommentPage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getMarketplaceCommentsByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\ProposalPage
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function getProposalsByStatement(\Google\AdsApi\AdManager\v202608\Statement $filterStatement)
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
     * @param \Google\AdsApi\AdManager\v202608\ProposalAction $proposalAction
     * @param \Google\AdsApi\AdManager\v202608\Statement $filterStatement
     * @return \Google\AdsApi\AdManager\v202608\UpdateResult
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function performProposalAction(\Google\AdsApi\AdManager\v202608\ProposalAction $proposalAction, \Google\AdsApi\AdManager\v202608\Statement $filterStatement)
    {
      return $this->__soapCall('performProposalAction', array(array('proposalAction' => $proposalAction, 'filterStatement' => $filterStatement)))->getRval();
    }

    /**
     * Updates the specified {@link Proposal} objects.
     *
     * @param \Google\AdsApi\AdManager\v202608\Proposal[] $proposals
     * @return \Google\AdsApi\AdManager\v202608\Proposal[]
     * @throws \Google\AdsApi\AdManager\v202608\ApiException
     */
    public function updateProposals(array $proposals)
    {
      return $this->__soapCall('updateProposals', array(array('proposals' => $proposals)))->getRval();
    }

}
