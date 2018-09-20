<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupFeedPage extends \Google\AdsApi\AdWords\v201809\cm\NullStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdGroupFeed[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupFeed[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupFeed[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroupFeed[] $entries
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupFeedPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
