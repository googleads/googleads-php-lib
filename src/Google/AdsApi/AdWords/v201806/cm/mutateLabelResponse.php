<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class mutateLabelResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\CampaignLabelReturnValue $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\CampaignLabelReturnValue $rval
     */
    public function __construct($rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\CampaignLabelReturnValue
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\CampaignLabelReturnValue $rval
     * @return \Google\AdsApi\AdWords\v201806\cm\mutateLabelResponse
     */
    public function setRval($rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
