<?php

namespace Google\AdsApi\AdWords\v201603\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetSuggestionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Address' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Address',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DoubleValue',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\GeoPoint',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Placement',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Proximity',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Vertical',
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201603\\express\\AdSchedule',
      'BudgetSuggestion' => 'Google\\AdsApi\\AdWords\\v201603\\express\\BudgetSuggestion',
      'BudgetSuggestionSelector' => 'Google\\AdsApi\\AdWords\\v201603\\express\\BudgetSuggestionSelector',
      'BusinessHour' => 'Google\\AdsApi\\AdWords\\v201603\\express\\BusinessHour',
      'ExpressSoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\express\\ExpressSoapHeader',
      'KeywordGroup' => 'Google\\AdsApi\\AdWords\\v201603\\express\\KeywordGroup',
      'KeywordSet' => 'Google\\AdsApi\\AdWords\\v201603\\express\\KeywordSet',
      'NegativeCriterion' => 'Google\\AdsApi\\AdWords\\v201603\\express\\NegativeCriterion',
      'NegativeKeyword' => 'Google\\AdsApi\\AdWords\\v201603\\express\\NegativeKeyword',
      'ProductService' => 'Google\\AdsApi\\AdWords\\v201603\\express\\ProductService',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/express/v201603/BudgetSuggestionService?wsdl')
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
     * Retrieves the budget suggestion for the specified criteria in the given selector based on
     * co-trigger data.
     *
     * @param \Google\AdsApi\AdWords\v201603\express\BudgetSuggestionSelector $selector
     * @return \Google\AdsApi\AdWords\v201603\express\BudgetSuggestion
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201603\express\BudgetSuggestionSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

}
