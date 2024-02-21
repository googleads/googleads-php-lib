<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createLiveStreamEventsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\LiveStreamEvent[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202402\LiveStreamEvent[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\LiveStreamEvent[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\LiveStreamEvent[]|null $rval
     * @return \Google\AdsApi\AdManager\v202402\createLiveStreamEventsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
