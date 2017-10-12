<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdParamPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\AdParam[] $entries
     */
    protected $entries = null;

    /**
     * @var int $totalNumEntries
     */
    protected $totalNumEntries = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\AdParam[] $entries
     * @param int $totalNumEntries
     */
    public function __construct(array $entries = null, $totalNumEntries = null)
    {
      $this->entries = $entries;
      $this->totalNumEntries = $totalNumEntries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParam[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\AdParam[] $entries
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParamPage
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
     * @return \Google\AdsApi\AdWords\v201710\cm\AdParamPage
     */
    public function setTotalNumEntries($totalNumEntries)
    {
      $this->totalNumEntries = $totalNumEntries;
      return $this;
    }

}
