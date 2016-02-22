<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdCustomizerFeedService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdCustomizerFeedAttribute' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeedAttribute',
      'AdCustomizerFeedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeedError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'Date' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Date',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'EntityCountLimitExceeded' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityCountLimitExceeded',
      'EntityNotFound' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\EntityNotFound',
      'FeedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\FeedError',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'NewEntityCreationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NewEntityCreationError',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\StringLengthError',
      'AdCustomizerFeed' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeed',
      'AdCustomizerFeedOperation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeedOperation',
      'AdCustomizerFeedPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeedPage',
      'AdCustomizerFeedReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdCustomizerFeedReturnValue',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'ListReturnValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ListReturnValue',
      'Operation' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Operation',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/AdCustomizerFeedService?wsdl')
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
     * Returns a list of AdCustomizerFeeds that meet the selector criteria.
     *
     * are returned.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $selector
     * @return \Google\AdsApi\AdWords\v201601\cm\AdCustomizerFeedPage
     */
    public function get(\Google\AdsApi\AdWords\v201601\cm\Selector $selector)
    {
      return $this->__soapCall('get', array(array('selector' => $selector)))->rval;
    }

    /**
     * Adds, removes, or modifies AdCustomizerFeeds.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\AdCustomizerFeedOperation[] $operations
     * @return \Google\AdsApi\AdWords\v201601\cm\AdCustomizerFeedReturnValue
     */
    public function mutate(array $operations)
    {
      return $this->__soapCall('mutate', array(array('operations' => $operations)))->rval;
    }

}
