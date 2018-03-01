<?php

namespace Google\AdsApi\AdWords\v201802\mcm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateManagerResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\mcm\MutateManagerResults $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\MutateManagerResults $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\mcm\MutateManagerResults
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\mcm\MutateManagerResults $rval
     * @return \Google\AdsApi\AdWords\v201802\mcm\mutateManagerResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
