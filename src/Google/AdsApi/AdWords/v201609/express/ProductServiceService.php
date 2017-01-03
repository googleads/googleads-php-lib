<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductServiceService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ClientTermsError',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Keyword',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\MobileApplication',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Predicate',
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
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Vertical',
      'ProductService' => 'Google\\AdsApi\\AdWords\\v201609\\express\\ProductService',
      'ProductServicePage' => 'Google\\AdsApi\\AdWords\\v201609\\express\\ProductServicePage',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201609\\express\\NoStatsPage',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201609\\express\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/express/v201609/ProductServiceService?wsdl')
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
     * Retrieves the {@link ProductService}s that meet the criteria set in the given selector. Only a
     * limited number of {@link ProductService}s are returned.
     *
     * @param \Google\AdsApi\AdWords\v201609\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201609\express\ProductServicePage
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201609\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}
