<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineConversionAdjustmentFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CollectionSizeError',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CurrencyCodeError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'GclidOfflineConversionAdjustmentFeed' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\GclidOfflineConversionAdjustmentFeed',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'OfflineConversionAdjustmentError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OfflineConversionAdjustmentError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderIdOfflineConversionAdjustmentFeed' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderIdOfflineConversionAdjustmentFeed',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'OfflineConversionAdjustmentFeed' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OfflineConversionAdjustmentFeed',
      'OfflineConversionAdjustmentFeedOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OfflineConversionAdjustmentFeedOperation',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'OfflineConversionAdjustmentFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OfflineConversionAdjustmentFeedReturnValue',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/OfflineConversionAdjustmentFeedService?wsdl')
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
     * Reports a conversion adjustment for each entry in {@code operations}.
     *
     * <p><b>Note:</b> {@link OfflineConversionAdjustmentFeedOperation} supports only the
     * {@code ADD} operator. ({@code SET} and {@code REMOVE} are not supported.)
     *
     * as the operations.
     * adjustment conversions.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\OfflineConversionAdjustmentFeedReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

}
