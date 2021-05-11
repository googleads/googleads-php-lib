<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StoreSalesTransaction
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\UserIdentifier[] $userIdentifiers
     */
    protected $userIdentifiers = null;

    /**
     * @var string $transactionTime
     */
    protected $transactionTime = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\MoneyWithCurrency $transactionAmount
     */
    protected $transactionAmount = null;

    /**
     * @var string $conversionName
     */
    protected $conversionName = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\UserIdentifier[] $userIdentifiers
     * @param string $transactionTime
     * @param \Google\AdsApi\AdWords\v201809\rm\MoneyWithCurrency $transactionAmount
     * @param string $conversionName
     */
    public function __construct(array $userIdentifiers = null, $transactionTime = null, $transactionAmount = null, $conversionName = null)
    {
      $this->userIdentifiers = $userIdentifiers;
      $this->transactionTime = $transactionTime;
      $this->transactionAmount = $transactionAmount;
      $this->conversionName = $conversionName;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\UserIdentifier[]
     */
    public function getUserIdentifiers()
    {
      return $this->userIdentifiers;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\UserIdentifier[] $userIdentifiers
     * @return \Google\AdsApi\AdWords\v201809\rm\StoreSalesTransaction
     */
    public function setUserIdentifiers(array $userIdentifiers)
    {
      $this->userIdentifiers = $userIdentifiers;
      return $this;
    }

    /**
     * @return string
     */
    public function getTransactionTime()
    {
      return $this->transactionTime;
    }

    /**
     * @param string $transactionTime
     * @return \Google\AdsApi\AdWords\v201809\rm\StoreSalesTransaction
     */
    public function setTransactionTime($transactionTime)
    {
      $this->transactionTime = $transactionTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\MoneyWithCurrency
     */
    public function getTransactionAmount()
    {
      return $this->transactionAmount;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\MoneyWithCurrency $transactionAmount
     * @return \Google\AdsApi\AdWords\v201809\rm\StoreSalesTransaction
     */
    public function setTransactionAmount($transactionAmount)
    {
      $this->transactionAmount = $transactionAmount;
      return $this;
    }

    /**
     * @return string
     */
    public function getConversionName()
    {
      return $this->conversionName;
    }

    /**
     * @param string $conversionName
     * @return \Google\AdsApi\AdWords\v201809\rm\StoreSalesTransaction
     */
    public function setConversionName($conversionName)
    {
      $this->conversionName = $conversionName;
      return $this;
    }

}
