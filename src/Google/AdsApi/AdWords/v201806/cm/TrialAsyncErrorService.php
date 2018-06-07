<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TrialAsyncErrorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdError',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupAdError',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupCriterionError',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupFeedError',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdGroupServiceError',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AdSharingError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\BiddingErrors',
      'CampaignBidModifierError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignBidModifierError',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignCriterionError',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignError',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignFeedError',
      'CampaignPreferenceError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignPreferenceError',
      'CampaignSharedSetError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CampaignSharedSetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\CriterionError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\DistinctError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FeedError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FieldPathElement',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\FunctionError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\IdError',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\InternalApiError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MediaError',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PagingError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SelectorError',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\StringLengthError',
      'TrialAsyncError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TrialAsyncError',
      'TrialAsyncErrorPage' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\TrialAsyncErrorPage',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\UrlError',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\VideoError',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\getResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201806\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201806/TrialAsyncErrorService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201806\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201806\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201806\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Returns a TrialAsyncErrorPage that contains a list of TrialAsyncError matching the query.
     *
     * while retrieving the results.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201806\cm\TrialAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201806\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
