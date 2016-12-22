<?php

namespace Google\AdsApi\AdWords\v201609\express;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201609\express\Promotion[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\Promotion[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201609\express\Promotion[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201609\express\Promotion[] $rval
     * @return \Google\AdsApi\AdWords\v201609\express\mutateResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
