<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ExperimentSummaryStats
{

    /**
     * @var int $adGroupsCount
     */
    protected $adGroupsCount = null;

    /**
     * @var int $adGroupCriteriaCount
     */
    protected $adGroupCriteriaCount = null;

    /**
     * @var int $adGroupAdsCount
     */
    protected $adGroupAdsCount = null;

    /**
     * @param int $adGroupsCount
     * @param int $adGroupCriteriaCount
     * @param int $adGroupAdsCount
     */
    public function __construct($adGroupsCount = null, $adGroupCriteriaCount = null, $adGroupAdsCount = null)
    {
      $this->adGroupsCount = $adGroupsCount;
      $this->adGroupCriteriaCount = $adGroupCriteriaCount;
      $this->adGroupAdsCount = $adGroupAdsCount;
    }

    /**
     * @return int
     */
    public function getAdGroupsCount()
    {
      return $this->adGroupsCount;
    }

    /**
     * @param int $adGroupsCount
     * @return \Google\AdsApi\AdWords\v201601\cm\ExperimentSummaryStats
     */
    public function setAdGroupsCount($adGroupsCount)
    {
      $this->adGroupsCount = $adGroupsCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupCriteriaCount()
    {
      return $this->adGroupCriteriaCount;
    }

    /**
     * @param int $adGroupCriteriaCount
     * @return \Google\AdsApi\AdWords\v201601\cm\ExperimentSummaryStats
     */
    public function setAdGroupCriteriaCount($adGroupCriteriaCount)
    {
      $this->adGroupCriteriaCount = $adGroupCriteriaCount;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdGroupAdsCount()
    {
      return $this->adGroupAdsCount;
    }

    /**
     * @param int $adGroupAdsCount
     * @return \Google\AdsApi\AdWords\v201601\cm\ExperimentSummaryStats
     */
    public function setAdGroupAdsCount($adGroupAdsCount)
    {
      $this->adGroupAdsCount = $adGroupAdsCount;
      return $this;
    }

}
