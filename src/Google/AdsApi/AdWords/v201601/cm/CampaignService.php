<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class CampaignService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Bids',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Budget',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BudgetError',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BudgetOptimizerBiddingScheme',
      'Campaign' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Campaign',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignError',
      'CampaignLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignLabel',
      'CampaignLabelOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignLabelOperation',
      'CampaignLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignLabelReturnValue',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DisplayAttribute',
      'CampaignOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignOperation',
      'CampaignPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignPage',
      'CampaignReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CampaignReturnValue',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ComparableValue',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConversionOptimizerBiddingScheme',
      'ConversionOptimizerEligibility' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ConversionOptimizerEligibility',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CpmBid',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DoubleValue',
      'DynamicSearchAdsSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DynamicSearchAdsSetting',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityNotFound',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ForwardCompatibilityError',
      'FrequencyCap' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FrequencyCap',
      'GeoTargetTypeSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\GeoTargetTypeSetting',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'Label' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ManualCpmBiddingScheme',
      'Money' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NetworkSetting',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RealTimeBiddingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RealTimeBiddingSetting',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'Setting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Setting',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SettingError',
      'ShoppingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ShoppingSetting',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TargetSpendBiddingScheme',
      'TrackingSetting' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\TrackingSetting',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\UrlError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/CampaignService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignPage
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Adds, updates, or removes campaigns.
     * <p class="note"><b>Note:</b> {@link CampaignOperation} does not support the
     * <code>REMOVE</code> operator. To remove a campaign, set its
     * {@link Campaign#status status} to {@code REMOVED}.</p>
     * The same campaign cannot be specified in more than one operation.
     * <code>operations</code> array.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignReturnValue
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Adds labels to the {@linkplain Campaign campaign} or removes
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}s from the
     * {@linkplain Campaign campaign}.
     * <p>Add - Apply an existing label to an existing
     * {@linkplain Campaign campaign}. The {@code campaignId} must reference an existing
     * {@linkplain Campaign}. The {@code labelId} must reference an existing
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * <p>Remove - Removes the link between the specified
     * {@linkplain Campaign campaign} and
     * {@linkplain com.google.ads.api.services.campaignmgmt.label.Label label}.</p>
     * applying the operation in the input list with the same index. For an
     * add operation, the returned CampaignLabel contains the CampaignId and the LabelId.
     * In the case of a remove operation, the returned CampaignLabel will only have CampaignId.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\CampaignLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignLabelReturnValue
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns the list of campaigns that match the query.
     *
     * information.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201601\cm\CampaignPage
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
