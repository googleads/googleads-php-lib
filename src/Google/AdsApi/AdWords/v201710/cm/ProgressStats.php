<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProgressStats
{

    /**
     * @var int $numOperationsExecuted
     */
    protected $numOperationsExecuted = null;

    /**
     * @var int $numOperationsSucceeded
     */
    protected $numOperationsSucceeded = null;

    /**
     * @var int $estimatedPercentExecuted
     */
    protected $estimatedPercentExecuted = null;

    /**
     * @var int $numResultsWritten
     */
    protected $numResultsWritten = null;

    /**
     * @param int $numOperationsExecuted
     * @param int $numOperationsSucceeded
     * @param int $estimatedPercentExecuted
     * @param int $numResultsWritten
     */
    public function __construct($numOperationsExecuted = null, $numOperationsSucceeded = null, $estimatedPercentExecuted = null, $numResultsWritten = null)
    {
      $this->numOperationsExecuted = $numOperationsExecuted;
      $this->numOperationsSucceeded = $numOperationsSucceeded;
      $this->estimatedPercentExecuted = $estimatedPercentExecuted;
      $this->numResultsWritten = $numResultsWritten;
    }

    /**
     * @return int
     */
    public function getNumOperationsExecuted()
    {
      return $this->numOperationsExecuted;
    }

    /**
     * @param int $numOperationsExecuted
     * @return \Google\AdsApi\AdWords\v201710\cm\ProgressStats
     */
    public function setNumOperationsExecuted($numOperationsExecuted)
    {
      $this->numOperationsExecuted = (!is_null($numOperationsExecuted) && PHP_INT_SIZE === 4)
          ? floatval($numOperationsExecuted) : $numOperationsExecuted;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumOperationsSucceeded()
    {
      return $this->numOperationsSucceeded;
    }

    /**
     * @param int $numOperationsSucceeded
     * @return \Google\AdsApi\AdWords\v201710\cm\ProgressStats
     */
    public function setNumOperationsSucceeded($numOperationsSucceeded)
    {
      $this->numOperationsSucceeded = (!is_null($numOperationsSucceeded) && PHP_INT_SIZE === 4)
          ? floatval($numOperationsSucceeded) : $numOperationsSucceeded;
      return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedPercentExecuted()
    {
      return $this->estimatedPercentExecuted;
    }

    /**
     * @param int $estimatedPercentExecuted
     * @return \Google\AdsApi\AdWords\v201710\cm\ProgressStats
     */
    public function setEstimatedPercentExecuted($estimatedPercentExecuted)
    {
      $this->estimatedPercentExecuted = $estimatedPercentExecuted;
      return $this;
    }

    /**
     * @return int
     */
    public function getNumResultsWritten()
    {
      return $this->numResultsWritten;
    }

    /**
     * @param int $numResultsWritten
     * @return \Google\AdsApi\AdWords\v201710\cm\ProgressStats
     */
    public function setNumResultsWritten($numResultsWritten)
    {
      $this->numResultsWritten = (!is_null($numResultsWritten) && PHP_INT_SIZE === 4)
          ? floatval($numResultsWritten) : $numResultsWritten;
      return $this;
    }

}
