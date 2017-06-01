<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CustomParameters',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateRange',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityNotFound',
      'FeedItem' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItem',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemAttributeError',
      'FeedItemAttributeValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemAttributeValue',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemDevicePreference',
      'FeedItemError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemError',
      'FeedItemGeoRestriction' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemGeoRestriction',
      'FeedItemOperation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemOperation',
      'FeedItemPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemPage',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemPolicyData',
      'FeedItemReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemReturnValue',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedItemScheduling',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\LongValue',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Money',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MoneyWithCurrency',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullError',
      'NullStatsPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullStatsPage',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Placement',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyData',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\UrlError',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Vertical',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201705/FeedItemService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201705\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201705\cm\FeedItemPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201705\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Add, remove, and set FeedItems.
     *
     * @param \Google\AdsApi\AdWords\v201705\cm\FeedItemOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201705\cm\FeedItemReturnValue
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns the list of FeedItems that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201705\cm\FeedItemPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
