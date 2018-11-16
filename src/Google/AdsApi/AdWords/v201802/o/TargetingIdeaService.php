<?php

namespace Google\AdsApi\AdWords\v201802\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TargetingIdeaService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AdGroupCriterionError',
      'AdGroupCriterionLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AdGroupCriterionLimitExceeded',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AuthorizationError',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\BudgetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CriterionError',
      'CriterionPolicyError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CriterionPolicyError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DoubleValue',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NetworkSetting',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\OperatorError',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Placement',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Platform',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\PolicyViolationKey',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SoapResponseHeader',
      'StatsQueryError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\StatsQueryError',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Vertical',
      'Attribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\Attribute',
      'BooleanAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\BooleanAttribute',
      'CategoryProductsAndServicesSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\CategoryProductsAndServicesSearchParameter',
      'CompetitionSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\CompetitionSearchParameter',
      'CriterionAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\CriterionAttribute',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201802\\o\\CurrencyCodeError',
      'DoubleAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\DoubleAttribute',
      'IdeaTextFilterSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\IdeaTextFilterSearchParameter',
      'IdeaTypeAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\IdeaTypeAttribute',
      'IncludeAdultContentSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\IncludeAdultContentSearchParameter',
      'IntegerAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\IntegerAttribute',
      'IntegerSetAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\IntegerSetAttribute',
      'KeywordAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\KeywordAttribute',
      'LanguageSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\LanguageSearchParameter',
      'LocationSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\LocationSearchParameter',
      'LongAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\LongAttribute',
      'LongComparisonOperation' => 'Google\\AdsApi\\AdWords\\v201802\\o\\LongComparisonOperation',
      'LongRangeAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\LongRangeAttribute',
      'MoneyAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\MoneyAttribute',
      'MonthlySearchVolume' => 'Google\\AdsApi\\AdWords\\v201802\\o\\MonthlySearchVolume',
      'MonthlySearchVolumeAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\MonthlySearchVolumeAttribute',
      'NetworkSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\NetworkSearchParameter',
      'Range' => 'Google\\AdsApi\\AdWords\\v201802\\o\\Range',
      'RelatedToQuerySearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\RelatedToQuerySearchParameter',
      'RelatedToUrlSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\RelatedToUrlSearchParameter',
      'SearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\SearchParameter',
      'SearchVolumeSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\SearchVolumeSearchParameter',
      'SeedAdGroupIdSearchParameter' => 'Google\\AdsApi\\AdWords\\v201802\\o\\SeedAdGroupIdSearchParameter',
      'StringAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\StringAttribute',
      'TargetingIdea' => 'Google\\AdsApi\\AdWords\\v201802\\o\\TargetingIdea',
      'TargetingIdeaError' => 'Google\\AdsApi\\AdWords\\v201802\\o\\TargetingIdeaError',
      'TargetingIdeaPage' => 'Google\\AdsApi\\AdWords\\v201802\\o\\TargetingIdeaPage',
      'TargetingIdeaSelector' => 'Google\\AdsApi\\AdWords\\v201802\\o\\TargetingIdeaSelector',
      'TrafficEstimatorError' => 'Google\\AdsApi\\AdWords\\v201802\\o\\TrafficEstimatorError',
      'Type_AttributeMapEntry' => 'Google\\AdsApi\\AdWords\\v201802\\o\\Type_AttributeMapEntry',
      'WebpageDescriptor' => 'Google\\AdsApi\\AdWords\\v201802\\o\\WebpageDescriptor',
      'WebpageDescriptorAttribute' => 'Google\\AdsApi\\AdWords\\v201802\\o\\WebpageDescriptorAttribute',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201802\\o\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/o/v201802/TargetingIdeaService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector $selector
     * @return \Google\AdsApi\AdWords\v201802\o\TargetingIdeaPage
     * @throws \Google\AdsApi\AdWords\v201802\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201802\o\TargetingIdeaSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}
