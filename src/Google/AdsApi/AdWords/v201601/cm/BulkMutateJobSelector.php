<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BulkMutateJobSelector extends \Google\AdsApi\AdWords\v201601\cm\JobSelector
{

    /**
     * @var long[] $jobIds
     */
    protected $jobIds = null;

    /**
     * @var int $resultPartIndex
     */
    protected $resultPartIndex = null;

    /**
     * @param boolean $includeHistory
     * @param boolean $includeStats
     * @param string $JobSelectorType
     * @param long[] $jobIds
     * @param int $resultPartIndex
     */
    public function __construct($includeHistory = null, $includeStats = null, $JobSelectorType = null, array $jobIds = null, $resultPartIndex = null)
    {
      parent::__construct($includeHistory, $includeStats, $JobSelectorType);
      $this->jobIds = $jobIds;
      $this->resultPartIndex = $resultPartIndex;
    }

    /**
     * @return long[]
     */
    public function getJobIds()
    {
      return $this->jobIds;
    }

    /**
     * @param long[] $jobIds
     * @return \Google\AdsApi\AdWords\v201601\cm\BulkMutateJobSelector
     */
    public function setJobIds(array $jobIds)
    {
      $this->jobIds = $jobIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getResultPartIndex()
    {
      return $this->resultPartIndex;
    }

    /**
     * @param int $resultPartIndex
     * @return \Google\AdsApi\AdWords\v201601\cm\BulkMutateJobSelector
     */
    public function setResultPartIndex($resultPartIndex)
    {
      $this->resultPartIndex = $resultPartIndex;
      return $this;
    }

}
