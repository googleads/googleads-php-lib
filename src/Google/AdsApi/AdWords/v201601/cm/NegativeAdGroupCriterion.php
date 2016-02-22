<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class NegativeAdGroupCriterion extends \Google\AdsApi\AdWords\v201601\cm\AdGroupCriterion
{

    /**
     * @param int $adGroupId
     * @param string $criterionUse
     * @param \Google\AdsApi\AdWords\v201601\cm\Criterion $criterion
     * @param \Google\AdsApi\AdWords\v201601\cm\Label[] $labels
     * @param \Google\AdsApi\AdWords\v201601\cm\String_StringMapEntry[] $forwardCompatibilityMap
     * @param string $AdGroupCriterionType
     */
    public function __construct($adGroupId = null, $criterionUse = null, $criterion = null, array $labels = null, array $forwardCompatibilityMap = null, $AdGroupCriterionType = null)
    {
      parent::__construct($adGroupId, $criterionUse, $criterion, $labels, $forwardCompatibilityMap, $AdGroupCriterionType);
    }

}
