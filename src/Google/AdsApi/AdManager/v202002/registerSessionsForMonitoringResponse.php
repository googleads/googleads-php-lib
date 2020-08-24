<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class registerSessionsForMonitoringResponse
{

    /**
     * @var string[] $rval
     */
    protected $rval = null;

    /**
     * @param string[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return string[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param string[]|null $rval
     * @return \Google\AdsApi\AdManager\v202002\registerSessionsForMonitoringResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
