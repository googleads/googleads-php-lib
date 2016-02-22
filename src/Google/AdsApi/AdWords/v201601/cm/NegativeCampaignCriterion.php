<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class NegativeCampaignCriterion extends \Google\AdsApi\AdWords\v201601\cm\CampaignCriterion
{

    /**
     * @param int $campaignId
     * @param boolean $isNegative
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     * @param float $bidModifier
     * @param \Google\AdsApi\AdWords\v201601\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param string $CampaignCriterionType
     */
    public function __construct($campaignId = null, $isNegative = null, $criterion = null, $bidModifier = null, array $forwardCompatibilityMap = null, $CampaignCriterionType = null)
    {
      parent::__construct($campaignId, $isNegative, $criterion, $bidModifier, $forwardCompatibilityMap, $CampaignCriterionType);
    }

}
