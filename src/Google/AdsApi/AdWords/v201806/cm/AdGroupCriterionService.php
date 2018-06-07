<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterion',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLabel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionLabel',
      'AdGroupCriterionLabelOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionLabelOperation',
      'AdGroupCriterionLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionLabelReturnValue',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionLimitExceeded',
      'AdGroupCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionOperation',
      'AdGroupCriterionPage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionPage',
      'AdGroupCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionReturnValue',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdxError',
      'AgeRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AgeRange',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'AppPaymentModel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AppPaymentModel',
      'AppUrl' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AppUrl',
      'AppUrlList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AppUrlList',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\LabelAttribute',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'Bid' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Bid',
      'BiddableAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\BiddableAdGroupCriterion',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\BiddingErrors',
      'BiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\BiddingScheme',
      'BiddingStrategyConfiguration' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\BiddingStrategyConfiguration',
      'Bids' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Bids',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ComparableValue',
      'CpaBid' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CpaBid',
      'CpcBid' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CpcBid',
      'CpmBid' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CpmBid',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionError',
      'CriterionParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionParameter',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionPolicyError',
      'CriterionCustomAffinity' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionCustomAffinity',
      'CriterionCustomIntent' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionCustomIntent',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'ExemptionRequest' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ExemptionRequest',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'ForwardCompatibilityError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ForwardCompatibilityError',
      'Gender' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Gender',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'IncomeRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IncomeRange',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Keyword',
      'Label' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Label',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\LongValue',
      'ManualCpcBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ManualCpcBiddingScheme',
      'ManualCpmBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ManualCpmBiddingScheme',
      'MaximizeConversionValueBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MaximizeConversionValueBiddingScheme',
      'MaximizeConversionsBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MaximizeConversionsBiddingScheme',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Money',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MultiplierError',
      'NegativeAdGroupCriterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NegativeAdGroupCriterion',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Page',
      'PageOnePromotedBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PageOnePromotedBiddingScheme',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PagingError',
      'Parent' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ParentCriterion',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Placement',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'ProductAdwordsGrouping' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductAdwordsGrouping',
      'ProductAdwordsLabels' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductAdwordsLabels',
      'ProductBiddingCategory' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductBiddingCategory',
      'ProductBrand' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductBrand',
      'ProductCanonicalCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductCanonicalCondition',
      'ProductChannel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductChannel',
      'ProductChannelExclusivity' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductChannelExclusivity',
      'ProductLegacyCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductLegacyCondition',
      'ProductCustomAttribute' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductCustomAttribute',
      'ProductDimension' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductDimension',
      'ProductOfferId' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductOfferId',
      'ProductPartition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductPartition',
      'ProductType' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductType',
      'ProductTypeFull' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ProductTypeFull',
      'QualityInfo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QualityInfo',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'String_StringMapEntry' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\String_StringMapEntry',
      'TargetCpaBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TargetCpaBiddingScheme',
      'TargetOutrankShareBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TargetOutrankShareBiddingScheme',
      'TargetRoasBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TargetRoasBiddingScheme',
      'TargetSpendBiddingScheme' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TargetSpendBiddingScheme',
      'UnknownProductDimension' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UnknownProductDimension',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Vertical',
      'Webpage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Webpage',
      'WebpageCondition' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\WebpageCondition',
      'WebpageParameter' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\WebpageParameter',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateResponse',
      'mutateLabelResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateLabelResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/AdGroupCriterionService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Adds, removes or updates adgroup criteria.
     *
     * during checks on keywords to be added.
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
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
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutateLabel(array $operations)
    {
      return $this->__soapCall('mutateLabel', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of AdGroupCriterion that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupCriterionPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
