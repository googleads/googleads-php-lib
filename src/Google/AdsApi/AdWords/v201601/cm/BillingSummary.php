<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class BillingSummary
{

    /**
     * @var int $numOperations
     */
    protected $numOperations = null;

    /**
     * @var int $numUnits
     */
    protected $numUnits = null;

    /**
     * @param int $numOperations
     * @param int $numUnits
     */
    public function __construct($numOperations = null, $numUnits = null)
    {
      $this->numOperations = $numOperations;
      $this->numUnits = $numUnits;
    }

    /**
     * @return int
     */
    public function getNumOperations()
    {
      return $this->numOperations;
    }

    /**
     * @param int $numOperations
     * @return \Google\AdsApi\AdWords\v201601\cm\BillingSummary
     */
    public function setNumOperations($numOperations)
    {
      $this->numOperations = $numOperations;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumUnits()
    {
      return $this->numUnits;
    }

    /**
     * @param int $numUnits
     * @return \Google\AdsApi\AdWords\v201601\cm\BillingSummary
     */
    public function setNumUnits($numUnits)
    {
      $this->numUnits = $numUnits;
      return $this;
    }

}
