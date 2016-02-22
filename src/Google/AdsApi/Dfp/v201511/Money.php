<?php

namespace Google\AdsApi\Dfp\v201511;

class Money
{

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var int $microAmount
     */
    protected $microAmount = null;

    /**
     * @param string $currencyCode
     * @param int $microAmount
     */
    public function __construct($currencyCode = null, $microAmount = null)
    {
      $this->currencyCode = $currencyCode;
      $this->microAmount = $microAmount;
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
     * @return \Google\AdsApi\Dfp\v201511\Money
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getMicroAmount()
    {
      return $this->microAmount;
    }

    /**
     * @param int $microAmount
     * @return \Google\AdsApi\Dfp\v201511\Money
     */
    public function setMicroAmount($microAmount)
    {
      $this->microAmount = $microAmount;
      return $this;
    }

}
