<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedMappingPage extends \Google\AdsApi\AdWords\v201601\cm\NullStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedMapping[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedMapping[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedMapping[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedMapping[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedMappingPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
