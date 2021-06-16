<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItemPage
{

    /**
     * @var \Google\AdsApi\AdManager\v202102\ProposalLineItem[] $results
     */
    protected $results = null;

    /**
     * @var int $startIndex
     */
    protected $startIndex = null;

    /**
     * @var int $totalResultSetSize
     */
    protected $totalResultSetSize = null;

    /**
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItem[] $results
     * @param int $startIndex
     * @param int $totalResultSetSize
     */
    public function __construct(array $results = null, $startIndex = null, $totalResultSetSize = null)
    {
      $this->results = $results;
      $this->startIndex = $startIndex;
      $this->totalResultSetSize = $totalResultSetSize;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItem[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\ProposalLineItem[]|null $results
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItemPage
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
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
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItemPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202102\ProposalLineItemPage
     */
    public function setTotalResultSetSize($totalResultSetSize)
    {
      $this->totalResultSetSize = $totalResultSetSize;
      return $this;
    }

}
