<?php

namespace Google\AdsApi\Dfp\v201511;

class ReserveAndOverbookLineItems extends \Google\AdsApi\Dfp\v201511\ReserveLineItems
{

    /**
     * @param boolean $skipInventoryCheck
     */
    public function __construct($skipInventoryCheck = null)
    {
      parent::__construct($skipInventoryCheck);
    }

}
