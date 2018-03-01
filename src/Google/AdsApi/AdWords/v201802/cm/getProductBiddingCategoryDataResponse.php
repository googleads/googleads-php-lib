<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class getProductBiddingCategoryDataResponse
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData[] $rval
     */
    protected $rval = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData[] $rval
     */
    public function __construct(array $rval = null)
    {
      $this->rval = $rval;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData[]
     */
    public function getRval()
    {
      return $this->rval;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\ProductBiddingCategoryData[] $rval
     * @return \Google\AdsApi\AdWords\v201802\cm\getProductBiddingCategoryDataResponse
     */
    public function setRval(array $rval)
    {
      $this->rval = $rval;
      return $this;
    }

}
