<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class SimpleMutateJob extends \Google\AdsApi\AdWords\v201601\cm\Job
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\JobEvent[] $history
     */
    protected $history = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\ApiErrorReason $failureReason
     * @param \Google\AdsApi\AdWords\v201601\cm\JobStats $stats
     * @param \Google\AdsApi\AdWords\v201601\cm\BillingSummary $billingSummary
     * @param string $JobType
     * @param int $id
     * @param string $status
     * @param \Google\AdsApi\AdWords\v201601\cm\JobEvent[] $history
     */
    public function __construct($failureReason = null, $stats = null, $billingSummary = null, $JobType = null, $id = null, $status = null, array $history = null)
    {
      parent::__construct($failureReason, $stats, $billingSummary, $JobType);
      $this->id = $id;
      $this->status = $status;
      $this->history = $history;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateJob
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateJob
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\JobEvent[]
     */
    public function getHistory()
    {
      return $this->history;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\JobEvent[] $history
     * @return \Google\AdsApi\AdWords\v201601\cm\SimpleMutateJob
     */
    public function setHistory(array $history)
    {
      $this->history = $history;
      return $this;
    }

}
