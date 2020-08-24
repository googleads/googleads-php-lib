<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerExtensionSettingService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'AppFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AppFeedItem',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'CallConversionType' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CallConversionType',
      'CallFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CallFeedItem',
      'CalloutFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CalloutFeedItem',
      'CertificateDomainMismatchConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchConstraint',
      'CertificateDomainMismatchInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateDomainMismatchInCountryConstraint',
      'CertificateMissingConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingConstraint',
      'CertificateMissingInCountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CertificateMissingInCountryConstraint',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'CollectionSizeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CollectionSizeError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ComparableValue',
      'CountryConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CountryConstraint',
      'Criterion' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Criterion',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionError',
      'CustomParameter' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameter',
      'CustomParameters' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomParameters',
      'CustomerExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomerExtensionSetting',
      'CustomerExtensionSettingOperation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomerExtensionSettingOperation',
      'CustomerExtensionSettingPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomerExtensionSettingPage',
      'CustomerExtensionSettingReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CustomerExtensionSettingReturnValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DoubleValue',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\EntityNotFound',
      'ExtensionFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExtensionFeedItem',
      'ExtensionSetting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExtensionSetting',
      'ExtensionSettingError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ExtensionSettingError',
      'FeedItemAdGroupTargeting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemAdGroupTargeting',
      'FeedItemAttributeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemAttributeError',
      'FeedItemCampaignTargeting' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemCampaignTargeting',
      'FeedItemDevicePreference' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemDevicePreference',
      'FeedItemGeoRestriction' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemGeoRestriction',
      'FeedItemPolicySummary' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemPolicySummary',
      'FeedItemSchedule' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemSchedule',
      'FeedItemScheduling' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FeedItemScheduling',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'Keyword' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Keyword',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ListReturnValue',
      'Location' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Location',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LongValue',
      'MessageFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MessageFeedItem',
      'MobileAppCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileAppCategory',
      'MobileApplication' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MobileApplication',
      'Money' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Money',
      'MoneyWithCurrency' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\MoneyWithCurrency',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NumberValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Operation',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Placement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Placement',
      'PolicySummaryInfo' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicySummaryInfo',
      'PolicyTopicConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicConstraint',
      'PolicyTopicEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEntry',
      'PolicyTopicEvidence' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PolicyTopicEvidence',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'PriceFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PriceFeedItem',
      'PriceTableRow' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PriceTableRow',
      'PromotionFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\PromotionFeedItem',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'ResellerConstraint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ResellerConstraint',
      'ReviewFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReviewFeedItem',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'SitelinkFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SitelinkFeedItem',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'StructuredSnippetFeedItem' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StructuredSnippetFeedItem',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlError',
      'UrlList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\UrlList',
      'CriterionUserInterest' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserInterest',
      'CriterionUserList' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionUserList',
      'Vertical' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Vertical',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getResponse',
      'mutateResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\mutateResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/CustomerExtensionSettingService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201809\cm\Selector $selector)
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
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSettingOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSettingReturnValue
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->getRval();
    }

    /**
     * Returns a list of CustomerExtensionSettings that match the query.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerExtensionSettingPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
