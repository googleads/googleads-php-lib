<?php

namespace Google\AdsApi\AdWords\v201605\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'ConversionTrackingSettings' => 'Google\\AdsApi\\AdWords\\v201605\\mcm\\ConversionTrackingSettings',
      'CustomerError' => 'Google\\AdsApi\\AdWords\\v201605\\mcm\\CustomerError',
      'RemarketingSettings' => 'Google\\AdsApi\\AdWords\\v201605\\mcm\\RemarketingSettings',
      'Customer' => 'Google\\AdsApi\\AdWords\\v201605\\mcm\\Customer',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/mcm/v201605/CustomerService?wsdl')
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
     * Returns details of the authorized customer.
     *
     * @return \Google\AdsApi\AdWords\v201605\mcm\Customer
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get()
    {
      return $this->__soapCall('get', array(array()))->rval;
    }

    /**
     * Returns details of all the customers directly accessible by the user authenticating the call.
     * Callers are discouraged from setting the {@code clientCustomerId} header field in calls to
     * {@link CustomerService#getCustomers()}, as its value is ignored by this method, and its
     * presence will trigger an authorization error if the caller does not have access to the
     * customer with the included ID.
     *
     * @return \Google\AdsApi\AdWords\v201605\mcm\Customer[]
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function getCustomers()
    {
      return $this->__soapCall('getCustomers', array(array()))->rval;
    }

    /**
     * Update the authorized customer.
     *
     * <p>While there are a limited set of properties available to update, please read this
     * <a href="https://support.google.com/analytics/answer/1033981">help center article
     * on auto-tagging</a> before updating {@code customer.autoTaggingEnabled}.
     *
     * @param \Google\AdsApi\AdWords\v201605\mcm\Customer $customer
     * @return \Google\AdsApi\AdWords\v201605\mcm\Customer
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(\Google\AdsApi\AdWords\v201605\mcm\Customer $customer)
    {
      return $this->__soapCall('mutate', array(array('customer' => $customer)))->rval;
    }

}
