<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Long_StatsMapEntry
{

    /**
     * @var int $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Stats $value
     */
    protected $value = null;

    /**
     * @param int $key
     * @param \Google\AdsApi\AdManager\v201808\Stats $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return int
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param int $key
     * @return \Google\AdsApi\AdManager\v201808\Long_StatsMapEntry
     */
    public function setKey($key)
    {
      $this->key = (!is_null($key) && PHP_INT_SIZE === 4)
          ? floatval($key) : $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Stats
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Stats $value
     * @return \Google\AdsApi\AdManager\v201808\Long_StatsMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
