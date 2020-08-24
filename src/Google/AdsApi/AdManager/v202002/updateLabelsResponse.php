<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class updateLabelsResponse
{

    /**
     * @var \Google\AdsApi\AdManager\v202002\Label[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdManager\v202002\Label[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Label[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Label[]|null $rval
     * @return \Google\AdsApi\AdManager\v202002\updateLabelsResponse
     */
    public function setRval(array $rval = null)
    {
      $this->rval = $rval;
      return $this;
    }

}
