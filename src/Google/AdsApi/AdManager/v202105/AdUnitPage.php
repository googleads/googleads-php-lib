<?php

namespace Google\AdsApi\AdManager\v202105;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdUnitPage
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
     * @var \Google\AdsApi\AdManager\v202105\AdUnit[] $results
     */
    protected $results = null;

    /**
     * @param int $totalResultSetSize
     * @param int $startIndex
     * @param \Google\AdsApi\AdManager\v202105\AdUnit[] $results
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
     * @return \Google\AdsApi\AdManager\v202105\AdUnitPage
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
     * @return \Google\AdsApi\AdManager\v202105\AdUnitPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202105\AdUnit[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202105\AdUnit[]|null $results
     * @return \Google\AdsApi\AdManager\v202105\AdUnitPage
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
      return $this;
    }

}
