<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetPage extends \Google\AdsApi\AdWords\v201809\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Budget[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201809\cm\Budget[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Budget[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Budget[] $entries
     * @return \Google\AdsApi\AdWords\v201809\cm\BudgetPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
