<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NegativeCampaignCriterion extends \Google\AdsApi\AdWords\v201710\cm\CampaignCriterion
{

    /**
     * @param int $campaignId
     * @param boolean $isNegative
     * @param \Google\AdsApi\AdWords\v201710\cm\Criterion $criterion
     * @param float $bidModifier
     * @param string $campaignCriterionStatus
     * @param int $baseCampaignId
     * @param \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param string $CampaignCriterionType
     */
    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, $campaignCriterionStatus = null, $baseCampaignId = null, array $forwardCompatibilityMap = null, $CampaignCriterionType = null)
    {
      parent::__construct($campaignId, $isNegative, $criterion, $bidModifier, $campaignCriterionStatus, $baseCampaignId, $forwardCompatibilityMap, $CampaignCriterionType);
    }

}
