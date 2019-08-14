<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateActivitiesResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\Activity[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\Activity[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\Activity[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\Activity[]|null $rval
     * @return \Google\AdsApi\AdManager\v201908\updateActivitiesResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
