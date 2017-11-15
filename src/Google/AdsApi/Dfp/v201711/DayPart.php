<?php

namespace Google\AdsApi\Dfp\v201711;


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
     * @var \Google\AdsApi\Dfp\v201711\TimeOfDay $startTime
     */
    protected $startTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201711\TimeOfDay $endTime
     */
    protected $endTime = null;

    /**
     * @param string $dayOfWeek
     * @param \Google\AdsApi\Dfp\v201711\TimeOfDay $startTime
     * @param \Google\AdsApi\Dfp\v201711\TimeOfDay $endTime
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
     * @return \Google\AdsApi\Dfp\v201711\DayPart
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\TimeOfDay
     */
    public function getStartTime()
    {
      return $this->startTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\TimeOfDay $startTime
     * @return \Google\AdsApi\Dfp\v201711\DayPart
     */
    public function setStartTime($startTime)
    {
      $this->startTime = $startTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201711\TimeOfDay
     */
    public function getEndTime()
    {
      return $this->endTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201711\TimeOfDay $endTime
     * @return \Google\AdsApi\Dfp\v201711\DayPart
     */
    public function setEndTime($endTime)
    {
      $this->endTime = $endTime;
      return $this;
    }

}
