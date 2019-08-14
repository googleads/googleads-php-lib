<?php

namespace Google\AdsApi\AdManager\v201908;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performAudienceSegmentActionResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v201908\UpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v201908\UpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201908\UpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201908\UpdateResult $rval
     * @return \Google\AdsApi\AdManager\v201908\performAudienceSegmentActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
