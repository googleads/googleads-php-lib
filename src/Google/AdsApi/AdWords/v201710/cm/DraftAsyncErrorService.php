<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DraftAsyncErrorService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdError',
      'AdGroupAdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdGroupAdError',
      'AdGroupCriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdGroupCriterionError',
      'AdGroupFeedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdGroupFeedError',
      'AdGroupServiceError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdGroupServiceError',
      'AdSharingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AdSharingError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\AuthorizationError',
      'BiddingErrors' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\BiddingErrors',
      'CampaignBidModifierError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignBidModifierError',
      'CampaignCriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignCriterionError',
      'CampaignError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignError',
      'CampaignFeedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignFeedError',
      'CampaignPreferenceError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignPreferenceError',
      'CampaignSharedSetError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CampaignSharedSetError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ClientTermsError',
      'CriterionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\CriterionError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRange',
      'DateRangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DateRangeError',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DistinctError',
      'DraftError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DraftError',
      'EntityAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityAccessDenied',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FeedError',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FieldPathElement',
      'FunctionError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\FunctionError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\IdError',
      'ImageError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ImageError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\InternalApiError',
      'MediaError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MediaError',
      'MultiplierError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\MultiplierError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Paging',
      'PagingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PagingError',
      'PolicyViolationError.Part' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PolicyViolationErrorPart',
      'PolicyViolationKey' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PolicyViolationKey',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SelectorError',
      'SettingError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SettingError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\StringLengthError',
      'UrlError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\UrlError',
      'VideoError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\VideoError',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DatabaseError',
      'PolicyViolationError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\PolicyViolationError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\ApplicationException',
      'DraftAsyncError' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DraftAsyncError',
      'DraftAsyncErrorPage' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\DraftAsyncErrorPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Page',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\Selector',
      'getResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\getResponse',
      'queryResponse' => 'Google\\AdsApi\\AdWords\\v201710\\cm\\queryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201710/DraftAsyncErrorService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201710\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201710\cm\DraftAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function get(\Google\AdsApi\AdWords\v201710\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->getRval();
    }

    /**
     * Returns a DraftAsyncErrorPage that contains a list of DraftAsyncErrors matching the query.
     *
     * while retrieving the results.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201710\cm\DraftAsyncErrorPage
     * @throws \Google\AdsApi\AdWords\v201710\cm\ApiException
     */
    public function query($query)
    {
      return $this->__soapCall('query', array(array('query' => $query)))->getRval();
    }

}
