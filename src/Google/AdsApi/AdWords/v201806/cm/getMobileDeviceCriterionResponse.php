<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getMobileDeviceCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\MobileDevice[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\MobileDevice[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\MobileDevice[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\MobileDevice[] $rval
     * @return \Google\AdsApi\AdWords\v201806\cm\getMobileDeviceCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
