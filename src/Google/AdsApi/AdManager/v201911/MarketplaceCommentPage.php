<?php

namespace Google\AdsApi\AdManager\v201911;


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
     * @var \Google\AdsApi\AdManager\v201911\MarketplaceComment[] $results
     */
    protected $results = null;

    /**
     * @param int $startIndex
     * @param \Google\AdsApi\AdManager\v201911\MarketplaceComment[] $results
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
     * @return \Google\AdsApi\AdManager\v201911\MarketplaceCommentPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\MarketplaceComment[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\MarketplaceComment[]|null $results
     * @return \Google\AdsApi\AdManager\v201911\MarketplaceCommentPage
     */
    public function setResults(array $results = null)
    {
      $this->results = $results;
      return $this;
    }

}
