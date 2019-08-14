<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updatePlacementsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\Placement[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\Placement[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\Placement[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\Placement[]|null $rval
     * @return \Google\AdsApi\AdManager\v201908\updatePlacementsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
