<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExtensionSettingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'AppFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AppFeedItem',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'CallConversionType' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CallConversionType',
      'CallFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CallFeedItem',
      'CalloutFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CalloutFeedItem',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CollectionSizeError',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomParameters',
      'CustomerExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomerExtensionSetting',
      'CustomerExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomerExtensionSettingOperation',
      'CustomerExtensionSettingPage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomerExtensionSettingPage',
      'CustomerExtensionSettingReturnValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CustomerExtensionSettingReturnValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateRange',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\EntityNotFound',
      'ExtensionFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ExtensionFeedItem',
      'ExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ExtensionSetting',
      'ExtensionSettingError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ExtensionSettingError',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemAttributeError',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemDevicePreference',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemPolicyData',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\FeedItemScheduling',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Location',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\MobileApplication',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NullError',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Placement',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\PolicyData',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'ReviewFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReviewFeedItem',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SelectorError',
      'SitelinkFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SitelinkFeedItem',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'StructuredSnippetFeedItem' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StructuredSnippetFeedItem',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Vertical',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201603/CustomerExtensionSettingService?wsdl')
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
     * Returns a list of CustomerExtensionSettings that meet the selector criteria.
     *
     * CustomerExtensionSettings are returned.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201603\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201603\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Applies the list of mutate operations (add, remove, and set).
     *
     * <p> Beginning in v201509, add and set operations are treated identically. Performing an add
     * operation when there is an existing ExtensionSetting will cause the operation to be
     * treated like a set operation. Performing a set operation when there is no existing
     * ExtensionSetting will cause the operation to be treated like an add operation.
     *
     * specified in more than one operation.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\CustomerExtensionSettingOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201603\cm\CustomerExtensionSettingReturnValue
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

    /**
     * Returns a list of CustomerExtensionSettings that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201603\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
