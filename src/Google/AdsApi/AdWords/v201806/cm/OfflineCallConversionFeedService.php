<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineCallConversionFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CollectionSizeError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CurrencyCodeError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'OfflineCallConversionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OfflineCallConversionError',
      'OfflineCallConversionFeed' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OfflineCallConversionFeed',
      'OfflineCallConversionFeedOperation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OfflineCallConversionFeedOperation',
      'OfflineConversionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OfflineConversionError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PagingError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'OfflineCallConversionFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OfflineCallConversionFeedReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ListReturnValue',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/OfflineCallConversionFeedService?wsdl')
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
     * Reports a call conversion for each entry in {@code operations}.
     *
     * <p>This bulk operation does not have any transactional guarantees. Some operations can succeed
     * while others fail.
     *
     * <p><b>Note:</b> {@link OfflineCallConversionFeedOperation} supports only the
     * {@code ADD} operator. ({@code SET} and {@code REMOVE} are not supported.)
     *
     * @param \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201806\cm\OfflineCallConversionFeedReturnValue
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
