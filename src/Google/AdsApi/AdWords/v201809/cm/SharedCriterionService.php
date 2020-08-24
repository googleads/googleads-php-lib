<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedCriterionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileApplication',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'SharedCriterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SharedCriterion',
      'SharedCriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SharedCriterionError',
      'SharedCriterionOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SharedCriterionOperation',
      'SharedCriterionPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SharedCriterionPage',
      'SharedCriterionReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SharedCriterionReturnValue',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Vertical',
      'YouTubeChannel' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeChannel',
      'YouTubeVideo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\YouTubeVideo',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/SharedCriterionService?wsdl')
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
     * Returns a list of SharedCriterion that meets the selector criteria.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterionPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Adds, removes criteria in a shared set.
     *
     * {@code operations} array.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\SharedCriterionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterionReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of SharedCriterion that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterionPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
