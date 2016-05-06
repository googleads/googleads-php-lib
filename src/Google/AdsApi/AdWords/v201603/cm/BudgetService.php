<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BudgetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DoubleValue',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Money',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Selector',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Budget',
      'BudgetOperation' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BudgetOperation',
      'BudgetPage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BudgetPage',
      'BudgetReturnValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BudgetReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201603/BudgetService?wsdl')
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
     * Returns a list of budgets that match the selector.
     *
     * occurred while retrieving results.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201603\cm\BudgetPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201603\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Applies the list of mutate operations.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\BudgetOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201603\cm\BudgetReturnValue
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns the list of budgets that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201603\cm\BudgetPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
