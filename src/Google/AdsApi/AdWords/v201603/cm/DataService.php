<?php

namespace Google\AdsApi\AdWords\v201603\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupBidLandscape' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdGroupBidLandscape',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdxError',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AuthorizationError',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ClientTermsError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DateRange',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DistinctError',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DoubleValue',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\InternalApiError',
      'LevelOfDetail' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\LevelOfDetail',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Money',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\OrderBy',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\RequiredError',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\SoapResponseHeader',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\StringLengthError',
      'DataError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DataError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ComparableValue',
      'CriterionBidLandscape' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionBidLandscape',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DatabaseError',
      'DomainCategory' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DomainCategory',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\ApplicationException',
      'BidLandscape.LandscapePoint' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BidLandscapeLandscapePoint',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Selector',
      'BidLandscape' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\BidLandscape',
      'DimensionProperties' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DimensionProperties',
      'DataEntry' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DataEntry',
      'AdGroupBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\AdGroupBidLandscapePage',
      'CriterionBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\CriterionBidLandscapePage',
      'DomainCategoryPage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\DomainCategoryPage',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\NoStatsPage',
      'Page' => 'Google\\AdsApi\\AdWords\\v201603\\cm\\Page',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201603/DataService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201603\cm\AdGroupBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function getAdGroupBidLandscape(\Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getAdGroupBidLandscape', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria specified in the
     * selector. In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
     * of paging limits the total number of {@link LandscapePoint}s instead of number of
     * {@link CriterionBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201603\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function getCampaignCriterionBidLandscape(\Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getCampaignCriterionBidLandscape', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria specified in the selector.
     * In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their criteria, and numberResults of paging limits the total
     * number of {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201603\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function getCriterionBidLandscape(\Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getCriterionBidLandscape', array(array('serviceSelector' => $serviceSelector)))->rval;
    }

    /**
     * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
     *
     * @param \Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201603\cm\DomainCategoryPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function getDomainCategory(\Google\AdsApi\AdWords\v201603\cm\Selector $serviceSelector)
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
     * @return \Google\AdsApi\AdWords\v201603\cm\AdGroupBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function queryAdGroupBidLandscape($query)
    {
      return $this->__soapCall('queryAdGroupBidLandscape', array(array('query' => $query)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria that match the
     * query. In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
     * of paging limits the total number of {@link LandscapePoint}s instead of number of
     * {@link CriterionBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201603\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function queryCampaignCriterionBidLandscape($query)
    {
      return $this->__soapCall('queryCampaignCriterionBidLandscape', array(array('query' => $query)))->rval;
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria that match the query. In the
     * result, the returned {@link LandscapePoint}s are grouped into {@link CriterionBidLandscape}s
     * by their criteria, and numberResults of paging limits the total number of
     * {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201603\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
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
     * @return \Google\AdsApi\AdWords\v201603\cm\DomainCategoryPage
     * @throws \Google\AdsApi\AdWords\v201603\cm\ApiException
     */
    public function queryDomainCategory($query)
    {
      return $this->__soapCall('queryDomainCategory', array(array('query' => $query)))->rval;
    }

}
