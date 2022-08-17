<?php

namespace Google\AdsApi\AdManager\v202205;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateLiveStreamEventsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202205\LiveStreamEvent[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202205\LiveStreamEvent[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202205\LiveStreamEvent[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202205\LiveStreamEvent[]|null $rval
     * @return \Google\AdsApi\AdManager\v202205\updateLiveStreamEventsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
