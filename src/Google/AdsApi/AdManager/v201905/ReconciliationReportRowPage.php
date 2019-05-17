<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ReconciliationReportRowPage
{

    /**
     * @var int $totalResultSetSize
     */
    protected $totalResultSetSize = null;

    /**
     * @var int $startIndex
     */
    protected $startIndex = null;

    /**
     * @var \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[] $results
     */
    protected $results = null;

    /**
     * @param int $totalResultSetSize
     * @param int $startIndex
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[] $results
     */
    public function __construct($totalResultSetSize = null, $startIndex = null, array $results = null)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      $this->startIndex = $startIndex;
      $this->results = $results;
    }

    /**
     * @return int
     */
    public function getTotalResultSetSize()
    {
      return $this->totalResultSetSize;
    }

    /**
     * @param int $totalResultSetSize
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportRowPage
     */
    public function setTotalResultSetSize($totalResultSetSize)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartIndex()
    {
      return $this->startIndex;
    }

    /**
     * @param int $startIndex
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportRowPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\ReconciliationReportRow[]|null $results
     * @return \Google\AdsApi\AdManager\v201905\ReconciliationReportRowPage
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
      return $this;
    }

}
