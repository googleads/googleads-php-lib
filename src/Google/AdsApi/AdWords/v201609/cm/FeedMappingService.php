<?php

namespace Google\AdsApi\AdWords\v201609\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedMappingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApplicationException',
      'AttributeFieldMapping' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AttributeFieldMapping',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ClientTermsError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DistinctError',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\EntityNotFound',
      'FeedMapping' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\FeedMapping',
      'FeedMappingError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\FeedMappingError',
      'FeedMappingOperation' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\FeedMappingOperation',
      'FeedMappingPage' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\FeedMappingPage',
      'FeedMappingReturnValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\FeedMappingReturnValue',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ListReturnValue',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NotEmptyError',
      'NullStatsPage' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NullStatsPage',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringLengthError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201609/FeedMappingService?wsdl')
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
     * Returns a list of FeedMappings that meet the selector criteria.
     *
     * FeedMappings are returned.
     *
     * @param \Google\AdsApi\AdWords\v201609\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201609\cm\FeedMappingPage
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201609\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Add and remove FeedMappings.
     * The following {@link Operator}s are supported: ADD, REMOVE.
     *
     * @param \Google\AdsApi\AdWords\v201609\cm\FeedMappingOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201609\cm\FeedMappingReturnValue
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of FeedMappings that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201609\cm\FeedMappingPage
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
