<?php

namespace Google\AdsApi\AdWords\v201708\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineDataUploadService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\AuthorizationError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DoubleValue',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\InternalApiError',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NotEmptyError',
      'NotWhitelistedError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NotWhitelistedError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RejectedError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\StringLengthError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ComparableValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Selector',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201708\\cm\\Page',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\CollectionSizeError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\CurrencyCodeError',
      'FirstPartyUploadMetadata' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\FirstPartyUploadMetadata',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\MoneyWithCurrency',
      'OfflineData' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineData',
      'OfflineDataUpload' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineDataUpload',
      'OfflineDataUploadError' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineDataUploadError',
      'OfflineDataUploadOperation' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineDataUploadOperation',
      'OfflineDataUploadPage' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineDataUploadPage',
      'OfflineDataUploadReturnValue' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\OfflineDataUploadReturnValue',
      'StoreSalesTransaction' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\StoreSalesTransaction',
      'StoreSalesUploadCommonMetadata' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\StoreSalesUploadCommonMetadata',
      'ThirdPartyUploadMetadata' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\ThirdPartyUploadMetadata',
      'UploadMetadata' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\UploadMetadata',
      'UserIdentifier' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\UserIdentifier',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201708\\rm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/rm/v201708/OfflineDataUploadService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201708\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201708\rm\OfflineDataUploadPage
     * @throws \Google\AdsApi\AdWords\v201708\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201708\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('get', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Uploads offline data for each entry in operations. Some operations can fail for upload level
     * errors like invalid {@code UploadMetadata}. Check {@code OfflineDataUploadReturnValue} for
     * partial failure list.
     *
     * <p><b>Note:</b> Operation might possibly succeed even with errors in {@code OfflineData}. Data
     * errors are reported in {@link OfflineDataUpload#partialDataErrors}
     *
     * <p><b>Note:</b> Supports only the {@code ADD} operator. ({@code SET} and {@code REMOVE} are not
     * supported.
     *
     * @param \Google\AdsApi\AdWords\v201708\rm\OfflineDataUploadOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201708\rm\OfflineDataUploadReturnValue
     * @throws \Google\AdsApi\AdWords\v201708\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
