<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CollectionSizeError',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'FeedItem' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItem',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemAttributeError',
      'FeedItemAttributeValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemAttributeValue',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemDevicePreference',
      'FeedItemError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemError',
      'FeedItemOperation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemOperation',
      'FeedItemPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemPage',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemPolicyData',
      'FeedItemReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemReturnValue',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedItemScheduling',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Location',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MobileApplication',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'NullStatsPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullStatsPage',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Placement',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyData',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QueryError',
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
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Vertical',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201605/FeedItemService?wsdl')
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
     * Returns a list of FeedItems that meet the selector criteria.
     *
     * FeedItems are returned.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Add, remove, and set FeedItems.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\FeedItemOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemReturnValue
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns the list of FeedItems that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201605\cm\FeedItemPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
