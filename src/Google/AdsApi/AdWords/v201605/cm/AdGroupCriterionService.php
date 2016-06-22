<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterion',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionError',
      'AdGroupCriterionExperimentBidMultiplier' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionExperimentBidMultiplier',
      'AdGroupCriterionLabel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionLabel',
      'AdGroupCriterionLabelOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionLabelOperation',
      'AdGroupCriterionLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionLabelReturnValue',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionLimitExceeded',
      'AdGroupCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionOperation',
      'AdGroupCriterionPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionPage',
      'AdGroupCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionReturnValue',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'AppPaymentModel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AppPaymentModel',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AppUrl',
      'AppUrlList' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AppUrlList',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'Bid' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Bid',
      'BidMultiplier' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BidMultiplier',
      'BiddableAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddableAdGroupCriterion',
      'BiddableAdGroupCriterionExperimentData' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddableAdGroupCriterionExperimentData',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Bids',
      'BudgetOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BudgetOptimizerBiddingScheme',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ComparableValue',
      'ConversionOptimizerBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ConversionOptimizerBiddingScheme',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CpmBid',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionParameter',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionPolicyError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DoubleValue',
      'EnhancedCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EnhancedCpcBiddingScheme',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ExemptionRequest',
      'ExperimentError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ExperimentError',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ForwardCompatibilityError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Gender',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Keyword',
      'Label' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LongValue',
      'ManualCPCAdGroupCriterionExperimentBidMultiplier' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ManualCPCAdGroupCriterionExperimentBidMultiplier',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ManualCpmBiddingScheme',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MultiplierError',
      'NegativeAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NegativeAdGroupCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Placement',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductOfferId',
      'ProductPartition' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductPartition',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ProductTypeFull',
      'QualityInfo' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QualityInfo',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\TargetSpendBiddingScheme',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UnknownProductDimension',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\YouTubeVideo',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201605/AdGroupCriterionService?wsdl')
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
     * Gets adgroup criteria.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Adds, removes or updates adgroup criteria.
     *
     * during checks on keywords to be added.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Adds labels to the AdGroupCriterion or removes labels from the AdGroupCriterion
     * <p>Add - Apply an existing label to an existing
     * {@linkplain AdGroupCriterion ad group criterion}. The {@code adGroupId} and
     * {@code criterionId}
     * must reference an existing {@linkplain AdGroupCriterion ad group criterion}. The
     * {@code labelId} must reference an existing {@linkplain Label label}.
     * <p>Remove - Removes the link between the specified
     * {@linkplain AdGroupCriterion ad group criterion} and {@linkplain Label label}.</p>
     * applying the operation in the input list with the same index. For an
     * add operation, the returned AdGroupCriterionLabel contains the AdGroupId, CriterionId and the
     * LabelId. In the case of a remove operation, the returned AdGroupCriterionLabel will only have
     * AdGroupId and CriterionId.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns the list of AdGroupCriterion that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201605\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
