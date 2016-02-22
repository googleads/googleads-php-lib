<?php

namespace Google\AdsApi\AdWords\v201601\cm;

abstract class NullStatsPage extends \Google\AdsApi\AdWords\v201601\cm\Page
{

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     */
    public function __construct($totalNumEntries = null, $PageType = null)
    {
      parent::__construct($totalNumEntries, $PageType);
    }

}
