<?php

namespace Google\AdsApi\AdManager\v202508;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItem extends \Google\AdsApi\AdManager\v202508\LineItemSummary
{

    /**
     * @var \Google\AdsApi\AdManager\v202508\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202508\CreativeTargeting[] $creativeTargetings
     */
    protected $creativeTargetings = null;

    /**
     * @param int $orderId
     * @param int $id
     * @param string $name
     * @param string $externalId
     * @param string $orderName
     * @param \Google\AdsApi\AdManager\v202508\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v202508\DateTime $endDateTime
     * @param int $autoExtensionDays
     * @param boolean $unlimitedEndDateTime
     * @param string $creativeRotationType
     * @param string $deliveryRateType
     * @param string $deliveryForecastSource
     * @param \Google\AdsApi\AdManager\v202508\CustomPacingCurve $customPacingCurve
     * @param string $roadblockingType
     * @param string $skippableAdType
     * @param \Google\AdsApi\AdManager\v202508\FrequencyCap[] $frequencyCaps
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v202508\Money $costPerUnit
     * @param \Google\AdsApi\AdManager\v202508\Money $valueCostPerUnit
     * @param string $costType
     * @param string $discountType
     * @param float $discount
     * @param int $contractedUnitsBought
     * @param \Google\AdsApi\AdManager\v202508\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\AdManager\v202508\LineItemActivityAssociation[] $activityAssociations
     * @param string $environmentType
     * @param string[] $allowedFormats
     * @param string $companionDeliveryOption
     * @param boolean $allowOverbook
     * @param boolean $skipInventoryCheck
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @param boolean $reserveAtCreation
     * @param \Google\AdsApi\AdManager\v202508\Stats $stats
     * @param \Google\AdsApi\AdManager\v202508\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\AdManager\v202508\DeliveryData $deliveryData
     * @param \Google\AdsApi\AdManager\v202508\Money $budget
     * @param string $status
     * @param string $reservationStatus
     * @param boolean $isArchived
     * @param string $webPropertyCode
     * @param \Google\AdsApi\AdManager\v202508\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202508\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param string $lastModifiedByApp
     * @param string $notes
     * @param string $competitiveConstraintScope
     * @param \Google\AdsApi\AdManager\v202508\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202508\DateTime $creationDateTime
     * @param \Google\AdsApi\AdManager\v202508\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isMissingCreatives
     * @param string $programmaticCreativeSource
     * @param \Google\AdsApi\AdManager\v202508\ThirdPartyMeasurementSettings $thirdPartyMeasurementSettings
     * @param boolean $youtubeKidsRestricted
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\AdManager\v202508\Goal $primaryGoal
     * @param \Google\AdsApi\AdManager\v202508\Goal[] $secondaryGoals
     * @param \Google\AdsApi\AdManager\v202508\GrpSettings $grpSettings
     * @param \Google\AdsApi\AdManager\v202508\LineItemDealInfoDto $dealInfo
     * @param int[] $viewabilityProviderCompanyIds
     * @param string $childContentEligibility
     * @param string $customVastExtension
     * @param boolean $repeatedCreativeServingEnabled
     * @param \Google\AdsApi\AdManager\v202508\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v202508\CreativeTargeting[] $creativeTargetings
     */
    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $deliveryForecastSource = null, $customPacingCurve = null, $roadblockingType = null, $skippableAdType = null, ?array $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, ?array $creativePlaceholders = null, ?array $activityAssociations = null, $environmentType = null, ?array $allowedFormats = null, $companionDeliveryOption = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, ?array $appliedLabels = null, ?array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $competitiveConstraintScope = null, $lastModifiedDateTime = null, $creationDateTime = null, ?array $customFieldValues = null, $isMissingCreatives = null, $programmaticCreativeSource = null, $thirdPartyMeasurementSettings = null, $youtubeKidsRestricted = null, $videoMaxDuration = null, $primaryGoal = null, ?array $secondaryGoals = null, $grpSettings = null, $dealInfo = null, ?array $viewabilityProviderCompanyIds = null, $childContentEligibility = null, $customVastExtension = null, $repeatedCreativeServingEnabled = null, $targeting = null, ?array $creativeTargetings = null)
    {
      parent::__construct($orderId, $id, $name, $externalId, $orderName, $startDateTime, $startDateTimeType, $endDateTime, $autoExtensionDays, $unlimitedEndDateTime, $creativeRotationType, $deliveryRateType, $deliveryForecastSource, $customPacingCurve, $roadblockingType, $skippableAdType, $frequencyCaps, $lineItemType, $priority, $costPerUnit, $valueCostPerUnit, $costType, $discountType, $discount, $contractedUnitsBought, $creativePlaceholders, $activityAssociations, $environmentType, $allowedFormats, $companionDeliveryOption, $allowOverbook, $skipInventoryCheck, $skipCrossSellingRuleWarningChecks, $reserveAtCreation, $stats, $deliveryIndicator, $deliveryData, $budget, $status, $reservationStatus, $isArchived, $webPropertyCode, $appliedLabels, $effectiveAppliedLabels, $disableSameAdvertiserCompetitiveExclusion, $lastModifiedByApp, $notes, $competitiveConstraintScope, $lastModifiedDateTime, $creationDateTime, $customFieldValues, $isMissingCreatives, $programmaticCreativeSource, $thirdPartyMeasurementSettings, $youtubeKidsRestricted, $videoMaxDuration, $primaryGoal, $secondaryGoals, $grpSettings, $dealInfo, $viewabilityProviderCompanyIds, $childContentEligibility, $customVastExtension, $repeatedCreativeServingEnabled);
      $this->targeting = $targeting;
      $this->creativeTargetings = $creativeTargetings;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202508\LineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202508\CreativeTargeting[]
     */
    public function getCreativeTargetings()
    {
      return $this->creativeTargetings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202508\CreativeTargeting[]|null $creativeTargetings
     * @return \Google\AdsApi\AdManager\v202508\LineItem
     */
    public function setCreativeTargetings(?array $creativeTargetings = null)
    {
      $this->creativeTargetings = $creativeTargetings;
      return $this;
    }

}
