<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'BudgetError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\BudgetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DoubleValue',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Money',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'Budget' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Budget',
      'BudgetOperation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\BudgetOperation',
      'BudgetPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\BudgetPage',
      'BudgetReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\BudgetReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/BudgetService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201710\cm\BudgetPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Applies the list of mutate operations.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\BudgetOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\cm\BudgetReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of budgets that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\BudgetPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
