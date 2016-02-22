<?php

namespace Google\AdsApi\Dfp\v201511;

class ResumeOrders extends \Google\AdsApi\Dfp\v201511\OrderAction
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
     * @return \Google\AdsApi\Dfp\v201511\ResumeOrders
     */
    public function setSkipInventoryCheck($skipInventoryCheck)
    {
      $this->skipInventoryCheck = $skipInventoryCheck;
      return $this;
    }

}
