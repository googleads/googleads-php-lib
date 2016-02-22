<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class JobStats
{

    /**
     * @var int $progressPercent
     */
    protected $progressPercent = null;

    /**
     * @var int $pendingTimeMillis
     */
    protected $pendingTimeMillis = null;

    /**
     * @var int $processingTimeMillis
     */
    protected $processingTimeMillis = null;

    /**
     * @var string $JobStatsType
     */
    protected $JobStatsType = null;

    /**
     * @param int $progressPercent
     * @param int $pendingTimeMillis
     * @param int $processingTimeMillis
     * @param string $JobStatsType
     */
    public function __construct($progressPercent = null, $pendingTimeMillis = null, $processingTimeMillis = null, $JobStatsType = null)
    {
      $this->progressPercent = $progressPercent;
      $this->pendingTimeMillis = $pendingTimeMillis;
      $this->processingTimeMillis = $processingTimeMillis;
      $this->JobStatsType = $JobStatsType;
    }

    /**
     * @return int
     */
    public function getProgressPercent()
    {
      return $this->progressPercent;
    }

    /**
     * @param int $progressPercent
     * @return \Google\AdsApi\AdWords\v201601\cm\JobStats
     */
    public function setProgressPercent($progressPercent)
    {
      $this->progressPercent = $progressPercent;
      return $this;
    }

    /**
     * @return int
     */
    public function getPendingTimeMillis()
    {
      return $this->pendingTimeMillis;
    }

    /**
     * @param int $pendingTimeMillis
     * @return \Google\AdsApi\AdWords\v201601\cm\JobStats
     */
    public function setPendingTimeMillis($pendingTimeMillis)
    {
      $this->pendingTimeMillis = $pendingTimeMillis;
      return $this;
    }

    /**
     * @return int
     */
    public function getProcessingTimeMillis()
    {
      return $this->processingTimeMillis;
    }

    /**
     * @param int $processingTimeMillis
     * @return \Google\AdsApi\AdWords\v201601\cm\JobStats
     */
    public function setProcessingTimeMillis($processingTimeMillis)
    {
      $this->processingTimeMillis = $processingTimeMillis;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobStatsType()
    {
      return $this->JobStatsType;
    }

    /**
     * @param string $JobStatsType
     * @return \Google\AdsApi\AdWords\v201601\cm\JobStats
     */
    public function setJobStatsType($JobStatsType)
    {
      $this->JobStatsType = $JobStatsType;
      return $this;
    }

}
