<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExchangeRate
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var string $refreshRate
     */
    protected $refreshRate = null;

    /**
     * @var string $direction
     */
    protected $direction = null;

    /**
     * @var int $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @param int $id
     * @param string $currencyCode
     * @param string $refreshRate
     * @param string $direction
     * @param int $exchangeRate
     */
    public function __construct($id = null, $currencyCode = null, $refreshRate = null, $direction = null, $exchangeRate = null)
    {
      $this->id = $id;
      $this->currencyCode = $currencyCode;
      $this->refreshRate = $refreshRate;
      $this->direction = $direction;
      $this->exchangeRate = $exchangeRate;
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
     * @return \Google\AdsApi\Dfp\v201705\ExchangeRate
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
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\Dfp\v201705\ExchangeRate
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getRefreshRate()
    {
      return $this->refreshRate;
    }

    /**
     * @param string $refreshRate
     * @return \Google\AdsApi\Dfp\v201705\ExchangeRate
     */
    public function setRefreshRate($refreshRate)
    {
      $this->refreshRate = $refreshRate;
      return $this;
    }

    /**
     * @return string
     */
    public function getDirection()
    {
      return $this->direction;
    }

    /**
     * @param string $direction
     * @return \Google\AdsApi\Dfp\v201705\ExchangeRate
     */
    public function setDirection($direction)
    {
      $this->direction = $direction;
      return $this;
    }

    /**
     * @return int
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param int $exchangeRate
     * @return \Google\AdsApi\Dfp\v201705\ExchangeRate
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = (!is_null($exchangeRate) && PHP_INT_SIZE === 4)
          ? floatval($exchangeRate) : $exchangeRate;
      return $this;
    }

}
