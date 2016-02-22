<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class JobEvent
{

    /**
     * @var string $dateTime
     */
    protected $dateTime = null;

    /**
     * @var string $JobEventType
     */
    protected $JobEventType = null;

    /**
     * @param string $dateTime
     * @param string $JobEventType
     */
    public function __construct($dateTime = null, $JobEventType = null)
    {
      $this->dateTime = $dateTime;
      $this->JobEventType = $JobEventType;
    }

    /**
     * @return string
     */
    public function getDateTime()
    {
      return $this->dateTime;
    }

    /**
     * @param string $dateTime
     * @return \Google\AdsApi\AdWords\v201601\cm\JobEvent
     */
    public function setDateTime($dateTime)
    {
      $this->dateTime = $dateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobEventType()
    {
      return $this->JobEventType;
    }

    /**
     * @param string $JobEventType
     * @return \Google\AdsApi\AdWords\v201601\cm\JobEvent
     */
    public function setJobEventType($JobEventType)
    {
      $this->JobEventType = $JobEventType;
      return $this;
    }

}
