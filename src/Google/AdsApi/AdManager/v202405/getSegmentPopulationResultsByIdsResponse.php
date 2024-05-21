<?php

namespace Google\AdsApi\AdManager\v202405;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSegmentPopulationResultsByIdsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202405\SegmentPopulationResults[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202405\SegmentPopulationResults[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202405\SegmentPopulationResults[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202405\SegmentPopulationResults[]|null $rval
     * @return \Google\AdsApi\AdManager\v202405\getSegmentPopulationResultsByIdsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
