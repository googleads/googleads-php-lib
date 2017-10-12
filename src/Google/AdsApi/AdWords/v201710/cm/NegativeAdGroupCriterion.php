<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class NegativeAdGroupCriterion extends \Google\AdsApi\AdWords\v201710\cm\AdGroupCriterion
{

    /**
     * @param int $adGroupId
     * @param string $criterionUse
     * @param \Google\AdsApi\AdWords\v201710\cm\Criterion $criterion
     * @param \Google\AdsApi\AdWords\v201710\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201710\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param int $baseCampaignId
     * @param int $baseAdGroupId
     * @param string $AdGroupCriterionType
     */
    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, array $labels = null, array $forwardCompatibilityMap = null, $baseCampaignId = null, $baseAdGroupId = null, $AdGroupCriterionType = null)
    {
      parent::__construct($adGroupId, $criterionUse, $criterion, $labels, $forwardCompatibilityMap, $baseCampaignId, $baseAdGroupId, $AdGroupCriterionType);
    }

}
