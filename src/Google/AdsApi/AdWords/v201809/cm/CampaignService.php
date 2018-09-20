<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CampaignService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Bids',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Budget',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BudgetError',
      'Campaign' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Campaign',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignError',
      'CampaignLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignLabel',
      'CampaignLabelOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignLabelOperation',
      'CampaignLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignLabelReturnValue',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DisplayAttribute',
      'CampaignOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignOperation',
      'CampaignPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignPage',
      'CampaignReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CampaignReturnValue',
      'CertificateDomainMismatchConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchConstraint',
      'CertificateDomainMismatchInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchInCountryConstraint',
      'CertificateMissingConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingConstraint',
      'CertificateMissingInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingInCountryConstraint',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ComparableValue',
      'ConversionOptimizerEligibility' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ConversionOptimizerEligibility',
      'CountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CountryConstraint',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CpmBid',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DoubleValue',
      'DynamicSearchAdsSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DynamicSearchAdsSetting',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ForwardCompatibilityError',
      'FrequencyCap' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FrequencyCap',
      'GeoTargetTypeSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GeoTargetTypeSetting',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'Label' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Label',
      'ListError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListError',
      'ListOperations' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListOperations',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ManualCpmBiddingScheme',
      'MaximizeConversionValueBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MaximizeConversionValueBiddingScheme',
      'MaximizeConversionsBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MaximizeConversionsBiddingScheme',
      'Money' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Money',
      'UniversalAppCampaignSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UniversalAppCampaignSetting',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NetworkSetting',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'PageFeed' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PageFeed',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'PolicyTopicConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicConstraint',
      'PolicyTopicEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEntry',
      'PolicyTopicEvidence' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEvidence',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RealTimeBiddingSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RealTimeBiddingSetting',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'ResellerConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResellerConstraint',
      'SelectiveOptimization' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectiveOptimization',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Setting',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SettingError',
      'ShoppingSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ShoppingSetting',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetOutrankShareBiddingScheme',
      'TargetingSettingDetail' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetingSettingDetail',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetSpendBiddingScheme',
      'TargetingSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TargetingSetting',
      'TrackingSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\TrackingSetting',
      'UniversalAppCampaignAdsPolicyDecisions' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UniversalAppCampaignAdsPolicyDecisions',
      'UniversalAppCampaignInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UniversalAppCampaignInfo',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlError',
      'VanityPharma' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\VanityPharma',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/CampaignService?wsdl')
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
     * Returns the list of campaigns that meet the selector criteria.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, updates, or removes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To remove a campaign, set its
     * {@link Campaign#status status} to {@code REMOVED}.</p>
     * The same campaign cannot be specified in more than one operation.
     * <code>operations</code> array.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\CampaignOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Adds labels to the {@linkplain Campaign campaign} or removes {@linkplain Label label}s from the
     * {@linkplain Campaign campaign}.
     * <p>Add - Apply an existing label to an existing {@linkplain Campaign campaign}. The
     * {@code campaignId} must reference an existing {@linkplain Campaign}. The {@code labelId} must
     * reference an existing {@linkplain Label label}.
     * <p>Remove - Removes the link between the specified {@linkplain Campaign campaign} and
     * {@linkplain Label label}.
     *
     * applying the operation in the input list with the same index. For an
     * add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
     * In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\CampaignLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of campaigns that match the query.
     *
     * information.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\CampaignPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
