<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class Job
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\ApiErrorReason $failureReason
     */
    protected $failureReason = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\JobStats $stats
     */
    protected $stats = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\BillingSummary $billingSummary
     */
    protected $billingSummary = null;

    /**
     * @var string $JobType
     */
    protected $JobType = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiErrorReason $failureReason
     * @param \Google\AdsApi\AdWords\v201601\cm\JobStats $stats
     * @param \Google\AdsApi\AdWords\v201601\cm\BillingSummary $billingSummary
     * @param string $JobType
     */
    public function __construct($failureReason = null, $stats = null, $billingSummary = null, $JobType = null)
    {
      $this->failureReason = $failureReason;
      $this->stats = $stats;
      $this->billingSummary = $billingSummary;
      $this->JobType = $JobType;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\ApiErrorReason
     */
    public function getFailureReason()
    {
      return $this->failureReason;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiErrorReason $failureReason
     * @return \Google\AdsApi\AdWords\v201601\cm\Job
     */
    public function setFailureReason($failureReason)
    {
      $this->failureReason = $failureReason;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\JobStats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\JobStats $stats
     * @return \Google\AdsApi\AdWords\v201601\cm\Job
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\BillingSummary
     */
    public function getBillingSummary()
    {
      return $this->billingSummary;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\BillingSummary $billingSummary
     * @return \Google\AdsApi\AdWords\v201601\cm\Job
     */
    public function setBillingSummary($billingSummary)
    {
      $this->billingSummary = $billingSummary;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobType()
    {
      return $this->JobType;
    }

    /**
     * @param string $JobType
     * @return \Google\AdsApi\AdWords\v201601\cm\Job
     */
    public function setJobType($JobType)
    {
      $this->JobType = $JobType;
      return $this;
    }

}
