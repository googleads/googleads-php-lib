<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MarketplaceCommentPage
{

    /**
     * @var int $startIndex
     */
    protected $startIndex = null;

    /**
     * @var \Google\AdsApi\AdManager\v201805\MarketplaceComment[] $results
     */
    protected $results = null;

    /**
     * @param int $startIndex
     * @param \Google\AdsApi\AdManager\v201805\MarketplaceComment[] $results
     */
    public function __construct($startIndex = null, array $results = null)
    {
      $this->startIndex = $startIndex;
      $this->results = $results;
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
     * @return \Google\AdsApi\AdManager\v201805\MarketplaceCommentPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201805\MarketplaceComment[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201805\MarketplaceComment[] $results
     * @return \Google\AdsApi\AdManager\v201805\MarketplaceCommentPage
     */
    public function setResults(array $results)
    {
      $this->results = $results;
      return $this;
    }

}
