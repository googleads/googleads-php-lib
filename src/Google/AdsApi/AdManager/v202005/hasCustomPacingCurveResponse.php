<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class hasCustomPacingCurveResponse
{

    /**
     * @var boolean $rval
     */
    protected $rval = null;

    /**
     * @param boolean $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return boolean
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param boolean $rval
     * @return \Google\AdsApi\AdManager\v202005\hasCustomPacingCurveResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
