<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinityService extends \Google\AdsApi\Common\AdsSoapClient
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
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CollectionSizeError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
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
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CriterionError',
      'CustomAffinity' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinity',
      'CustomAffinityError' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityError',
      'CustomAffinityOperation' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityOperation',
      'CustomAffinityPage' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityPage',
      'CustomAffinityReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityReturnValue',
      'CustomAffinityToken' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityToken',
      'CustomAffinityTokenOperation' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityTokenOperation',
      'CustomAffinityTokenReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\CustomAffinityTokenReturnValue',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\PolicyViolationKey',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\mutateResponse',
      'mutateTokenResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\mutateTokenResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\rm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201809/CustomAffinityService?wsdl')
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
     * Provides the ability to get one or more custom affinity audience with the ability
     * to filter based various criteria.
     *
     * for this customer.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies a list of mutate operations (i.e. add, set) to custom affinity audience:
     *
     * <p>
     * Add - creates a custom affinity audience
     * Set - updates a custom affinity audience
     *
     * <p>
     * Notice that custom affinity tokens are not managed by this method. They are created/deleted by
     * <code>mutateToken</code> method. But when a new custom affinity audience is added, its tokens
     * are also added.
     *
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinityOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Applies a list of mutate operations (i.e. add, remove) to custom affinity tokens:
     *
     * <p>
     * Add - creates a custom affinity token
     * Set - set operation for custom affinity token is not supported
     * Remove - deletes a custom affinity token
     *
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityTokenReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutateToken(array $operations)
    {
      return $this->__soapCall('mutateToken', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of CustomAffinity that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
