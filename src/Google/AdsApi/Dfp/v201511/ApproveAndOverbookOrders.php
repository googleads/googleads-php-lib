<?php

namespace Google\AdsApi\Dfp\v201511;

class ApproveAndOverbookOrders extends \Google\AdsApi\Dfp\v201511\ApproveOrders
{

    /**
     * @param boolean $skipInventoryCheck
     */
    public function __construct($skipInventoryCheck = null)
    {
      parent::__construct($skipInventoryCheck);
    }

}
