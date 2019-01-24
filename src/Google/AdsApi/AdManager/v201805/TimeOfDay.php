<?php

namespace Google\AdsApi\AdManager\v201805;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class TimeOfDay
{

    /**
     * @var int $hour
     */
    protected $hour = null;

    /**
     * @var string $minute
     */
    protected $minute = null;

    /**
     * @param int $hour
     * @param string $minute
     */
    public function __construct($hour = null, $minute = null)
    {
      $this->hour = $hour;
      $this->minute = $minute;
    }

    /**
     * @return int
     */
    public function getHour()
    {
      return $this->hour;
    }

    /**
     * @param int $hour
     * @return \Google\AdsApi\AdManager\v201805\TimeOfDay
     */
    public function setHour($hour)
    {
      $this->hour = $hour;
      return $this;
    }

    /**
     * @return string
     */
    public function getMinute()
    {
      return $this->minute;
    }

    /**
     * @param string $minute
     * @return \Google\AdsApi\AdManager\v201805\TimeOfDay
     */
    public function setMinute($minute)
    {
      $this->minute = $minute;
      return $this;
    }

}
