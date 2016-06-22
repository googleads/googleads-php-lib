<?php

namespace Google\AdsApi\AdWords\v201605\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PromotionService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'Address' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Address',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Criterion',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DoubleValue',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'GeoPoint' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\GeoPoint',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Keyword',
      'Language' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Language',
      'Location' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Placement',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'Proximity' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Proximity',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Vertical',
      'AdSchedule' => 'Google\\AdsApi\\AdWords\\v201605\\express\\AdSchedule',
      'BusinessHour' => 'Google\\AdsApi\\AdWords\\v201605\\express\\BusinessHour',
      'Creative' => 'Google\\AdsApi\\AdWords\\v201605\\express\\Creative',
      'ExpressSoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\express\\ExpressSoapHeader',
      'KeywordGroup' => 'Google\\AdsApi\\AdWords\\v201605\\express\\KeywordGroup',
      'KeywordSet' => 'Google\\AdsApi\\AdWords\\v201605\\express\\KeywordSet',
      'NegativeCriterion' => 'Google\\AdsApi\\AdWords\\v201605\\express\\NegativeCriterion',
      'NegativeKeyword' => 'Google\\AdsApi\\AdWords\\v201605\\express\\NegativeKeyword',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201605\\express\\NoStatsPage',
      'PhoneNumber' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PhoneNumber',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PolicyViolationKey',
      'ProductService' => 'Google\\AdsApi\\AdWords\\v201605\\express\\ProductService',
      'Promotion' => 'Google\\AdsApi\\AdWords\\v201605\\express\\Promotion',
      'PromotionError' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PromotionError',
      'PromotionOperation' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PromotionOperation',
      'PromotionPage' => 'Google\\AdsApi\\AdWords\\v201605\\express\\PromotionPage',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/express/v201605/PromotionService?wsdl')
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
     * Retrieves the promotions that meet the criteria set in the given selector.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201605\express\PromotionPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Performs the given {@link PromotionOperation}.
     * specified in more than one operation
     *
     * @param \Google\AdsApi\AdWords\v201605\express\PromotionOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\express\Promotion[]
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}
