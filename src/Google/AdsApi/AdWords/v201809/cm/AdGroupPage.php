<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupPage extends \Google\AdsApi\AdWords\v201809\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\AdGroup[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroup[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroup[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\AdGroup[] $entries
     * @return \Google\AdsApi\AdWords\v201809\cm\AdGroupPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
