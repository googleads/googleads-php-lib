<?php

namespace Google\AdsApi\AdManager\v202202;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ResumeOrders extends \Google\AdsApi\AdManager\v202202\OrderAction
{

    /**
     * @var boolean $skipInventoryCheck
     */
    protected $skipInventoryCheck = null;

    /**
     * @param boolean $skipInventoryCheck
     */
    public function __construct($skipInventoryCheck = null)
    {
      $this->skipInventoryCheck = $skipInventoryCheck;
    }

    /**
     * @return boolean
     */
    public function getSkipInventoryCheck()
    {
      return $this->skipInventoryCheck;
    }

    /**
     * @param boolean $skipInventoryCheck
     * @return \Google\AdsApi\AdManager\v202202\ResumeOrders
     */
    public function setSkipInventoryCheck($skipInventoryCheck)
    {
      $this->skipInventoryCheck = $skipInventoryCheck;
      return $this;
    }

}
