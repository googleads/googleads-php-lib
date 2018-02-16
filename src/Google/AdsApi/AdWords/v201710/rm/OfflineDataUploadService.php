<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineDataUploadService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DoubleValue',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ListReturnValue',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\CurrencyCodeError',
      'FirstPartyUploadMetadata' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\FirstPartyUploadMetadata',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\MoneyWithCurrency',
      'OfflineData' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineData',
      'OfflineDataUpload' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineDataUpload',
      'OfflineDataUploadError' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineDataUploadError',
      'OfflineDataUploadOperation' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineDataUploadOperation',
      'OfflineDataUploadPage' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineDataUploadPage',
      'OfflineDataUploadReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\OfflineDataUploadReturnValue',
      'StoreSalesTransaction' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\StoreSalesTransaction',
      'StoreSalesUploadCommonMetadata' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\StoreSalesUploadCommonMetadata',
      'ThirdPartyUploadMetadata' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\ThirdPartyUploadMetadata',
      'UploadMetadata' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\UploadMetadata',
      'UserIdentifier' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\UserIdentifier',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\rm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201710/OfflineDataUploadService?wsdl')
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
     * Returns a list of OfflineDataUpload objects that match the criteria specified in the selector.
     *
     * <p><b>Note:</b> If an upload fails after processing, reason will be reported in {@link
     * OfflineDataUpload#failureReason}.
     *
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201710\rm\OfflineDataUploadPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Applies a list of mutate operations (i.e. add, set) to offline data upload:
     *
     * <p>Add - uploads offline data for each entry in operations. Some operations can fail for upload
     * level errors like invalid {@code UploadMetadata}. Check {@code OfflineDataUploadReturnValue}
     * for partial failure list.
     *
     * <p>Set - updates the upload result for each upload. It is for internal use only.
     *
     * <p><b>Note:</b> For AdWords API, one ADD request can have at most 2000 operations.
     *
     * <p><b>Note:</b> Add operation might possibly succeed even with errors in {@code OfflineData}.
     * Data errors are reported in {@link OfflineDataUpload#partialDataErrors}
     *
     * <p><b>Note:</b> Supports only the {@code ADD} operator. {@code SET} operator is internally used
     * only.({@code REMOVE} is not supported).
     *
     * @param \Google\AdsApi\AdWords\v201710\rm\OfflineDataUploadOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\rm\OfflineDataUploadReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
