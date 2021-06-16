<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\TrialPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\TrialPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\TrialPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\TrialPage $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\getResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
