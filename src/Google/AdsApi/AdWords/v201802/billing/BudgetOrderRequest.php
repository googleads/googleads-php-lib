<?php

namespace Google\AdsApi\AdWords\v201802\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOrderRequest
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $date
     */
    protected $date = null;

    /**
     * @var string $billingAccountName
     */
    protected $billingAccountName = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $budgetOrderName
     */
    protected $budgetOrderName = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $spendingLimit
     */
    protected $spendingLimit = null;

    /**
     * @var string $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @param string $status
     * @param string $date
     * @param string $billingAccountName
     * @param string $poNumber
     * @param string $budgetOrderName
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $spendingLimit
     * @param string $startDateTime
     * @param string $endDateTime
     */
    public function __construct($status = null, $date = null, $billingAccountName = null, $poNumber = null, $budgetOrderName = null, $spendingLimit = null, $startDateTime = null, $endDateTime = null)
    {
      $this->status = $status;
      $this->date = $date;
      $this->billingAccountName = $billingAccountName;
      $this->poNumber = $poNumber;
      $this->budgetOrderName = $budgetOrderName;
      $this->spendingLimit = $spendingLimit;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param string $date
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setDate($date)
    {
      $this->date = $date;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingAccountName()
    {
      return $this->billingAccountName;
    }

    /**
     * @param string $billingAccountName
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setBillingAccountName($billingAccountName)
    {
      $this->billingAccountName = $billingAccountName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
      return $this;
    }

    /**
     * @return string
     */
    public function getBudgetOrderName()
    {
      return $this->budgetOrderName;
    }

    /**
     * @param string $budgetOrderName
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setBudgetOrderName($budgetOrderName)
    {
      $this->budgetOrderName = $budgetOrderName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getSpendingLimit()
    {
      return $this->spendingLimit;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $spendingLimit
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setSpendingLimit($spendingLimit)
    {
      $this->spendingLimit = $spendingLimit;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param string $startDateTime
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param string $endDateTime
     * @return \Google\AdsApi\AdWords\v201802\billing\BudgetOrderRequest
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

}
