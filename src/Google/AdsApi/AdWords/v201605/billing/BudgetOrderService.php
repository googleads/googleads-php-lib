<?php

namespace Google\AdsApi\AdWords\v201605\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOrderService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DoubleValue',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Money',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PagingError',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
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
      'BillingAccount' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BillingAccount',
      'BudgetOrder' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrder',
      'BudgetOrderError' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrderError',
      'BudgetOrderOperation' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrderOperation',
      'BudgetOrderPage' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrderPage',
      'BudgetOrderRequest' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrderRequest',
      'BudgetOrderReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\BudgetOrderReturnValue',
      'CustomerOrderLineError' => 'Google\\AdsApi\\AdWords\\v201605\\billing\\CustomerOrderLineError',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/billing/v201605/BudgetOrderService?wsdl')
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
     * Gets a list of {@link BudgetOrder}s using the generic selector.
     * All BudgetOrder fields are returned. Stats are not yet supported.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201605\billing\BudgetOrderPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns all the open/active BillingAccounts associated with the current
     * manager.
     *
     * @return \Google\AdsApi\AdWords\v201605\billing\BillingAccount[]
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function getBillingAccounts()
    {
      return $this->__soapCall('getBillingAccounts', array(array()))->rval;
    }

    /**
     * Mutates BudgetOrders, supported operations are:
     * <p><code>ADD</code>: Adds a {@link BudgetOrder} to the billing account
     * specified by the billing account ID.</p>
     * <p><code>SET</code>: Sets the start/end date and amount of the
     * {@link BudgetOrder}.</p>
     * <p><code>REMOVE</code>: Cancels the {@link BudgetOrder} (status change).</p>
     * <p class="warning"><b>Warning:</b> The <code>BudgetOrderService</code>
     * is limited to one operation per mutate request. Any attempt to make more
     * than one operation will result in an <code>ApiException</code>.</p>
     * support one operation per mutate call</b>.
     *
     * @param \Google\AdsApi\AdWords\v201605\billing\BudgetOrderOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\billing\BudgetOrderReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}
