<?php

namespace Google\AdsApi\AdManager\v202402;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getSegmentPopulationResultsByIdsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202402\SegmentPopulationResults[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202402\SegmentPopulationResults[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202402\SegmentPopulationResults[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202402\SegmentPopulationResults[]|null $rval
     * @return \Google\AdsApi\AdManager\v202402\getSegmentPopulationResultsByIdsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
