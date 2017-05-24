<?php

namespace Google\AdsApi\Dfp\v201705;


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
     * @var \Google\AdsApi\Dfp\v201705\MarketplaceComment[] $results
     */
    protected $results = null;

    /**
     * @param int $startIndex
     * @param \Google\AdsApi\Dfp\v201705\MarketplaceComment[] $results
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
     * @return \Google\AdsApi\Dfp\v201705\MarketplaceCommentPage
     */
    public function setStartIndex($startIndex)
    {
      $this->startIndex = $startIndex;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\MarketplaceComment[]
     */
    public function getResults()
    {
      return $this->results;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\MarketplaceComment[] $results
     * @return \Google\AdsApi\Dfp\v201705\MarketplaceCommentPage
     */
    public function setResults(array $results)
    {
      $this->results = $results;
      return $this;
    }

}
