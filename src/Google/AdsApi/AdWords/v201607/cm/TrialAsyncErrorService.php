<?php

namespace Google\AdsApi\AdWords\v201607\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrialAsyncErrorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdError',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupAdError',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupCriterionError',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupFeedError',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AdGroupServiceError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\BiddingErrors',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CampaignCriterionError',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CampaignError',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CampaignFeedError',
      'CampaignPreferenceError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CampaignPreferenceError',
      'CampaignSharedSetError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CampaignSharedSetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\CriterionError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\FeedError',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\FunctionError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\IdError',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\InternalApiError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\MediaError',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PagingError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SelectorError',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\UrlError',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\VideoError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\DatabaseError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\PolicyViolationError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Selector',
      'TrialAsyncError' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\TrialAsyncError',
      'TrialAsyncErrorPage' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\TrialAsyncErrorPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201607\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201607/TrialAsyncErrorService?wsdl')
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
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncErrors matching the selector.
     *
     * while retrieving the results.
     *
     * @param \Google\AdsApi\AdWords\v201607\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201607\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201607\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncError matching the query.
     *
     * while retrieving the results.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201607\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201607\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
