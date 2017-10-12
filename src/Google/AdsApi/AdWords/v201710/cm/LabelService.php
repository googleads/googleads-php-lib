<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LabelService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'TextLabel' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\TextLabel',
      'DisplayAttribute' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DisplayAttribute',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'LabelError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LabelError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PagingError',
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
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'LabelAttribute' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LabelAttribute',
      'Label' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Label',
      'LabelOperation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LabelOperation',
      'LabelPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LabelPage',
      'LabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LabelReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ListReturnValue',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NoStatsPage',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/LabelService?wsdl')
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
     * Returns a list of {@link Label}s.
     *
     * selector.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201710\cm\LabelPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies the list of mutate operations.
     *
     * more than one operation.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\LabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\cm\LabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of {@link Label}s that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\LabelPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
