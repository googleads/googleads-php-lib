<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BreakdownForecast
{

    /**
     * @var int $matched
     */
    protected $matched = null;

    /**
     * @var int $available
     */
    protected $available = null;

    /**
     * @var int $possible
     */
    protected $possible = null;

    /**
     * @param int $matched
     * @param int $available
     * @param int $possible
     */
    public function __construct($matched = null, $available = null, $possible = null)
    {
      $this->matched = $matched;
      $this->available = $available;
      $this->possible = $possible;
    }

    /**
     * @return int
     */
    public function getMatched()
    {
      return $this->matched;
    }

    /**
     * @param int $matched
     * @return \Google\AdsApi\AdManager\v201808\BreakdownForecast
     */
    public function setMatched($matched)
    {
      $this->matched = (!is_null($matched) && PHP_INT_SIZE === 4)
          ? floatval($matched) : $matched;
      return $this;
    }

    /**
     * @return int
     */
    public function getAvailable()
    {
      return $this->available;
    }

    /**
     * @param int $available
     * @return \Google\AdsApi\AdManager\v201808\BreakdownForecast
     */
    public function setAvailable($available)
    {
      $this->available = (!is_null($available) && PHP_INT_SIZE === 4)
          ? floatval($available) : $available;
      return $this;
    }

    /**
     * @return int
     */
    public function getPossible()
    {
      return $this->possible;
    }

    /**
     * @param int $possible
     * @return \Google\AdsApi\AdManager\v201808\BreakdownForecast
     */
    public function setPossible($possible)
    {
      $this->possible = (!is_null($possible) && PHP_INT_SIZE === 4)
          ? floatval($possible) : $possible;
      return $this;
    }

}
