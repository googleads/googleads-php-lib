<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BiddingStrategyPage extends \Google\AdsApi\AdWords\v201809\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\SharedBiddingStrategy[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201809\cm\SharedBiddingStrategy[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedBiddingStrategy[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\SharedBiddingStrategy[] $entries
     * @return \Google\AdsApi\AdWords\v201809\cm\BiddingStrategyPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
