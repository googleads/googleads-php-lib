<?php

namespace Google\AdsApi\Dfp\v201511;

class SubmitOrdersForApprovalAndOverbook extends \Google\AdsApi\Dfp\v201511\SubmitOrdersForApproval
{

    /**
     * @param boolean $skipInventoryCheck
     */
    public function __construct($skipInventoryCheck = null)
    {
      parent::__construct($skipInventoryCheck);
    }

}
