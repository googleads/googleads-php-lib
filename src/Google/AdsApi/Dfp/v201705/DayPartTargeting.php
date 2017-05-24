<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DayPartTargeting
{

    /**
     * @var \Google\AdsApi\Dfp\v201705\DayPart[] $dayParts
     */
    protected $dayParts = null;

    /**
     * @var string $timeZone
     */
    protected $timeZone = null;

    /**
     * @param \Google\AdsApi\Dfp\v201705\DayPart[] $dayParts
     * @param string $timeZone
     */
    public function __construct(array $dayParts = null, $timeZone = null)
    {
      $this->dayParts = $dayParts;
      $this->timeZone = $timeZone;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DayPart[]
     */
    public function getDayParts()
    {
      return $this->dayParts;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DayPart[] $dayParts
     * @return \Google\AdsApi\Dfp\v201705\DayPartTargeting
     */
    public function setDayParts(array $dayParts)
    {
      $this->dayParts = $dayParts;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZone()
    {
      return $this->timeZone;
    }

    /**
     * @param string $timeZone
     * @return \Google\AdsApi\Dfp\v201705\DayPartTargeting
     */
    public function setTimeZone($timeZone)
    {
      $this->timeZone = $timeZone;
      return $this;
    }

}
