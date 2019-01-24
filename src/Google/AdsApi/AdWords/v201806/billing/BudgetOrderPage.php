<?php

namespace Google\AdsApi\AdWords\v201806\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOrderPage extends \Google\AdsApi\AdWords\v201806\cm\Page
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\billing\BudgetOrder[] $entries
     */
    protected $entries = null;

    /**
     * @param int $totalNumEntries
     * @param string $PageType
     * @param \Google\AdsApi\AdWords\v201806\billing\BudgetOrder[] $entries
     */
    public function __construct($totalNumEntries = null, $PageType = null, array $entries = null)
    {
      parent::__construct($totalNumEntries, $PageType);
      $this->entries = $entries;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\billing\BudgetOrder[]
     */
    public function getEntries()
    {
      return $this->entries;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\billing\BudgetOrder[] $entries
     * @return \Google\AdsApi\AdWords\v201806\billing\BudgetOrderPage
     */
    public function setEntries(array $entries)
    {
      $this->entries = $entries;
      return $this;
    }

}
