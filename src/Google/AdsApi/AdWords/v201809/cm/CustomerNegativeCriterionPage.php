<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerNegativeCriterionPage extends \Google\AdsApi\AdWords\v201809\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\CustomerNegativeCriterion[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomerNegativeCriterion[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerNegativeCriterion[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\CustomerNegativeCriterion[] $entries
     * @return \Google\AdsApi\AdWords\v201809\cm\CustomerNegativeCriterionPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
