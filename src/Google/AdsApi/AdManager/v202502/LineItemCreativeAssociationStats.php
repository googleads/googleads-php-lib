<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemCreativeAssociationStats
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\Stats $stats
     */
    protected $stats = null;

    /**
     * @var \Google\AdsApi\AdManager\v202502\Long_StatsMapEntry[] $creativeSetStats
     */
    protected $creativeSetStats = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\Stats $stats
     * @param \Google\AdsApi\AdManager\v202502\Long_StatsMapEntry[] $creativeSetStats
     */
    public function __construct($stats = null, ?array $creativeSetStats = null)
    {
      $this->stats = $stats;
      $this->creativeSetStats = $creativeSetStats;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\Stats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\Stats $stats
     * @return \Google\AdsApi\AdManager\v202502\LineItemCreativeAssociationStats
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\Long_StatsMapEntry[]
     */
    public function getCreativeSetStats()
    {
      return $this->creativeSetStats;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\Long_StatsMapEntry[]|null $creativeSetStats
     * @return \Google\AdsApi\AdManager\v202502\LineItemCreativeAssociationStats
     */
    public function setCreativeSetStats(?array $creativeSetStats = null)
    {
      $this->creativeSetStats = $creativeSetStats;
      return $this;
    }

}
