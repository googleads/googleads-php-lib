<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getLanguageCriterionResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Language[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Language[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Language[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Language[] $rval
     * @return \Google\AdsApi\AdWords\v201806\cm\getLanguageCriterionResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
