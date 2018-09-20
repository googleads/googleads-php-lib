<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DataService extends \Google\AdsApi\Common\AdsSoapClient
{

    /**
     * @var array $classmap The defined classes
     */
    private static $classmap = array (
      'AdGroupBidLandscape' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupBidLandscape',
      'AdGroupBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdGroupBidLandscapePage',
      'AdxError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AdxError',
      'ApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiError',
      'ApiException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApiException',
      'ApplicationException' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ApplicationException',
      'AuthenticationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthenticationError',
      'AuthorizationError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\AuthorizationError',
      'BidLandscape' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BidLandscape',
      'BidLandscape.LandscapePoint' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\BidLandscapeLandscapePoint',
      'ClientTermsError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ClientTermsError',
      'ComparableValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ComparableValue',
      'CriterionBidLandscape' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionBidLandscape',
      'CriterionBidLandscapePage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\CriterionBidLandscapePage',
      'DatabaseError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DatabaseError',
      'DateError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateError',
      'DateRange' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DateRange',
      'DimensionProperties' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DimensionProperties',
      'DistinctError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DistinctError',
      'DomainCategory' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DomainCategory',
      'DomainCategoryPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DomainCategoryPage',
      'DoubleValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DoubleValue',
      'FieldPathElement' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\FieldPathElement',
      'IdError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\IdError',
      'InternalApiError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\InternalApiError',
      'LevelOfDetail' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LevelOfDetail',
      'LongValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\LongValue',
      'Money' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Money',
      'NoStatsPage' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NoStatsPage',
      'NotEmptyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NotEmptyError',
      'NullError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NullError',
      'NumberValue' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\NumberValue',
      'OperationAccessDenied' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperationAccessDenied',
      'OperatorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OperatorError',
      'OrderBy' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\OrderBy',
      'Page' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Page',
      'Paging' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Paging',
      'Predicate' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Predicate',
      'QueryError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QueryError',
      'QuotaCheckError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\QuotaCheckError',
      'RangeError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RangeError',
      'RateExceededError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RateExceededError',
      'ReadOnlyError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\ReadOnlyError',
      'RejectedError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RejectedError',
      'RequestError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequestError',
      'RequiredError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\RequiredError',
      'Selector' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\Selector',
      'SelectorError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SelectorError',
      'SizeLimitError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SizeLimitError',
      'SoapHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapHeader',
      'SoapResponseHeader' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\SoapResponseHeader',
      'StringFormatError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringFormatError',
      'StringLengthError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\StringLengthError',
      'DataEntry' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DataEntry',
      'DataError' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\DataError',
      'getAdGroupBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getAdGroupBidLandscapeResponse',
      'getCampaignCriterionBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getCampaignCriterionBidLandscapeResponse',
      'getCriterionBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getCriterionBidLandscapeResponse',
      'getDomainCategoryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\getDomainCategoryResponse',
      'queryAdGroupBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryAdGroupBidLandscapeResponse',
      'queryCampaignCriterionBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryCampaignCriterionBidLandscapeResponse',
      'queryCriterionBidLandscapeResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryCriterionBidLandscapeResponse',
      'queryDomainCategoryResponse' => 'Google\\AdsApi\\AdWords\\v201809\\cm\\queryDomainCategoryResponse',
    );

    /**
     * @param array $options A array of config values
     * @param string $wsdl The wsdl file to use
     */
    public function __construct(array $options = array(),
                $wsdl = 'https://adwords.google.com/api/adwords/cm/v201809/DataService?wsdl')
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
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getAdGroupBidLandscape(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getAdGroupBidLandscape', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria specified in the
     * selector. In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
     * of paging limits the total number of {@link LandscapePoint}s instead of number of
     * {@link CriterionBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getCampaignCriterionBidLandscape(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getCampaignCriterionBidLandscape', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria specified in the selector.
     * In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their criteria, and numberResults of paging limits the total
     * number of {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getCriterionBidLandscape(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getCriterionBidLandscape', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
     *
     * @param \Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector
     * @return \Google\AdsApi\AdWords\v201809\cm\DomainCategoryPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function getDomainCategory(\Google\AdsApi\AdWords\v201809\cm\Selector $serviceSelector)
    {
      return $this->__soapCall('getDomainCategory', array(array('serviceSelector' => $serviceSelector)))->getRval();
    }

    /**
     * Returns a list of {@link AdGroupBidLandscape}s for the ad groups that match the query. In the
     * result, the returned {@link LandscapePoint}s are grouped into {@link AdGroupBidLandscape}s
     * by their ad groups, and numberResults of paging limits the total number of
     * {@link LandscapePoint}s instead of number of {@link AdGroupBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function queryAdGroupBidLandscape($query)
    {
      return $this->__soapCall('queryAdGroupBidLandscape', array(array('query' => $query)))->getRval();
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the campaign criteria that match the
     * query. In the result, the returned {@link LandscapePoint}s are grouped into
     * {@link CriterionBidLandscape}s by their campaign id and criterion id, and numberResults
     * of paging limits the total number of {@link LandscapePoint}s instead of number of
     * {@link CriterionBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function queryCampaignCriterionBidLandscape($query)
    {
      return $this->__soapCall('queryCampaignCriterionBidLandscape', array(array('query' => $query)))->getRval();
    }

    /**
     * Returns a list of {@link CriterionBidLandscape}s for the criteria that match the query. In the
     * result, the returned {@link LandscapePoint}s are grouped into {@link CriterionBidLandscape}s
     * by their criteria, and numberResults of paging limits the total number of
     * {@link LandscapePoint}s instead of number of {@link CriterionBidLandscape}s.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\CriterionBidLandscapePage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function queryCriterionBidLandscape($query)
    {
      return $this->__soapCall('queryCriterionBidLandscape', array(array('query' => $query)))->getRval();
    }

    /**
     * Returns a list of domain categories that can be used to create {@link WebPage} criterion.
     *
     * or fetching domain categories.
     *
     * @param string $query
     * @return \Google\AdsApi\AdWords\v201809\cm\DomainCategoryPage
     * @throws \Google\AdsApi\AdWords\v201809\cm\ApiException
     */
    public function queryDomainCategory($query)
    {
      return $this->__soapCall('queryDomainCategory', array(array('query' => $query)))->getRval();
    }

}
