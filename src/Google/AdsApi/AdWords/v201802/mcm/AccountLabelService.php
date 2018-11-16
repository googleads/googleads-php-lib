<?php

namespace Google\AdsApi\AdWords\v201802\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AccountLabelService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\CollectionSizeError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DatabaseError',
      'Date' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Date',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\DistinctError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201802\\cm\\StringLengthError',
      'AccountLabelPage' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\AccountLabelPage',
      'AccountLabelReturnValue' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\AccountLabelReturnValue',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\CurrencyCodeError',
      'AccountLabel' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\AccountLabel',
      'LabelServiceError' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\LabelServiceError',
      'AccountLabelOperation' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\AccountLabelOperation',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201802\\mcm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/mcm/v201802/AccountLabelService?wsdl')
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
     * Returns a list of labels specified by the selector for the authenticated user.
     *
     * @param \Google\AdsApi\AdWords\v201802\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201802\mcm\AccountLabelPage
     * @throws \Google\AdsApi\AdWords\v201802\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201802\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Possible actions:
     * <ul>
     * <li> Create a new label - create a new {@link Label} and call mutate with ADD operator
     * <li> Edit the label name - set the appropriate fields in your {@linkplain Label} and call
     * mutate with the SET operator. Null fields will be interpreted to mean "no change"
     * <li> Delete the label - call mutate with REMOVE operator
     * </ul>
     *
     * order specified.
     *
     * @param \Google\AdsApi\AdWords\v201802\mcm\AccountLabelOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201802\mcm\AccountLabelReturnValue
     * @throws \Google\AdsApi\AdWords\v201802\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
