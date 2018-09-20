<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AssetPolicySummaryInfo extends \Google\AdsApi\AdWords\v201809\cm\PolicySummaryInfo
{

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\PolicyTopicEntry[] $policyTopicEntries
     * @param string $reviewState
     * @param string $denormalizedStatus
     * @param string $combinedApprovalStatus
     * @param string $PolicySummaryInfoType
     */
    public function __construct(array $policyTopicEntries = null, $reviewState = null, $denormalizedStatus = null, $combinedApprovalStatus = null, $PolicySummaryInfoType = null)
    {
      parent::__construct($policyTopicEntries, $reviewState, $denormalizedStatus, $combinedApprovalStatus, $PolicySummaryInfoType);
    }

}
