<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataValuePage
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
     * @var \Google\AdsApi\AdManager\v201911\CmsMetadataValue[] $results
     */
    protected $results = null;

    /**
     * @param int $totalResultSetSize
     * @param int $startIndex
     * @param \Google\AdsApi\AdManager\v201911\CmsMetadataValue[] $results
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
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValuePage
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
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValuePage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValue[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CmsMetadataValue[]|null $results
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataValuePage
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
      return $this;
    }

}
