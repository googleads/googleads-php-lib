<?php

namespace Google\AdsApi\AdWords\v201705\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingIdeaService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionLimitExceeded',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthorizationError',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BudgetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionError',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionPolicyError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DoubleValue',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NetworkSetting',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperatorError',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Placement',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Platform',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationKey',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Vertical',
      'Attribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\Attribute',
      'BooleanAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\BooleanAttribute',
      'CategoryProductsAndServicesSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\CategoryProductsAndServicesSearchParameter',
      'CompetitionSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\CompetitionSearchParameter',
      'CriterionAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\CriterionAttribute',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201705\\o\\CurrencyCodeError',
      'DoubleAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\DoubleAttribute',
      'IdeaTextFilterSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\IdeaTextFilterSearchParameter',
      'IdeaTypeAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\IdeaTypeAttribute',
      'IncludeAdultContentSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\IncludeAdultContentSearchParameter',
      'IntegerAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\IntegerAttribute',
      'IntegerSetAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\IntegerSetAttribute',
      'KeywordAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\KeywordAttribute',
      'LanguageSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\LanguageSearchParameter',
      'LocationSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\LocationSearchParameter',
      'LongAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\LongAttribute',
      'LongComparisonOperation' => 'Google\\AdsApi\\AdWords\\v201705\\o\\LongComparisonOperation',
      'LongRangeAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\LongRangeAttribute',
      'MoneyAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\MoneyAttribute',
      'MonthlySearchVolume' => 'Google\\AdsApi\\AdWords\\v201705\\o\\MonthlySearchVolume',
      'MonthlySearchVolumeAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\MonthlySearchVolumeAttribute',
      'NetworkSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\NetworkSearchParameter',
      'Range' => 'Google\\AdsApi\\AdWords\\v201705\\o\\Range',
      'RelatedToQuerySearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\RelatedToQuerySearchParameter',
      'RelatedToUrlSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\RelatedToUrlSearchParameter',
      'SearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\SearchParameter',
      'SearchVolumeSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\SearchVolumeSearchParameter',
      'SeedAdGroupIdSearchParameter' => 'Google\\AdsApi\\AdWords\\v201705\\o\\SeedAdGroupIdSearchParameter',
      'StringAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\StringAttribute',
      'TargetingIdea' => 'Google\\AdsApi\\AdWords\\v201705\\o\\TargetingIdea',
      'TargetingIdeaError' => 'Google\\AdsApi\\AdWords\\v201705\\o\\TargetingIdeaError',
      'TargetingIdeaPage' => 'Google\\AdsApi\\AdWords\\v201705\\o\\TargetingIdeaPage',
      'TargetingIdeaSelector' => 'Google\\AdsApi\\AdWords\\v201705\\o\\TargetingIdeaSelector',
      'TrafficEstimatorError' => 'Google\\AdsApi\\AdWords\\v201705\\o\\TrafficEstimatorError',
      'Type_AttributeMapEntry' => 'Google\\AdsApi\\AdWords\\v201705\\o\\Type_AttributeMapEntry',
      'WebpageDescriptor' => 'Google\\AdsApi\\AdWords\\v201705\\o\\WebpageDescriptor',
      'WebpageDescriptorAttribute' => 'Google\\AdsApi\\AdWords\\v201705\\o\\WebpageDescriptorAttribute',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201705\\o\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/o/v201705/TargetingIdeaService?wsdl')
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
     * <p>The selector must specify a {@code paging} value, with {@code numberResults} set to 700 or
     * less.  Large result sets must be composed through multiple calls to this method, advancing the
     * paging {@code startIndex} value by {@code numberResults} with each call.</p>
     *
     * finding matches (similar keyword ideas).
     * list of possible ideas meeting the criteria of the
     * {@link TargetingIdeaSelector}.
     *
     * @param \Google\AdsApi\AdWords\v201705\o\TargetingIdeaSelector $selector
     * @return \Google\AdsApi\AdWords\v201705\o\TargetingIdeaPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201705\o\TargetingIdeaSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}
