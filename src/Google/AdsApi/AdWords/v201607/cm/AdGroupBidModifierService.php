<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupBidModifierService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CriterionError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\InternalApiError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NotEmptyError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Paging',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Platform',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Predicate',
      'PreferredContent' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PreferredContent',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Selector',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Criterion',
      'AdGroupBidModifier' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupBidModifier',
      'AdGroupBidModifierOperation' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupBidModifierOperation',
      'AdGroupBidModifierPage' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupBidModifierPage',
      'AdGroupBidModifierReturnValue' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupBidModifierReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201607/AdGroupBidModifierService?wsdl')
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
     * Gets ad group level criterion bid modifiers.
     *
     * @param \Google\AdsApi\AdWords\v201607\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupBidModifierPage
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201607\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Adds, removes or updates ad group bid modifier overrides.
     *
     * @param \Google\AdsApi\AdWords\v201607\cm\AdGroupBidModifierOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupBidModifierReturnValue
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns a list of {@link AdGroupBidModifier}s that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201607\cm\AdGroupBidModifierPage
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
