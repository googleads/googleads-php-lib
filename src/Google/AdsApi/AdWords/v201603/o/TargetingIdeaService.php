<?php

namespace Google\AdsApi\AdWords\v201603\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingIdeaService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdGroupCriterionLimitExceeded',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BudgetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionError',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionPolicyError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DoubleValue',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NetworkSetting',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Placement',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Platform',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\PolicyViolationKey',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Vertical',
      'Attribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\Attribute',
      'BooleanAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\BooleanAttribute',
      'CategoryProductsAndServicesSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\CategoryProductsAndServicesSearchParameter',
      'CompetitionSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\CompetitionSearchParameter',
      'CriterionAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\CriterionAttribute',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201603\\o\\CurrencyCodeError',
      'DoubleAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\DoubleAttribute',
      'IdeaTextFilterSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\IdeaTextFilterSearchParameter',
      'IdeaTypeAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\IdeaTypeAttribute',
      'IncludeAdultContentSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\IncludeAdultContentSearchParameter',
      'IntegerAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\IntegerAttribute',
      'IntegerSetAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\IntegerSetAttribute',
      'KeywordAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\KeywordAttribute',
      'LanguageSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\LanguageSearchParameter',
      'LocationSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\LocationSearchParameter',
      'LongAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\LongAttribute',
      'LongComparisonOperation' => 'Google\\AdsApi\\AdWords\\v201603\\o\\LongComparisonOperation',
      'LongRangeAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\LongRangeAttribute',
      'MoneyAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\MoneyAttribute',
      'MonthlySearchVolume' => 'Google\\AdsApi\\AdWords\\v201603\\o\\MonthlySearchVolume',
      'MonthlySearchVolumeAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\MonthlySearchVolumeAttribute',
      'NetworkSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\NetworkSearchParameter',
      'Range' => 'Google\\AdsApi\\AdWords\\v201603\\o\\Range',
      'RelatedToQuerySearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\RelatedToQuerySearchParameter',
      'RelatedToUrlSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\RelatedToUrlSearchParameter',
      'SearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\SearchParameter',
      'SearchVolumeSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\SearchVolumeSearchParameter',
      'SeedAdGroupIdSearchParameter' => 'Google\\AdsApi\\AdWords\\v201603\\o\\SeedAdGroupIdSearchParameter',
      'StringAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\StringAttribute',
      'TargetingIdea' => 'Google\\AdsApi\\AdWords\\v201603\\o\\TargetingIdea',
      'TargetingIdeaError' => 'Google\\AdsApi\\AdWords\\v201603\\o\\TargetingIdeaError',
      'TargetingIdeaPage' => 'Google\\AdsApi\\AdWords\\v201603\\o\\TargetingIdeaPage',
      'TargetingIdeaSelector' => 'Google\\AdsApi\\AdWords\\v201603\\o\\TargetingIdeaSelector',
      'TrafficEstimatorError' => 'Google\\AdsApi\\AdWords\\v201603\\o\\TrafficEstimatorError',
      'Type_AttributeMapEntry' => 'Google\\AdsApi\\AdWords\\v201603\\o\\Type_AttributeMapEntry',
      'WebpageDescriptor' => 'Google\\AdsApi\\AdWords\\v201603\\o\\WebpageDescriptor',
      'WebpageDescriptorAttribute' => 'Google\\AdsApi\\AdWords\\v201603\\o\\WebpageDescriptorAttribute',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/o/v201603/TargetingIdeaService?wsdl')
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
     * Returns a page of ideas that match the query described by the specified
     * {@link TargetingIdeaSelector}.
     *
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 800 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.</p>
     *
     * finding matches (similar keyword ideas).
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     *
     * @param \Google\AdsApi\AdWords\v201603\o\TargetingIdeaSelector $selector
     * @return \Google\AdsApi\AdWords\v201603\o\TargetingIdeaPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201603\o\TargetingIdeaSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

}
