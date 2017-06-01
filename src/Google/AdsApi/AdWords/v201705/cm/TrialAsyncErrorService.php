<?php

namespace Google\AdsApi\AdWords\v201705\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrialAsyncErrorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdError',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupAdError',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupCriterionError',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupFeedError',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdGroupServiceError',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AdSharingError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\BiddingErrors',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CampaignCriterionError',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CampaignError',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CampaignFeedError',
      'CampaignPreferenceError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CampaignPreferenceError',
      'CampaignSharedSetError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CampaignSharedSetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\CriterionError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FeedError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FieldPathElement',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\FunctionError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\IdError',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\InternalApiError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MediaError',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PagingError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SelectorError',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\UrlError',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\VideoError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\DatabaseError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\PolicyViolationError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Selector',
      'TrialAsyncError' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TrialAsyncError',
      'TrialAsyncErrorPage' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\TrialAsyncErrorPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\Page',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\getResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201705\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201705/TrialAsyncErrorService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201705\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201705\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201705\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncError matching the query.
     *
     * while retrieving the results.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201705\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201705\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
