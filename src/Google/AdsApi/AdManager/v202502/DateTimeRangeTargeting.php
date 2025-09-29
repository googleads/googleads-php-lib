<?php

namespace Google\AdsApi\AdManager\v202502;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DateTimeRangeTargeting
{

    /**
     * @var \Google\AdsApi\AdManager\v202502\DateTimeRange[] $targetedDateTimeRanges
     */
    protected $targetedDateTimeRanges = null;

    /**
     * @param \Google\AdsApi\AdManager\v202502\DateTimeRange[] $targetedDateTimeRanges
     */
    public function __construct(?array $targetedDateTimeRanges = null)
    {
      $this->targetedDateTimeRanges = $targetedDateTimeRanges;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202502\DateTimeRange[]
     */
    public function getTargetedDateTimeRanges()
    {
      return $this->targetedDateTimeRanges;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202502\DateTimeRange[]|null $targetedDateTimeRanges
     * @return \Google\AdsApi\AdManager\v202502\DateTimeRangeTargeting
     */
    public function setTargetedDateTimeRanges(?array $targetedDateTimeRanges = null)
    {
      $this->targetedDateTimeRanges = $targetedDateTimeRanges;
      return $this;
    }

}
