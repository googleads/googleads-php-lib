<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getReportDownloadURLResponse
{

    /**
     * @var string $rval
     */
    protected $rval = null;

    /**
     * @param string $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return string
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param string $rval
     * @return \Google\AdsApi\AdManager\v202202\getReportDownloadURLResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
