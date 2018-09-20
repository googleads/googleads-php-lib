<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class uploadResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Media[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Media[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Media[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Media[] $rval
     * @return \Google\AdsApi\AdWords\v201809\cm\uploadResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
