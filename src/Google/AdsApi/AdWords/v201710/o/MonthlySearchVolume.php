<?php

namespace Google\AdsApi\AdWords\v201710\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MonthlySearchVolume
{

    /**
     * @var int $year
     */
    protected $year = null;

    /**
     * @var int $month
     */
    protected $month = null;

    /**
     * @var int $count
     */
    protected $count = null;

    /**
     * @param int $year
     * @param int $month
     * @param int $count
     */
    public function __construct($year = null, $month = null, $count = null)
    {
      $this->year = $year;
      $this->month = $month;
      $this->count = $count;
    }

    /**
     * @return int
     */
    public function getYear()
    {
      return $this->year;
    }

    /**
     * @param int $year
     * @return \Google\AdsApi\AdWords\v201710\o\MonthlySearchVolume
     */
    public function setYear($year)
    {
      $this->year = $year;
      return $this;
    }

    /**
     * @return int
     */
    public function getMonth()
    {
      return $this->month;
    }

    /**
     * @param int $month
     * @return \Google\AdsApi\AdWords\v201710\o\MonthlySearchVolume
     */
    public function setMonth($month)
    {
      $this->month = $month;
      return $this;
    }

    /**
     * @return int
     */
    public function getCount()
    {
      return $this->count;
    }

    /**
     * @param int $count
     * @return \Google\AdsApi\AdWords\v201710\o\MonthlySearchVolume
     */
    public function setCount($count)
    {
      $this->count = (!is_null($count) && PHP_INT_SIZE === 4)
          ? floatval($count) : $count;
      return $this;
    }

}
