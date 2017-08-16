<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateExchangeRatesResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\ExchangeRate[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\ExchangeRate[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ExchangeRate[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ExchangeRate[] $rval
     * @return \Google\AdsApi\Dfp\v201708\updateExchangeRatesResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
