<?php

namespace Google\AdsApi\AdWords\v201809\billing;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BudgetOrder
{

    /**
     * @var string $billingAccountId
     */
    protected $billingAccountId = null;

    /**
     * @var int $id
     */
    protected $id = null;

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
     * @var string $primaryBillingId
     */
    protected $primaryBillingId = null;

    /**
     * @var string $secondaryBillingId
     */
    protected $secondaryBillingId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $spendingLimit
     */
    protected $spendingLimit = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $totalAdjustments
     */
    protected $totalAdjustments = null;

    /**
     * @var string $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\billing\BudgetOrderRequest $lastRequest
     */
    protected $lastRequest = null;

    /**
     * @param string $billingAccountId
     * @param int $id
     * @param string $billingAccountName
     * @param string $poNumber
     * @param string $budgetOrderName
     * @param string $primaryBillingId
     * @param string $secondaryBillingId
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $spendingLimit
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $totalAdjustments
     * @param string $startDateTime
     * @param string $endDateTime
     * @param \Google\AdsApi\AdWords\v201809\billing\BudgetOrderRequest $lastRequest
     */
    public function __construct($billingAccountId = null, $id = null, $billingAccountName = null, $poNumber = null, $budgetOrderName = null, $primaryBillingId = null, $secondaryBillingId = null, $spendingLimit = null, $totalAdjustments = null, $startDateTime = null, $endDateTime = null, $lastRequest = null)
    {
      $this->billingAccountId = $billingAccountId;
      $this->id = $id;
      $this->billingAccountName = $billingAccountName;
      $this->poNumber = $poNumber;
      $this->budgetOrderName = $budgetOrderName;
      $this->primaryBillingId = $primaryBillingId;
      $this->secondaryBillingId = $secondaryBillingId;
      $this->spendingLimit = $spendingLimit;
      $this->totalAdjustments = $totalAdjustments;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->lastRequest = $lastRequest;
    }

    /**
     * @return string
     */
    public function getBillingAccountId()
    {
      return $this->billingAccountId;
    }

    /**
     * @param string $billingAccountId
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setBillingAccountId($billingAccountId)
    {
      $this->billingAccountId = $billingAccountId;
      return $this;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
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
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
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
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setBudgetOrderName($budgetOrderName)
    {
      $this->budgetOrderName = $budgetOrderName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPrimaryBillingId()
    {
      return $this->primaryBillingId;
    }

    /**
     * @param string $primaryBillingId
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setPrimaryBillingId($primaryBillingId)
    {
      $this->primaryBillingId = $primaryBillingId;
      return $this;
    }

    /**
     * @return string
     */
    public function getSecondaryBillingId()
    {
      return $this->secondaryBillingId;
    }

    /**
     * @param string $secondaryBillingId
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setSecondaryBillingId($secondaryBillingId)
    {
      $this->secondaryBillingId = $secondaryBillingId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getSpendingLimit()
    {
      return $this->spendingLimit;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $spendingLimit
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setSpendingLimit($spendingLimit)
    {
      $this->spendingLimit = $spendingLimit;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getTotalAdjustments()
    {
      return $this->totalAdjustments;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $totalAdjustments
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setTotalAdjustments($totalAdjustments)
    {
      $this->totalAdjustments = $totalAdjustments;
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
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
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
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrderRequest
     */
    public function getLastRequest()
    {
      return $this->lastRequest;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\billing\BudgetOrderRequest $lastRequest
     * @return \Google\AdsApi\AdWords\v201809\billing\BudgetOrder
     */
    public function setLastRequest($lastRequest)
    {
      $this->lastRequest = $lastRequest;
      return $this;
    }

}
