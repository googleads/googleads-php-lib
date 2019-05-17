<?php

namespace Google\AdsApi\AdManager\v201905;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItem extends \Google\AdsApi\AdManager\v201905\LineItemSummary
{

    /**
     * @var \Google\AdsApi\AdManager\v201905\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201905\CreativeTargeting[] $creativeTargetings
     */
    protected $creativeTargetings = null;

    /**
     * @param int $orderId
     * @param int $id
     * @param string $name
     * @param string $externalId
     * @param string $orderName
     * @param \Google\AdsApi\AdManager\v201905\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v201905\DateTime $endDateTime
     * @param int $autoExtensionDays
     * @param boolean $unlimitedEndDateTime
     * @param string $creativeRotationType
     * @param string $deliveryRateType
     * @param string $deliveryForecastSource
     * @param string $roadblockingType
     * @param \Google\AdsApi\AdManager\v201905\FrequencyCap[] $frequencyCaps
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v201905\Money $costPerUnit
     * @param \Google\AdsApi\AdManager\v201905\Money $valueCostPerUnit
     * @param string $costType
     * @param string $discountType
     * @param float $discount
     * @param int $contractedUnitsBought
     * @param \Google\AdsApi\AdManager\v201905\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\AdManager\v201905\LineItemActivityAssociation[] $activityAssociations
     * @param string $environmentType
     * @param string $companionDeliveryOption
     * @param boolean $allowOverbook
     * @param boolean $skipInventoryCheck
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @param boolean $reserveAtCreation
     * @param \Google\AdsApi\AdManager\v201905\Stats $stats
     * @param \Google\AdsApi\AdManager\v201905\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\AdManager\v201905\DeliveryData $deliveryData
     * @param \Google\AdsApi\AdManager\v201905\Money $budget
     * @param string $status
     * @param string $reservationStatus
     * @param boolean $isArchived
     * @param string $webPropertyCode
     * @param \Google\AdsApi\AdManager\v201905\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201905\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param string $lastModifiedByApp
     * @param string $notes
     * @param \Google\AdsApi\AdManager\v201905\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201905\DateTime $creationDateTime
     * @param boolean $isPrioritizedPreferredDealsEnabled
     * @param int $adExchangeAuctionOpeningPriority
     * @param \Google\AdsApi\AdManager\v201905\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isSetTopBoxEnabled
     * @param boolean $isMissingCreatives
     * @param \Google\AdsApi\AdManager\v201905\SetTopBoxInfo $setTopBoxDisplayInfo
     * @param string $programmaticCreativeSource
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\AdManager\v201905\Goal $primaryGoal
     * @param \Google\AdsApi\AdManager\v201905\Goal[] $secondaryGoals
     * @param \Google\AdsApi\AdManager\v201905\GrpSettings $grpSettings
     * @param \Google\AdsApi\AdManager\v201905\LineItemDealInfoDto $dealInfo
     * @param int $viewabilityProviderCompanyId
     * @param string $userConsentEligibility
     * @param string $childContentEligibility
     * @param \Google\AdsApi\AdManager\v201905\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v201905\CreativeTargeting[] $creativeTargetings
     */
    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $deliveryForecastSource = null, $roadblockingType = null, array $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, array $creativePlaceholders = null, array $activityAssociations = null, $environmentType = null, $companionDeliveryOption = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, array $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $programmaticCreativeSource = null, $videoMaxDuration = null, $primaryGoal = null, array $secondaryGoals = null, $grpSettings = null, $dealInfo = null, $viewabilityProviderCompanyId = null, $userConsentEligibility = null, $childContentEligibility = null, $targeting = null, array $creativeTargetings = null)
    {
      parent::__construct($orderId, $id, $name, $externalId, $orderName, $startDateTime, $startDateTimeType, $endDateTime, $autoExtensionDays, $unlimitedEndDateTime, $creativeRotationType, $deliveryRateType, $deliveryForecastSource, $roadblockingType, $frequencyCaps, $lineItemType, $priority, $costPerUnit, $valueCostPerUnit, $costType, $discountType, $discount, $contractedUnitsBought, $creativePlaceholders, $activityAssociations, $environmentType, $companionDeliveryOption, $allowOverbook, $skipInventoryCheck, $skipCrossSellingRuleWarningChecks, $reserveAtCreation, $stats, $deliveryIndicator, $deliveryData, $budget, $status, $reservationStatus, $isArchived, $webPropertyCode, $appliedLabels, $effectiveAppliedLabels, $disableSameAdvertiserCompetitiveExclusion, $lastModifiedByApp, $notes, $lastModifiedDateTime, $creationDateTime, $isPrioritizedPreferredDealsEnabled, $adExchangeAuctionOpeningPriority, $customFieldValues, $isSetTopBoxEnabled, $isMissingCreatives, $setTopBoxDisplayInfo, $programmaticCreativeSource, $videoMaxDuration, $primaryGoal, $secondaryGoals, $grpSettings, $dealInfo, $viewabilityProviderCompanyId, $userConsentEligibility, $childContentEligibility);
      $this->targeting = $targeting;
      $this->creativeTargetings = $creativeTargetings;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v201905\LineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201905\CreativeTargeting[]
     */
    public function getCreativeTargetings()
    {
      return $this->creativeTargetings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201905\CreativeTargeting[]|null $creativeTargetings
     * @return \Google\AdsApi\AdManager\v201905\LineItem
     */
    public function setCreativeTargetings(array $creativeTargetings = null)
    {
      $this->creativeTargetings = $creativeTargetings;
      return $this;
    }

}
