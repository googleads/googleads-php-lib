<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomAffinityPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\CustomAffinity[] $entries
     */
    protected $entries = null;

    /**
     * @var int $totalNumEntries
     */
    protected $totalNumEntries = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinity[] $entries
     * @param int $totalNumEntries
     */
    public function __construct(array $entries = null, $totalNumEntries = null)
    {
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinity[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\CustomAffinity[] $entries
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201809\rm\CustomAffinityPage
     */
    public function setTotalNumEntries($totalNumEntries)
    {
      $this->totalNumEntries = $totalNumEntries;
      return $this;
    }

}
