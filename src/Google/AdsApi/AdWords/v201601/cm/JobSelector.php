<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class JobSelector
{

    /**
     * @var boolean $includeHistory
     */
    protected $includeHistory = null;

    /**
     * @var boolean $includeStats
     */
    protected $includeStats = null;

    /**
     * @var string $JobSelectorType
     */
    protected $JobSelectorType = null;

    /**
     * @param boolean $includeHistory
     * @param boolean $includeStats
     * @param string $JobSelectorType
     */
    public function __construct($includeHistory = null, $includeStats = null, $JobSelectorType = null)
    {
      $this->includeHistory = $includeHistory;
      $this->includeStats = $includeStats;
      $this->JobSelectorType = $JobSelectorType;
    }

    /**
     * @return boolean
     */
    public function getIncludeHistory()
    {
      return $this->includeHistory;
    }

    /**
     * @param boolean $includeHistory
     * @return \Google\AdsApi\AdWords\v201601\cm\JobSelector
     */
    public function setIncludeHistory($includeHistory)
    {
      $this->includeHistory = $includeHistory;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIncludeStats()
    {
      return $this->includeStats;
    }

    /**
     * @param boolean $includeStats
     * @return \Google\AdsApi\AdWords\v201601\cm\JobSelector
     */
    public function setIncludeStats($includeStats)
    {
      $this->includeStats = $includeStats;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobSelectorType()
    {
      return $this->JobSelectorType;
    }

    /**
     * @param string $JobSelectorType
     * @return \Google\AdsApi\AdWords\v201601\cm\JobSelector
     */
    public function setJobSelectorType($JobSelectorType)
    {
      $this->JobSelectorType = $JobSelectorType;
      return $this;
    }

}
