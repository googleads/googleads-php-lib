<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomPacingGoal
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var boolean $useLineItemStartDateTime
     */
    protected $useLineItemStartDateTime = null;

    /**
     * @var int $amount
     */
    protected $amount = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param boolean $useLineItemStartDateTime
     * @param int $amount
     */
    public function __construct($startDateTime = null, $useLineItemStartDateTime = null, $amount = null)
    {
      $this->startDateTime = $startDateTime;
      $this->useLineItemStartDateTime = $useLineItemStartDateTime;
      $this->amount = $amount;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202002\CustomPacingGoal
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseLineItemStartDateTime()
    {
      return $this->useLineItemStartDateTime;
    }

    /**
     * @param boolean $useLineItemStartDateTime
     * @return \Google\AdsApi\AdManager\v202002\CustomPacingGoal
     */
    public function setUseLineItemStartDateTime($useLineItemStartDateTime)
    {
      $this->useLineItemStartDateTime = $useLineItemStartDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param int $amount
     * @return \Google\AdsApi\AdManager\v202002\CustomPacingGoal
     */
    public function setAmount($amount)
    {
      $this->amount = (!is_null($amount) && PHP_INT_SIZE === 4)
          ? floatval($amount) : $amount;
      return $this;
    }

}
