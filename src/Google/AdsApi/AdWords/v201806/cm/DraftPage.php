<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DraftPage extends \Google\AdsApi\AdWords\v201806\cm\NullStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Draft[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201806\cm\Draft[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Draft[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Draft[] $entries
     * @return \Google\AdsApi\AdWords\v201806\cm\DraftPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
