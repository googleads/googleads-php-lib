<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class DataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupBidLandscape' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupBidLandscape',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdxError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DoubleValue',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\InternalApiError',
      'LevelOfDetail' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LevelOfDetail',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OperationAccessDenied',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\QueryError',
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
      'DataError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DataError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ComparableValue',
      'CriterionBidLandscape' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionBidLandscape',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DatabaseError',
      'DomainCategory' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DomainCategory',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\ApplicationException',
      'BidLandscape.LandscapePoint' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BidLandscapeLandscapePoint',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Selector',
      'BidLandscape' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\BidLandscape',
      'DimensionProperties' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DimensionProperties',
      'DataEntry' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DataEntry',
      'AdGroupBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\AdGroupBidLandscapePage',
      'CriterionBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\CriterionBidLandscapePage',
      'DomainCategoryPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\DomainCategoryPage',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\NoStatsPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201601\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201601/DataService?wsdl')
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
     * Returns a list of {@link AdGroupBidLandscape}s for the ad groups specified in the selector.
     * In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link AdGroupBidLandscape}s by their ad groups, and numberResults of paging limits the total
     * number of {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscapePage
     */
    public function getAdGroupBidLandscape(\Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getAdGroupBidLandscape', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria specified in the selector.
     * In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their criteria, and numberResults of paging limits the total
     * number of {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionBidLandscapePage
     */
    public function getCriterionBidLandscape(\Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getCriterionBidLandscape', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
     *
     * @param \Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201601\cm\DomainCategoryPage
     */
    public function getDomainCategory(\Google\AdsApi\AdWords\v201601\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getDomainCategory', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of {@link AdGroupBidLandscape}s for the ad groups that match the query. In the
     * result, the returned {@link LandscapePoint}s are grouped into {@link AdGroupBidLandscape}s
     * by their ad groups, and numberResults of paging limits the total number of
     * {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscapePage
     */
    public function queryAdGroupBidLandscape($query)
    {
      return $this->__soapCall('queryAdGroupBidLandscape', array(array('query' => $query)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria that match the query. In the
     * result, the returned {@link LandscapePoint}s are grouped into {@link CriterionBidLandscape}s
     * by their criteria, and numberResults of paging limits the total number of
     * {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201601\cm\CriterionBidLandscapePage
     */
    public function queryCriterionBidLandscape($query)
    {
      return $this->__soapCall('queryCriterionBidLandscape', array(array('query' => $query)))->rval;
    }

    /**
     * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
     *
     * or fetching domain categories.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201601\cm\DomainCategoryPage
     */
    public function queryDomainCategory($query)
    {
      return $this->__soapCall('queryDomainCategory', array(array('query' => $query)))->rval;
    }

}
