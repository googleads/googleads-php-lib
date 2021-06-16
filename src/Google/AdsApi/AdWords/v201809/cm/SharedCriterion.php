<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class SharedCriterion
{

    /**
     * @var int $sharedSetId
     */
    protected $sharedSetId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var boolean $negative
     */
    protected $negative = null;

    /**
     * @param int $sharedSetId
     * @param \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     * @param boolean $negative
     */
    public function __construct($sharedSetId = null, $criterion = null, $negative = null)
    {
      $this->sharedSetId = $sharedSetId;
      $this->criterion = $criterion;
      $this->negative = $negative;
    }

    /**
     * @return int
     */
    public function getSharedSetId()
    {
      return $this->sharedSetId;
    }

    /**
     * @param int $sharedSetId
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterion
     */
    public function setSharedSetId($sharedSetId)
    {
      $this->sharedSetId = (!is_null($sharedSetId) && PHP_INT_SIZE === 4)
          ? floatval($sharedSetId) : $sharedSetId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterion
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getNegative()
    {
      return $this->negative;
    }

    /**
     * @param boolean $negative
     * @return \Google\AdsApi\AdWords\v201809\cm\SharedCriterion
     */
    public function setNegative($negative)
    {
      $this->negative = $negative;
      return $this;
    }

}
