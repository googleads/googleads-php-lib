<?php

namespace Google\AdsApi\Dfp\v201511;

class LineItemCreativeAssociationStats
{

    /**
     * @var \Google\AdsApi\Dfp\v201511\Stats $stats
     */
    protected $stats = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry[] $creativeSetStats
     */
    protected $creativeSetStats = null;

    /**
     * @var \Google\AdsApi\Dfp\v201511\Money $costInOrderCurrency
     */
    protected $costInOrderCurrency = null;

    /**
     * @param \Google\AdsApi\Dfp\v201511\Stats $stats
     * @param \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry[] $creativeSetStats
     * @param \Google\AdsApi\Dfp\v201511\Money $costInOrderCurrency
     */
    public function __construct($stats = null, array $creativeSetStats = null, $costInOrderCurrency = null)
    {
      $this->stats = $stats;
      $this->creativeSetStats = $creativeSetStats;
      $this->costInOrderCurrency = $costInOrderCurrency;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Stats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Stats $stats
     * @return \Google\AdsApi\Dfp\v201511\LineItemCreativeAssociationStats
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry[]
     */
    public function getCreativeSetStats()
    {
      return $this->creativeSetStats;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Long_StatsMapEntry[] $creativeSetStats
     * @return \Google\AdsApi\Dfp\v201511\LineItemCreativeAssociationStats
     */
    public function setCreativeSetStats(array $creativeSetStats)
    {
      $this->creativeSetStats = $creativeSetStats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201511\Money
     */
    public function getCostInOrderCurrency()
    {
      return $this->costInOrderCurrency;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201511\Money $costInOrderCurrency
     * @return \Google\AdsApi\Dfp\v201511\LineItemCreativeAssociationStats
     */
    public function setCostInOrderCurrency($costInOrderCurrency)
    {
      $this->costInOrderCurrency = $costInOrderCurrency;
      return $this;
    }

}
