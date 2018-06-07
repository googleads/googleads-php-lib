<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupBidModifierService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupBidModifier' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupBidModifier',
      'AdGroupBidModifierOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupBidModifierOperation',
      'AdGroupBidModifierPage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupBidModifierPage',
      'AdGroupBidModifierReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupBidModifierReturnValue',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ListReturnValue',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Platform',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'PreferredContent' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PreferredContent',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/AdGroupBidModifierService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifierPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Adds, removes or updates ad group bid modifier overrides.
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifierOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifierReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of {@link AdGroupBidModifier}s that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201806\cm\AdGroupBidModifierPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
