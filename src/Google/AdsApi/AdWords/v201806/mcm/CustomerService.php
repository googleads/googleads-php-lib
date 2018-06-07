<?php

namespace Google\AdsApi\AdWords\v201806\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlError',
      'ConversionTrackingSettings' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\ConversionTrackingSettings',
      'Customer' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\Customer',
      'CustomerError' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\CustomerError',
      'RemarketingSettings' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\RemarketingSettings',
      'ServiceLink' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\ServiceLink',
      'ServiceLinkOperation' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\ServiceLinkOperation',
      'getCustomersResponse' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\getCustomersResponse',
      'getServiceLinksResponse' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\getServiceLinksResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\mutateResponse',
      'mutateServiceLinksResponse' => 'Google\\AdsApi\\AdWords\\v201806\\mcm\\mutateServiceLinksResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/mcm/v201806/CustomerService?wsdl')
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
     * Returns details of all the customers directly accessible by the user authenticating the call.
     * <p>
     * Note: This method will return only test accounts if the developer token used has not been
     * approved.
     * <p>
     * Starting with v201607, if {@code clientCustomerId} is specified in the request header,
     * only details of that customer will be returned. To do this for prior versions, use the
     * {@code get()} method instead.
     *
     * @return \Google\AdsApi\AdWords\v201806\mcm\Customer[]
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function getCustomers()
    {
      return $this->__soapCall('getCustomers', array(array()))->getRval();
    }

    /**
     * Retrieves the list of service links for the authorized customer.
     * See {@link ServiceType} for information on the various linking types supported.
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201806\mcm\ServiceLink[]
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function getServiceLinks(\Google\AdsApi\AdWords\v201806\cm\Selector $selector)
    {
      return $this->__soapCall('getServiceLinks', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Update the authorized customer.
     *
     * <p>While there are a limited set of properties available to update, please read this
     * <a href="https://support.google.com/analytics/answer/1033981">help center article
     * on auto-tagging</a> before updating {@code customer.autoTaggingEnabled}.
     *
     * @param \Google\AdsApi\AdWords\v201806\mcm\Customer $customer
     * @return \Google\AdsApi\AdWords\v201806\mcm\Customer
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(\Google\AdsApi\AdWords\v201806\mcm\Customer $customer)
    {
      return $this->__soapCall('mutate', array(array('customer' => $customer)))->getRval();
    }

    /**
     * Modifies links to other services for the authorized customer.
     * See {@link ServiceType} for information on the various linking types supported.
     *
     * @param \Google\AdsApi\AdWords\v201806\mcm\ServiceLinkOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\mcm\ServiceLink[]
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutateServiceLinks(array $operations)
    {
      return $this->__soapCall('mutateServiceLinks', array(array('operations' => $operations)))->getRval();
    }

}
