<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItem extends \Google\AdsApi\Dfp\v201708\LineItemSummary
{

    /**
     * @var \Google\AdsApi\Dfp\v201708\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\CreativeTargeting[] $creativeTargetings
     */
    protected $creativeTargetings = null;

    /**
     * @param int $orderId
     * @param int $id
     * @param string $name
     * @param string $externalId
     * @param string $orderName
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @param int $autoExtensionDays
     * @param boolean $unlimitedEndDateTime
     * @param string $creativeRotationType
     * @param string $deliveryRateType
     * @param string $roadblockingType
     * @param \Google\AdsApi\Dfp\v201708\FrequencyCap[] $frequencyCaps
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\Dfp\v201708\Money $costPerUnit
     * @param \Google\AdsApi\Dfp\v201708\Money $valueCostPerUnit
     * @param string $costType
     * @param string $discountType
     * @param float $discount
     * @param int $contractedUnitsBought
     * @param \Google\AdsApi\Dfp\v201708\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\Dfp\v201708\LineItemActivityAssociation[] $activityAssociations
     * @param string $environmentType
     * @param string $companionDeliveryOption
     * @param string $creativePersistenceType
     * @param boolean $allowOverbook
     * @param boolean $skipInventoryCheck
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @param boolean $reserveAtCreation
     * @param \Google\AdsApi\Dfp\v201708\Stats $stats
     * @param \Google\AdsApi\Dfp\v201708\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\Dfp\v201708\DeliveryData $deliveryData
     * @param \Google\AdsApi\Dfp\v201708\Money $budget
     * @param string $status
     * @param string $reservationStatus
     * @param boolean $isArchived
     * @param string $webPropertyCode
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param string $lastModifiedByApp
     * @param string $notes
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $creationDateTime
     * @param boolean $isPrioritizedPreferredDealsEnabled
     * @param int $adExchangeAuctionOpeningPriority
     * @param \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isSetTopBoxEnabled
     * @param boolean $isMissingCreatives
     * @param \Google\AdsApi\Dfp\v201708\SetTopBoxInfo $setTopBoxDisplayInfo
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\Dfp\v201708\Goal $primaryGoal
     * @param \Google\AdsApi\Dfp\v201708\Goal[] $secondaryGoals
     * @param \Google\AdsApi\Dfp\v201708\GrpSettings $grpSettings
     * @param \Google\AdsApi\Dfp\v201708\Targeting $targeting
     * @param \Google\AdsApi\Dfp\v201708\CreativeTargeting[] $creativeTargetings
     */
    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $roadblockingType = null, array $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, array $creativePlaceholders = null, array $activityAssociations = null, $environmentType = null, $companionDeliveryOption = null, $creativePersistenceType = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, array $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $videoMaxDuration = null, $primaryGoal = null, array $secondaryGoals = null, $grpSettings = null, $targeting = null, array $creativeTargetings = null)
    {
      parent::__construct($orderId, $id, $name, $externalId, $orderName, $startDateTime, $startDateTimeType, $endDateTime, $autoExtensionDays, $unlimitedEndDateTime, $creativeRotationType, $deliveryRateType, $roadblockingType, $frequencyCaps, $lineItemType, $priority, $costPerUnit, $valueCostPerUnit, $costType, $discountType, $discount, $contractedUnitsBought, $creativePlaceholders, $activityAssociations, $environmentType, $companionDeliveryOption, $creativePersistenceType, $allowOverbook, $skipInventoryCheck, $skipCrossSellingRuleWarningChecks, $reserveAtCreation, $stats, $deliveryIndicator, $deliveryData, $budget, $status, $reservationStatus, $isArchived, $webPropertyCode, $appliedLabels, $effectiveAppliedLabels, $disableSameAdvertiserCompetitiveExclusion, $lastModifiedByApp, $notes, $lastModifiedDateTime, $creationDateTime, $isPrioritizedPreferredDealsEnabled, $adExchangeAuctionOpeningPriority, $customFieldValues, $isSetTopBoxEnabled, $isMissingCreatives, $setTopBoxDisplayInfo, $videoMaxDuration, $primaryGoal, $secondaryGoals, $grpSettings);
      $this->targeting = $targeting;
      $this->creativeTargetings = $creativeTargetings;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Targeting $targeting
     * @return \Google\AdsApi\Dfp\v201708\LineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\CreativeTargeting[]
     */
    public function getCreativeTargetings()
    {
      return $this->creativeTargetings;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\CreativeTargeting[] $creativeTargetings
     * @return \Google\AdsApi\Dfp\v201708\LineItem
     */
    public function setCreativeTargetings(array $creativeTargetings)
    {
      $this->creativeTargetings = $creativeTargetings;
      return $this;
    }

}
