<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class RelativeDate
{

    /**
     * @var int $offsetInDays
     */
    protected $offsetInDays = null;

    /**
     * @param int $offsetInDays
     */
    public function __construct($offsetInDays = null)
    {
      $this->offsetInDays = $offsetInDays;
    }

    /**
     * @return int
     */
    public function getOffsetInDays()
    {
      return $this->offsetInDays;
    }

    /**
     * @param int $offsetInDays
     * @return \Google\AdsApi\AdWords\v201802\rm\RelativeDate
     */
    public function setOffsetInDays($offsetInDays)
    {
      $this->offsetInDays = $offsetInDays;
      return $this;
    }

}
