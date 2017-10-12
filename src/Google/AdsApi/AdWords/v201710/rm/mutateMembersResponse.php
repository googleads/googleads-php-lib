<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateMembersResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\rm\MutateMembersReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\rm\MutateMembersReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\rm\MutateMembersReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\rm\MutateMembersReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201710\rm\mutateMembersResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
