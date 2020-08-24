<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class createAudienceSegmentsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201911\FirstPartyAudienceSegment[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201911\FirstPartyAudienceSegment[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\FirstPartyAudienceSegment[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\FirstPartyAudienceSegment[]|null $rval
     * @return \Google\AdsApi\AdManager\v201911\createAudienceSegmentsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
