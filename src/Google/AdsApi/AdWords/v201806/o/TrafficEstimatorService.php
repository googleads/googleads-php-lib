<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficEstimatorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityAccessDenied',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NetworkSetting',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Placement',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Platform',
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
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Vertical',
      'AdGroupEstimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\AdGroupEstimate',
      'AdGroupEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201806\\o\\AdGroupEstimateRequest',
      'CampaignEstimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\CampaignEstimate',
      'CampaignEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201806\\o\\CampaignEstimateRequest',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201806\\o\\CurrencyCodeError',
      'Estimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\Estimate',
      'EstimateRequest' => 'Google\\AdsApi\\AdWords\\v201806\\o\\EstimateRequest',
      'KeywordEstimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\KeywordEstimate',
      'KeywordEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201806\\o\\KeywordEstimateRequest',
      'PlatformCampaignEstimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\PlatformCampaignEstimate',
      'StatsEstimate' => 'Google\\AdsApi\\AdWords\\v201806\\o\\StatsEstimate',
      'TrafficEstimatorError' => 'Google\\AdsApi\\AdWords\\v201806\\o\\TrafficEstimatorError',
      'TrafficEstimatorResult' => 'Google\\AdsApi\\AdWords\\v201806\\o\\TrafficEstimatorResult',
      'TrafficEstimatorSelector' => 'Google\\AdsApi\\AdWords\\v201806\\o\\TrafficEstimatorSelector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\o\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/o/v201806/TrafficEstimatorService?wsdl')
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
     * Returns traffic estimates for specified criteria.
     *
     * should be estimated.
     *
     * @param \Google\AdsApi\AdWords\v201806\o\TrafficEstimatorSelector $selector
     * @return \Google\AdsApi\AdWords\v201806\o\TrafficEstimatorResult
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\o\TrafficEstimatorSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}
