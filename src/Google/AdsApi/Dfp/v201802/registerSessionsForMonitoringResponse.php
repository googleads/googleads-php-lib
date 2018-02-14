<?php

namespace Google\AdsApi\Dfp\v201802;


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
     * @param string[] $rval
     * @return \Google\AdsApi\Dfp\v201802\registerSessionsForMonitoringResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
