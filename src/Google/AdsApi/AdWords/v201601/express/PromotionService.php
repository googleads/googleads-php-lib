<?php

namespace Google\AdsApi\AdWords\v201601\express;

class PromotionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Address' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Address',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'Date' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Date',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DoubleValue',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\GeoPoint',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Proximity',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Vertical',
      'Creative' => 'Google\\AdsApi\\AdWords\\v201601\\express\\Creative',
      'ExpressSoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\express\\ExpressSoapHeader',
      'KeywordGroup' => 'Google\\AdsApi\\AdWords\\v201601\\express\\KeywordGroup',
      'KeywordSet' => 'Google\\AdsApi\\AdWords\\v201601\\express\\KeywordSet',
      'NegativeCriterion' => 'Google\\AdsApi\\AdWords\\v201601\\express\\NegativeCriterion',
      'NegativeKeyword' => 'Google\\AdsApi\\AdWords\\v201601\\express\\NegativeKeyword',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201601\\express\\NoStatsPage',
      'PhoneNumber' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PhoneNumber',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PolicyViolationKey',
      'ProductService' => 'Google\\AdsApi\\AdWords\\v201601\\express\\ProductService',
      'Promotion' => 'Google\\AdsApi\\AdWords\\v201601\\express\\Promotion',
      'PromotionError' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PromotionError',
      'PromotionOperation' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PromotionOperation',
      'PromotionPage' => 'Google\\AdsApi\\AdWords\\v201601\\express\\PromotionPage',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/express/v201601/PromotionService?wsdl')
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
     * Retrieves the promotions that meet the criteria set in the given selector.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201601\express\PromotionPage
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Performs the given {@link PromotionOperation}.
     * specified in more than one operation
     *
     * @param \Google\AdsApi\AdWords\v201601\express\PromotionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\express\Promotion[]
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}
