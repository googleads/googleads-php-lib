<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NegativeFeedItemCriterionTarget extends \Google\AdsApi\AdWords\v201806\cm\FeedItemCriterionTarget
{

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $targetType
     * @param string $status
     * @param string $FeedItemTargetType
     * @param \Google\AdsApi\AdWords\v201806\cm\Criterion $criterion
     * @param boolean $isNegative
     */
    public function __construct($feedId = null, $feedItemId = null, $targetType = null, $status = null, $FeedItemTargetType = null, $criterion = null, $isNegative = null)
    {
      parent::__construct($feedId, $feedItemId, $targetType, $status, $FeedItemTargetType, $criterion, $isNegative);
    }

}
