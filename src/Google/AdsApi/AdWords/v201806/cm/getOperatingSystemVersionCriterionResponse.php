<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getOperatingSystemVersionCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\OperatingSystemVersion[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\OperatingSystemVersion[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\OperatingSystemVersion[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\OperatingSystemVersion[] $rval
     * @return \Google\AdsApi\AdWords\v201806\cm\getOperatingSystemVersionCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
