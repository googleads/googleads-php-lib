<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateRange
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\Date $startDate
     */
    protected $startDate = null;

    /**
     * @var \Google\AdsApi\AdManager\v201905\Date $endDate
     */
    protected $endDate = null;

    /**
     * @param \Google\AdsApi\AdManager\v201905\Date $startDate
     * @param \Google\AdsApi\AdManager\v201905\Date $endDate
     */
    public function __construct($startDate = null, $endDate = null)
    {
      $this->startDate = $startDate;
      $this->endDate = $endDate;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\Date
     */
    public function getStartDate()
    {
      return $this->startDate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\Date $startDate
     * @return \Google\AdsApi\AdManager\v201905\DateRange
     */
    public function setStartDate($startDate)
    {
      $this->startDate = $startDate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\Date
     */
    public function getEndDate()
    {
      return $this->endDate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\Date $endDate
     * @return \Google\AdsApi\AdManager\v201905\DateRange
     */
    public function setEndDate($endDate)
    {
      $this->endDate = $endDate;
      return $this;
    }

}
