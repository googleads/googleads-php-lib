<?php

namespace Google\AdsApi\AdWords\v201802\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineData
{

    /**
     * @var \Google\AdsApi\AdWords\v201802\rm\StoreSalesTransaction $StoreSalesTransaction
     */
    protected $StoreSalesTransaction = null;

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\StoreSalesTransaction $StoreSalesTransaction
     */
    public function __construct($StoreSalesTransaction = null)
    {
      $this->StoreSalesTransaction = $StoreSalesTransaction;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\rm\StoreSalesTransaction
     */
    public function getStoreSalesTransaction()
    {
      return $this->StoreSalesTransaction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\rm\StoreSalesTransaction $StoreSalesTransaction
     * @return \Google\AdsApi\AdWords\v201802\rm\OfflineData
     */
    public function setStoreSalesTransaction($StoreSalesTransaction)
    {
      $this->StoreSalesTransaction = $StoreSalesTransaction;
      return $this;
    }

}
