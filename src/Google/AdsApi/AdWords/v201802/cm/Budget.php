<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Budget
{

    /**
     * @var int $budgetId
     */
    protected $budgetId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\Money $amount
     */
    protected $amount = null;

    /**
     * @var string $deliveryMethod
     */
    protected $deliveryMethod = null;

    /**
     * @var int $referenceCount
     */
    protected $referenceCount = null;

    /**
     * @var boolean $isExplicitlyShared
     */
    protected $isExplicitlyShared = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $budgetId
     * @param string $name
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $amount
     * @param string $deliveryMethod
     * @param int $referenceCount
     * @param boolean $isExplicitlyShared
     * @param string $status
     */
    public function __construct($budgetId = null, $name = null, $amount = null, $deliveryMethod = null, $referenceCount = null, $isExplicitlyShared = null, $status = null)
    {
      $this->budgetId = $budgetId;
      $this->name = $name;
      $this->amount = $amount;
      $this->deliveryMethod = $deliveryMethod;
      $this->referenceCount = $referenceCount;
      $this->isExplicitlyShared = $isExplicitlyShared;
      $this->status = $status;
    }

    /**
     * @return int
     */
    public function getBudgetId()
    {
      return $this->budgetId;
    }

    /**
     * @param int $budgetId
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setBudgetId($budgetId)
    {
      $this->budgetId = (!is_null($budgetId) && PHP_INT_SIZE === 4)
          ? floatval($budgetId) : $budgetId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\Money
     */
    public function getAmount()
    {
      return $this->amount;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\Money $amount
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setAmount($amount)
    {
      $this->amount = $amount;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryMethod()
    {
      return $this->deliveryMethod;
    }

    /**
     * @param string $deliveryMethod
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setDeliveryMethod($deliveryMethod)
    {
      $this->deliveryMethod = $deliveryMethod;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceCount()
    {
      return $this->referenceCount;
    }

    /**
     * @param int $referenceCount
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setReferenceCount($referenceCount)
    {
      $this->referenceCount = $referenceCount;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsExplicitlyShared()
    {
      return $this->isExplicitlyShared;
    }

    /**
     * @param boolean $isExplicitlyShared
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setIsExplicitlyShared($isExplicitlyShared)
    {
      $this->isExplicitlyShared = $isExplicitlyShared;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\Budget
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
