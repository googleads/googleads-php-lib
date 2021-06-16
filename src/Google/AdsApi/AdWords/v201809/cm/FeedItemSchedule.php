<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemSchedule
{

    /**
     * @var string $dayOfWeek
     */
    protected $dayOfWeek = null;

    /**
     * @var int $startHour
     */
    protected $startHour = null;

    /**
     * @var string $startMinute
     */
    protected $startMinute = null;

    /**
     * @var int $endHour
     */
    protected $endHour = null;

    /**
     * @var string $endMinute
     */
    protected $endMinute = null;

    /**
     * @param string $dayOfWeek
     * @param int $startHour
     * @param string $startMinute
     * @param int $endHour
     * @param string $endMinute
     */
    public function __construct($dayOfWeek = null, $startHour = null, $startMinute = null, $endHour = null, $endMinute = null)
    {
      $this->dayOfWeek = $dayOfWeek;
      $this->startHour = $startHour;
      $this->startMinute = $startMinute;
      $this->endHour = $endHour;
      $this->endMinute = $endMinute;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemSchedule
     */
    public function setDayOfWeek($dayOfWeek)
    {
      $this->dayOfWeek = $dayOfWeek;
      return $this;
    }

    /**
     * @return int
     */
    public function getStartHour()
    {
      return $this->startHour;
    }

    /**
     * @param int $startHour
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemSchedule
     */
    public function setStartHour($startHour)
    {
      $this->startHour = $startHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartMinute()
    {
      return $this->startMinute;
    }

    /**
     * @param string $startMinute
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemSchedule
     */
    public function setStartMinute($startMinute)
    {
      $this->startMinute = $startMinute;
      return $this;
    }

    /**
     * @return int
     */
    public function getEndHour()
    {
      return $this->endHour;
    }

    /**
     * @param int $endHour
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemSchedule
     */
    public function setEndHour($endHour)
    {
      $this->endHour = $endHour;
      return $this;
    }

    /**
     * @return string
     */
    public function getEndMinute()
    {
      return $this->endMinute;
    }

    /**
     * @param string $endMinute
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemSchedule
     */
    public function setEndMinute($endMinute)
    {
      $this->endMinute = $endMinute;
      return $this;
    }

}
