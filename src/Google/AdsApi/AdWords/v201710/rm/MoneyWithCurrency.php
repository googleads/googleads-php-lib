<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MoneyWithCurrency extends \Google\AdsApi\AdWords\v201710\cm\ComparableValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Money $money
     */
    protected $money = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @param string $ComparableValueType
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $money
     * @param string $currencyCode
     */
    public function __construct($ComparableValueType = null, $money = null, $currencyCode = null)
    {
      parent::__construct($ComparableValueType);
      $this->money = $money;
      $this->currencyCode = $currencyCode;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Money
     */
    public function getMoney()
    {
      return $this->money;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Money $money
     * @return \Google\AdsApi\AdWords\v201710\rm\MoneyWithCurrency
     */
    public function setMoney($money)
    {
      $this->money = $money;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\AdWords\v201710\rm\MoneyWithCurrency
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

}
