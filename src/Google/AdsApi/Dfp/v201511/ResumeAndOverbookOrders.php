<?php

namespace Google\AdsApi\Dfp\v201511;

class ResumeAndOverbookOrders extends \Google\AdsApi\Dfp\v201511\ResumeOrders
{

    /**
     * @param boolean $skipInventoryCheck
     */
    public function __construct($skipInventoryCheck = null)
    {
      parent::__construct($skipInventoryCheck);
    }

}
