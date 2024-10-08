<?php

namespace Google\AdsApi\AdManager\v202408;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateTimeRange
{

    /**
     * @var \Google\AdsApi\AdManager\v202408\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202408\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @param \Google\AdsApi\AdManager\v202408\DateTime $startDateTime
     * @param \Google\AdsApi\AdManager\v202408\DateTime $endDateTime
     */
    public function __construct($startDateTime = null, $endDateTime = null)
    {
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202408\DateTimeRange
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202408\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202408\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v202408\DateTimeRange
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

}
