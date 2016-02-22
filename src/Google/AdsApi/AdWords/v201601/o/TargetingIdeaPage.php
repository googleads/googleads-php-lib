<?php

namespace Google\AdsApi\AdWords\v201601\o;

class TargetingIdeaPage
{

    /**
     * @var int $totalNumEntries
     */
    protected $totalNumEntries = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\o\TargetingIdea[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param \Google\AdsApi\AdWords\v201601\o\TargetingIdea[] $entries
     */
    public function __construct($totalNumEntries = null, array $entries = null)
    {
      $this->totalNumEntries = $totalNumEntries;
      $this->entries = $entries;
    }

    /**
     * @return int
     */
    public function getTotalNumEntries()
    {
      return $this->totalNumEntries;
    }

    /**
     * @param int $totalNumEntries
     * @return \Google\AdsApi\AdWords\v201601\o\TargetingIdeaPage
     */
    public function setTotalNumEntries($totalNumEntries)
    {
      $this->totalNumEntries = $totalNumEntries;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\o\TargetingIdea[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\o\TargetingIdea[] $entries
     * @return \Google\AdsApi\AdWords\v201601\o\TargetingIdeaPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
