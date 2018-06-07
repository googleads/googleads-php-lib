<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConversionTrackerPage extends \Google\AdsApi\AdWords\v201806\cm\NoStatsPage
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ConversionTracker[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201806\cm\ConversionTracker[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTracker[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ConversionTracker[] $entries
     * @return \Google\AdsApi\AdWords\v201806\cm\ConversionTrackerPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
