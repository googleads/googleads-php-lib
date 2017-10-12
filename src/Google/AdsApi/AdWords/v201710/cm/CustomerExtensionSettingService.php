<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExtensionSettingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'AppFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AppFeedItem',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'CallConversionType' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CallConversionType',
      'CallFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CallFeedItem',
      'CalloutFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CalloutFeedItem',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ComparableValue',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomParameters',
      'CustomerExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomerExtensionSetting',
      'CustomerExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomerExtensionSettingOperation',
      'CustomerExtensionSettingPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomerExtensionSettingPage',
      'CustomerExtensionSettingReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CustomerExtensionSettingReturnValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DisapprovalReason' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DisapprovalReason',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'ExtensionFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ExtensionFeedItem',
      'ExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ExtensionSetting',
      'ExtensionSettingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ExtensionSettingError',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemAttributeError',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemDevicePreference',
      'FeedItemGeoRestriction' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemGeoRestriction',
      'FeedItemPolicyData' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemPolicyData',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedItemScheduling',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\LongValue',
      'MessageFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MessageFeedItem',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Money',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MoneyWithCurrency',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Placement',
      'PolicyData' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PolicyData',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'PriceFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PriceFeedItem',
      'PriceTableRow' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PriceTableRow',
      'PromotionFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PromotionFeedItem',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'ReviewFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReviewFeedItem',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SitelinkFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SitelinkFeedItem',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'StructuredSnippetFeedItem' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StructuredSnippetFeedItem',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Vertical',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/CustomerExtensionSettingService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
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
     * @param \Google\AdsApi\AdWords\v201710\cm\CustomerExtensionSettingOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomerExtensionSettingReturnValue
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of CustomerExtensionSettings that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
