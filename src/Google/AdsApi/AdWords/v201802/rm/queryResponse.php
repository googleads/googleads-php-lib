<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class queryResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\UserListPage $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserListPage $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\UserListPage
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\UserListPage $rval
     * @return \Google\AdsApi\AdWords\v201802\rm\queryResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
