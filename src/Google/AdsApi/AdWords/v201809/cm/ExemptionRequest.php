<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ExemptionRequest
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\PolicyViolationKey $key
     */
    protected $key = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicyViolationKey $key
     */
    public function __construct($key = null)
    {
      $this->key = $key;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\PolicyViolationKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicyViolationKey $key
     * @return \Google\AdsApi\AdWords\v201809\cm\ExemptionRequest
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

}
