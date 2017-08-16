<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class BillableRevenueOverrides
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $netBillableRevenueOverride
     */
    protected $netBillableRevenueOverride = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $grossBillableRevenueOverride
     */
    protected $grossBillableRevenueOverride = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $billableRevenueOverride
     */
    protected $billableRevenueOverride = null;

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $netBillableRevenueOverride
     * @param \Google\AdsApi\Dfp\v201708\Money $grossBillableRevenueOverride
     * @param \Google\AdsApi\Dfp\v201708\Money $billableRevenueOverride
     */
    public function __construct($netBillableRevenueOverride = null, $grossBillableRevenueOverride = null, $billableRevenueOverride = null)
    {
      $this->netBillableRevenueOverride = $netBillableRevenueOverride;
      $this->grossBillableRevenueOverride = $grossBillableRevenueOverride;
      $this->billableRevenueOverride = $billableRevenueOverride;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getNetBillableRevenueOverride()
    {
      return $this->netBillableRevenueOverride;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $netBillableRevenueOverride
     * @return \Google\AdsApi\Dfp\v201708\BillableRevenueOverrides
     */
    public function setNetBillableRevenueOverride($netBillableRevenueOverride)
    {
      $this->netBillableRevenueOverride = $netBillableRevenueOverride;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getGrossBillableRevenueOverride()
    {
      return $this->grossBillableRevenueOverride;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $grossBillableRevenueOverride
     * @return \Google\AdsApi\Dfp\v201708\BillableRevenueOverrides
     */
    public function setGrossBillableRevenueOverride($grossBillableRevenueOverride)
    {
      $this->grossBillableRevenueOverride = $grossBillableRevenueOverride;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getBillableRevenueOverride()
    {
      return $this->billableRevenueOverride;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $billableRevenueOverride
     * @return \Google\AdsApi\Dfp\v201708\BillableRevenueOverrides
     */
    public function setBillableRevenueOverride($billableRevenueOverride)
    {
      $this->billableRevenueOverride = $billableRevenueOverride;
      return $this;
    }

}
