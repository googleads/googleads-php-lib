<?php

namespace Google\AdsApi\AdWords\v201702\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class upgradeUrlResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201702\cm\Ad[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201702\cm\Ad[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201702\cm\Ad[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201702\cm\Ad[] $rval
     * @return \Google\AdsApi\AdWords\v201702\cm\upgradeUrlResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
