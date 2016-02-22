<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdGroupBidLandscapePage extends \Google\AdsApi\AdWords\v201601\cm\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscape[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscape[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscape[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscape[] $entries
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupBidLandscapePage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
