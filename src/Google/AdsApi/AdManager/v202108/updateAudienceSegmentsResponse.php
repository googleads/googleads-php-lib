<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateAudienceSegmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202108\FirstPartyAudienceSegment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202108\FirstPartyAudienceSegment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202108\FirstPartyAudienceSegment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202108\FirstPartyAudienceSegment[]|null $rval
     * @return \Google\AdsApi\AdManager\v202108\updateAudienceSegmentsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
