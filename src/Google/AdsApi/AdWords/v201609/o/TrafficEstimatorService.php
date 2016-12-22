<?php

namespace Google\AdsApi\AdWords\v201609\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrafficEstimatorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DateError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\EntityAccessDenied',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\EntityNotFound',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Money',
      'NetworkSetting' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NetworkSetting',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\OperatorError',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Placement',
      'Platform' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Platform',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\ReadOnlyError',
      'RegionCodeError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RegionCodeError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\RequiredError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201609\\cm\\Vertical',
      'AdGroupEstimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\AdGroupEstimate',
      'AdGroupEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201609\\o\\AdGroupEstimateRequest',
      'CampaignEstimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\CampaignEstimate',
      'CampaignEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201609\\o\\CampaignEstimateRequest',
      'CurrencyCodeError' => 'Google\\AdsApi\\AdWords\\v201609\\o\\CurrencyCodeError',
      'Estimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\Estimate',
      'EstimateRequest' => 'Google\\AdsApi\\AdWords\\v201609\\o\\EstimateRequest',
      'KeywordEstimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\KeywordEstimate',
      'KeywordEstimateRequest' => 'Google\\AdsApi\\AdWords\\v201609\\o\\KeywordEstimateRequest',
      'PlatformCampaignEstimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\PlatformCampaignEstimate',
      'StatsEstimate' => 'Google\\AdsApi\\AdWords\\v201609\\o\\StatsEstimate',
      'TrafficEstimatorError' => 'Google\\AdsApi\\AdWords\\v201609\\o\\TrafficEstimatorError',
      'TrafficEstimatorResult' => 'Google\\AdsApi\\AdWords\\v201609\\o\\TrafficEstimatorResult',
      'TrafficEstimatorSelector' => 'Google\\AdsApi\\AdWords\\v201609\\o\\TrafficEstimatorSelector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201609\\o\\getResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/o/v201609/TrafficEstimatorService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201609\o\TrafficEstimatorSelector $selector
     * @return \Google\AdsApi\AdWords\v201609\o\TrafficEstimatorResult
     * @throws \Google\AdsApi\AdWords\v201609\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201609\o\TrafficEstimatorSelector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

}
