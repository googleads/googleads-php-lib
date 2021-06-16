<?php

namespace Google\AdsApi\AdManager\v202102;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DayPart
{

    /**
     * @var string $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @var \Google\AdsApi\AdManager\v202102\TimeOfDay $startTime
     */
    protected $startTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202102\TimeOfDay $endTime
     */
    protected $endTime = null;

    /**
     * @param string $dayOfWeek
     * @param \Google\AdsApi\AdManager\v202102\TimeOfDay $startTime
     * @param \Google\AdsApi\AdManager\v202102\TimeOfDay $endTime
     */
    public function __construct($dayOfWeek = null, $startTime = null, $endTime = null)
    {
      $this->dayOfWeek = $dayOfWeek;
      $this->startTime = $startTime;
      $this->endTime = $endTime;
    }

    /**
     * @return string
     */
    public function getDayOfWeek()
    {
      return $this->dayOfWeek;
    }

    /**
     * @param string $dayOfWeek
     * @return \Google\AdsApi\AdManager\v202102\DayPart
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\TimeOfDay
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\TimeOfDay $startTime
     * @return \Google\AdsApi\AdManager\v202102\DayPart
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202102\TimeOfDay
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202102\TimeOfDay $endTime
     * @return \Google\AdsApi\AdManager\v202102\DayPart
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

}
