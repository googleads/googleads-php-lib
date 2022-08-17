<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateActivityGroupsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202202\ActivityGroup[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202202\ActivityGroup[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202202\ActivityGroup[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202202\ActivityGroup[]|null $rval
     * @return \Google\AdsApi\AdManager\v202202\updateActivityGroupsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
