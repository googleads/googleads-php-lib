<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class performWorkflowRequestActionResponse
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\UpdateResult $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\UpdateResult $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\UpdateResult
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\UpdateResult $rval
     * @return \Google\AdsApi\Dfp\v201708\performWorkflowRequestActionResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
