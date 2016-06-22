<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DraftAsyncErrorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdError',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupAdError',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupCriterionError',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupFeedError',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AdGroupServiceError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\BiddingErrors',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CampaignCriterionError',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CampaignError',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CampaignFeedError',
      'CampaignPreferenceError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CampaignPreferenceError',
      'CampaignSharedSetError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CampaignSharedSetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\CriterionError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DistinctError',
      'DraftError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DraftError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FeedError',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\FunctionError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\IdError',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\InternalApiError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MediaError',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PagingError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SelectorError',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\UrlError',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\VideoError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DatabaseError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\PolicyViolationError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\ApplicationException',
      'DraftAsyncError' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DraftAsyncError',
      'DraftAsyncErrorPage' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\DraftAsyncErrorPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Page',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201605\\cm\\Selector',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201605/DraftAsyncErrorService?wsdl')
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
     * Returns a DraftAsyncErrorPage that contains a list of DraftAsyncErrors matching the selector.
     *
     * while retrieving the results.
     *
     * @param \Google\AdsApi\AdWords\v201605\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201605\cm\DraftAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201605\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Returns a DraftAsyncErrorPage that contains a list of DraftAsyncErrors matching the query.
     *
     * while retrieving the results.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201605\cm\DraftAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201605\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->rval;
    }

}
