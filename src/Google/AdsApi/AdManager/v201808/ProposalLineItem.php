<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalLineItem
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var int $proposalId
     */
    protected $proposalId = null;

    /**
     * @var int $packageId
     */
    protected $packageId = null;

    /**
     * @var int $rateCardId
     */
    protected $rateCardId = null;

    /**
     * @var int $productId
     */
    protected $productId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var string $timeZoneId
     */
    protected $timeZoneId = null;

    /**
     * @var string $internalNotes
     */
    protected $internalNotes = null;

    /**
     * @var string $costAdjustment
     */
    protected $costAdjustment = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Goal $goal
     */
    protected $goal = null;

    /**
     * @var int $contractedQuantityBuffer
     */
    protected $contractedQuantityBuffer = null;

    /**
     * @var int $scheduledQuantity
     */
    protected $scheduledQuantity = null;

    /**
     * @var int $contractedUnitsBought
     */
    protected $contractedUnitsBought = null;

    /**
     * @var string $deliveryRateType
     */
    protected $deliveryRateType = null;

    /**
     * @var string $roadblockingType
     */
    protected $roadblockingType = null;

    /**
     * @var string $companionDeliveryOption
     */
    protected $companionDeliveryOption = null;

    /**
     * @var string $creativeRotationType
     */
    protected $creativeRotationType = null;

    /**
     * @var int $videoMaxDuration
     */
    protected $videoMaxDuration = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\FrequencyCap[] $frequencyCaps
     */
    protected $frequencyCaps = null;

    /**
     * @var int $dfpLineItemId
     */
    protected $dfpLineItemId = null;

    /**
     * @var string $lineItemType
     */
    protected $lineItemType = null;

    /**
     * @var int $lineItemPriority
     */
    protected $lineItemPriority = null;

    /**
     * @var string $rateType
     */
    protected $rateType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\CreativePlaceholder[] $creativePlaceholders
     */
    protected $creativePlaceholders = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var boolean $disableSameAdvertiserCompetitiveExclusion
     */
    protected $disableSameAdvertiserCompetitiveExclusion = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\ProposalLineItemConstraints $productConstraints
     */
    protected $productConstraints = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\ProposalLineItemPremium[] $premiums
     */
    protected $premiums = null;

    /**
     * @var boolean $isSold
     */
    protected $isSold = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Money $baseRate
     */
    protected $baseRate = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Money $netRate
     */
    protected $netRate = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Money $grossRate
     */
    protected $grossRate = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Money $netCost
     */
    protected $netCost = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\Money $grossCost
     */
    protected $grossCost = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DeliveryIndicator $deliveryIndicator
     */
    protected $deliveryIndicator = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DeliveryData $deliveryData
     */
    protected $deliveryData = null;

    /**
     * @var string $computedStatus
     */
    protected $computedStatus = null;

    /**
     * @var string $billingCap
     */
    protected $billingCap = null;

    /**
     * @var string $billingSchedule
     */
    protected $billingSchedule = null;

    /**
     * @var string $billingSource
     */
    protected $billingSource = null;

    /**
     * @var string $billingBase
     */
    protected $billingBase = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $reservationStatus
     */
    protected $reservationStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $lastReservationDateTime
     */
    protected $lastReservationDateTime = null;

    /**
     * @var boolean $useThirdPartyAdServerFromProposal
     */
    protected $useThirdPartyAdServerFromProposal = null;

    /**
     * @var int $thirdPartyAdServerId
     */
    protected $thirdPartyAdServerId = null;

    /**
     * @var string $customThirdPartyAdServerName
     */
    protected $customThirdPartyAdServerName = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var boolean $isProgrammatic
     */
    protected $isProgrammatic = null;

    /**
     * @var string $linkStatus
     */
    protected $linkStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\ProposalLineItemMarketplaceInfo $marketplaceInfo
     */
    protected $marketplaceInfo = null;

    /**
     * @var string $rateCardPricingModel
     */
    protected $rateCardPricingModel = null;

    /**
     * @var string $additionalTerms
     */
    protected $additionalTerms = null;

    /**
     * @var string $programmaticCreativeSource
     */
    protected $programmaticCreativeSource = null;

    /**
     * @var int $estimatedMinimumImpressions
     */
    protected $estimatedMinimumImpressions = null;

    /**
     * @param int $id
     * @param int $proposalId
     * @param int $packageId
     * @param int $rateCardId
     * @param int $productId
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201808\DateTime $startDateTime
     * @param \Google\AdsApi\AdManager\v201808\DateTime $endDateTime
     * @param string $timeZoneId
     * @param string $internalNotes
     * @param string $costAdjustment
     * @param boolean $isArchived
     * @param \Google\AdsApi\AdManager\v201808\Goal $goal
     * @param int $contractedQuantityBuffer
     * @param int $scheduledQuantity
     * @param int $contractedUnitsBought
     * @param string $deliveryRateType
     * @param string $roadblockingType
     * @param string $companionDeliveryOption
     * @param string $creativeRotationType
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\AdManager\v201808\FrequencyCap[] $frequencyCaps
     * @param int $dfpLineItemId
     * @param string $lineItemType
     * @param int $lineItemPriority
     * @param string $rateType
     * @param \Google\AdsApi\AdManager\v201808\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\AdManager\v201808\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemConstraints $productConstraints
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemPremium[] $premiums
     * @param boolean $isSold
     * @param \Google\AdsApi\AdManager\v201808\Money $baseRate
     * @param \Google\AdsApi\AdManager\v201808\Money $netRate
     * @param \Google\AdsApi\AdManager\v201808\Money $grossRate
     * @param \Google\AdsApi\AdManager\v201808\Money $netCost
     * @param \Google\AdsApi\AdManager\v201808\Money $grossCost
     * @param \Google\AdsApi\AdManager\v201808\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\AdManager\v201808\DeliveryData $deliveryData
     * @param string $computedStatus
     * @param string $billingCap
     * @param string $billingSchedule
     * @param string $billingSource
     * @param string $billingBase
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     * @param string $reservationStatus
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastReservationDateTime
     * @param boolean $useThirdPartyAdServerFromProposal
     * @param int $thirdPartyAdServerId
     * @param string $customThirdPartyAdServerName
     * @param string $environmentType
     * @param boolean $isProgrammatic
     * @param string $linkStatus
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemMarketplaceInfo $marketplaceInfo
     * @param string $rateCardPricingModel
     * @param string $additionalTerms
     * @param string $programmaticCreativeSource
     * @param int $estimatedMinimumImpressions
     */
    public function __construct($id = null, $proposalId = null, $packageId = null, $rateCardId = null, $productId = null, $name = null, $startDateTime = null, $endDateTime = null, $timeZoneId = null, $internalNotes = null, $costAdjustment = null, $isArchived = null, $goal = null, $contractedQuantityBuffer = null, $scheduledQuantity = null, $contractedUnitsBought = null, $deliveryRateType = null, $roadblockingType = null, $companionDeliveryOption = null, $creativeRotationType = null, $videoMaxDuration = null, array $frequencyCaps = null, $dfpLineItemId = null, $lineItemType = null, $lineItemPriority = null, $rateType = null, array $creativePlaceholders = null, $targeting = null, array $customFieldValues = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $productConstraints = null, array $premiums = null, $isSold = null, $baseRate = null, $netRate = null, $grossRate = null, $netCost = null, $grossCost = null, $deliveryIndicator = null, $deliveryData = null, $computedStatus = null, $billingCap = null, $billingSchedule = null, $billingSource = null, $billingBase = null, $lastModifiedDateTime = null, $reservationStatus = null, $lastReservationDateTime = null, $useThirdPartyAdServerFromProposal = null, $thirdPartyAdServerId = null, $customThirdPartyAdServerName = null, $environmentType = null, $isProgrammatic = null, $linkStatus = null, $marketplaceInfo = null, $rateCardPricingModel = null, $additionalTerms = null, $programmaticCreativeSource = null, $estimatedMinimumImpressions = null)
    {
      $this->id = $id;
      $this->proposalId = $proposalId;
      $this->packageId = $packageId;
      $this->rateCardId = $rateCardId;
      $this->productId = $productId;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->timeZoneId = $timeZoneId;
      $this->internalNotes = $internalNotes;
      $this->costAdjustment = $costAdjustment;
      $this->isArchived = $isArchived;
      $this->goal = $goal;
      $this->contractedQuantityBuffer = $contractedQuantityBuffer;
      $this->scheduledQuantity = $scheduledQuantity;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->deliveryRateType = $deliveryRateType;
      $this->roadblockingType = $roadblockingType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->creativeRotationType = $creativeRotationType;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->frequencyCaps = $frequencyCaps;
      $this->dfpLineItemId = $dfpLineItemId;
      $this->lineItemType = $lineItemType;
      $this->lineItemPriority = $lineItemPriority;
      $this->rateType = $rateType;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->targeting = $targeting;
      $this->customFieldValues = $customFieldValues;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
      $this->productConstraints = $productConstraints;
      $this->premiums = $premiums;
      $this->isSold = $isSold;
      $this->baseRate = $baseRate;
      $this->netRate = $netRate;
      $this->grossRate = $grossRate;
      $this->netCost = $netCost;
      $this->grossCost = $grossCost;
      $this->deliveryIndicator = $deliveryIndicator;
      $this->deliveryData = $deliveryData;
      $this->computedStatus = $computedStatus;
      $this->billingCap = $billingCap;
      $this->billingSchedule = $billingSchedule;
      $this->billingSource = $billingSource;
      $this->billingBase = $billingBase;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->reservationStatus = $reservationStatus;
      $this->lastReservationDateTime = $lastReservationDateTime;
      $this->useThirdPartyAdServerFromProposal = $useThirdPartyAdServerFromProposal;
      $this->thirdPartyAdServerId = $thirdPartyAdServerId;
      $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      $this->environmentType = $environmentType;
      $this->isProgrammatic = $isProgrammatic;
      $this->linkStatus = $linkStatus;
      $this->marketplaceInfo = $marketplaceInfo;
      $this->rateCardPricingModel = $rateCardPricingModel;
      $this->additionalTerms = $additionalTerms;
      $this->programmaticCreativeSource = $programmaticCreativeSource;
      $this->estimatedMinimumImpressions = $estimatedMinimumImpressions;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposalId()
    {
      return $this->proposalId;
    }

    /**
     * @param int $proposalId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
      return $this;
    }

    /**
     * @return int
     */
    public function getPackageId()
    {
      return $this->packageId;
    }

    /**
     * @param int $packageId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setPackageId($packageId)
    {
      $this->packageId = (!is_null($packageId) && PHP_INT_SIZE === 4)
          ? floatval($packageId) : $packageId;
      return $this;
    }

    /**
     * @return int
     */
    public function getRateCardId()
    {
      return $this->rateCardId;
    }

    /**
     * @param int $rateCardId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setRateCardId($rateCardId)
    {
      $this->rateCardId = (!is_null($rateCardId) && PHP_INT_SIZE === 4)
          ? floatval($rateCardId) : $rateCardId;
      return $this;
    }

    /**
     * @return int
     */
    public function getProductId()
    {
      return $this->productId;
    }

    /**
     * @param int $productId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setProductId($productId)
    {
      $this->productId = (!is_null($productId) && PHP_INT_SIZE === 4)
          ? floatval($productId) : $productId;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getTimeZoneId()
    {
      return $this->timeZoneId;
    }

    /**
     * @param string $timeZoneId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setTimeZoneId($timeZoneId)
    {
      $this->timeZoneId = $timeZoneId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInternalNotes()
    {
      return $this->internalNotes;
    }

    /**
     * @param string $internalNotes
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setInternalNotes($internalNotes)
    {
      $this->internalNotes = $internalNotes;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostAdjustment()
    {
      return $this->costAdjustment;
    }

    /**
     * @param string $costAdjustment
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCostAdjustment($costAdjustment)
    {
      $this->costAdjustment = $costAdjustment;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsArchived()
    {
      return $this->isArchived;
    }

    /**
     * @param boolean $isArchived
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Goal
     */
    public function getGoal()
    {
      return $this->goal;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Goal $goal
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setGoal($goal)
    {
      $this->goal = $goal;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractedQuantityBuffer()
    {
      return $this->contractedQuantityBuffer;
    }

    /**
     * @param int $contractedQuantityBuffer
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setContractedQuantityBuffer($contractedQuantityBuffer)
    {
      $this->contractedQuantityBuffer = $contractedQuantityBuffer;
      return $this;
    }

    /**
     * @return int
     */
    public function getScheduledQuantity()
    {
      return $this->scheduledQuantity;
    }

    /**
     * @param int $scheduledQuantity
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setScheduledQuantity($scheduledQuantity)
    {
      $this->scheduledQuantity = (!is_null($scheduledQuantity) && PHP_INT_SIZE === 4)
          ? floatval($scheduledQuantity) : $scheduledQuantity;
      return $this;
    }

    /**
     * @return int
     */
    public function getContractedUnitsBought()
    {
      return $this->contractedUnitsBought;
    }

    /**
     * @param int $contractedUnitsBought
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setContractedUnitsBought($contractedUnitsBought)
    {
      $this->contractedUnitsBought = (!is_null($contractedUnitsBought) && PHP_INT_SIZE === 4)
          ? floatval($contractedUnitsBought) : $contractedUnitsBought;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryRateType()
    {
      return $this->deliveryRateType;
    }

    /**
     * @param string $deliveryRateType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setDeliveryRateType($deliveryRateType)
    {
      $this->deliveryRateType = $deliveryRateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoadblockingType()
    {
      return $this->roadblockingType;
    }

    /**
     * @param string $roadblockingType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setRoadblockingType($roadblockingType)
    {
      $this->roadblockingType = $roadblockingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getCompanionDeliveryOption()
    {
      return $this->companionDeliveryOption;
    }

    /**
     * @param string $companionDeliveryOption
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCompanionDeliveryOption($companionDeliveryOption)
    {
      $this->companionDeliveryOption = $companionDeliveryOption;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreativeRotationType()
    {
      return $this->creativeRotationType;
    }

    /**
     * @param string $creativeRotationType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCreativeRotationType($creativeRotationType)
    {
      $this->creativeRotationType = $creativeRotationType;
      return $this;
    }

    /**
     * @return int
     */
    public function getVideoMaxDuration()
    {
      return $this->videoMaxDuration;
    }

    /**
     * @param int $videoMaxDuration
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setVideoMaxDuration($videoMaxDuration)
    {
      $this->videoMaxDuration = (!is_null($videoMaxDuration) && PHP_INT_SIZE === 4)
          ? floatval($videoMaxDuration) : $videoMaxDuration;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\FrequencyCap[]
     */
    public function getFrequencyCaps()
    {
      return $this->frequencyCaps;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\FrequencyCap[] $frequencyCaps
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setFrequencyCaps(array $frequencyCaps)
    {
      $this->frequencyCaps = $frequencyCaps;
      return $this;
    }

    /**
     * @return int
     */
    public function getDfpLineItemId()
    {
      return $this->dfpLineItemId;
    }

    /**
     * @param int $dfpLineItemId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setDfpLineItemId($dfpLineItemId)
    {
      $this->dfpLineItemId = (!is_null($dfpLineItemId) && PHP_INT_SIZE === 4)
          ? floatval($dfpLineItemId) : $dfpLineItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getLineItemType()
    {
      return $this->lineItemType;
    }

    /**
     * @param string $lineItemType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setLineItemType($lineItemType)
    {
      $this->lineItemType = $lineItemType;
      return $this;
    }

    /**
     * @return int
     */
    public function getLineItemPriority()
    {
      return $this->lineItemPriority;
    }

    /**
     * @param int $lineItemPriority
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setLineItemPriority($lineItemPriority)
    {
      $this->lineItemPriority = $lineItemPriority;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateType()
    {
      return $this->rateType;
    }

    /**
     * @param string $rateType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\CreativePlaceholder[]
     */
    public function getCreativePlaceholders()
    {
      return $this->creativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\CreativePlaceholder[] $creativePlaceholders
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCreativePlaceholders(array $creativePlaceholders)
    {
      $this->creativePlaceholders = $creativePlaceholders;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getDisableSameAdvertiserCompetitiveExclusion()
    {
      return $this->disableSameAdvertiserCompetitiveExclusion;
    }

    /**
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setDisableSameAdvertiserCompetitiveExclusion($disableSameAdvertiserCompetitiveExclusion)
    {
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItemConstraints
     */
    public function getProductConstraints()
    {
      return $this->productConstraints;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemConstraints $productConstraints
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setProductConstraints($productConstraints)
    {
      $this->productConstraints = $productConstraints;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItemPremium[]
     */
    public function getPremiums()
    {
      return $this->premiums;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemPremium[] $premiums
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setPremiums(array $premiums)
    {
      $this->premiums = $premiums;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSold()
    {
      return $this->isSold;
    }

    /**
     * @param boolean $isSold
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setIsSold($isSold)
    {
      $this->isSold = $isSold;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Money
     */
    public function getBaseRate()
    {
      return $this->baseRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Money $baseRate
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setBaseRate($baseRate)
    {
      $this->baseRate = $baseRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Money
     */
    public function getNetRate()
    {
      return $this->netRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Money $netRate
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setNetRate($netRate)
    {
      $this->netRate = $netRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Money
     */
    public function getGrossRate()
    {
      return $this->grossRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Money $grossRate
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setGrossRate($grossRate)
    {
      $this->grossRate = $grossRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Money
     */
    public function getNetCost()
    {
      return $this->netCost;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Money $netCost
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setNetCost($netCost)
    {
      $this->netCost = $netCost;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\Money
     */
    public function getGrossCost()
    {
      return $this->grossCost;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\Money $grossCost
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setGrossCost($grossCost)
    {
      $this->grossCost = $grossCost;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DeliveryIndicator
     */
    public function getDeliveryIndicator()
    {
      return $this->deliveryIndicator;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DeliveryIndicator $deliveryIndicator
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setDeliveryIndicator($deliveryIndicator)
    {
      $this->deliveryIndicator = $deliveryIndicator;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DeliveryData
     */
    public function getDeliveryData()
    {
      return $this->deliveryData;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DeliveryData $deliveryData
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setDeliveryData($deliveryData)
    {
      $this->deliveryData = $deliveryData;
      return $this;
    }

    /**
     * @return string
     */
    public function getComputedStatus()
    {
      return $this->computedStatus;
    }

    /**
     * @param string $computedStatus
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setComputedStatus($computedStatus)
    {
      $this->computedStatus = $computedStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingCap()
    {
      return $this->billingCap;
    }

    /**
     * @param string $billingCap
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setBillingCap($billingCap)
    {
      $this->billingCap = $billingCap;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingSchedule()
    {
      return $this->billingSchedule;
    }

    /**
     * @param string $billingSchedule
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setBillingSchedule($billingSchedule)
    {
      $this->billingSchedule = $billingSchedule;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingSource()
    {
      return $this->billingSource;
    }

    /**
     * @param string $billingSource
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setBillingSource($billingSource)
    {
      $this->billingSource = $billingSource;
      return $this;
    }

    /**
     * @return string
     */
    public function getBillingBase()
    {
      return $this->billingBase;
    }

    /**
     * @param string $billingBase
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setBillingBase($billingBase)
    {
      $this->billingBase = $billingBase;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getReservationStatus()
    {
      return $this->reservationStatus;
    }

    /**
     * @param string $reservationStatus
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setReservationStatus($reservationStatus)
    {
      $this->reservationStatus = $reservationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getLastReservationDateTime()
    {
      return $this->lastReservationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $lastReservationDateTime
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setLastReservationDateTime($lastReservationDateTime)
    {
      $this->lastReservationDateTime = $lastReservationDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUseThirdPartyAdServerFromProposal()
    {
      return $this->useThirdPartyAdServerFromProposal;
    }

    /**
     * @param boolean $useThirdPartyAdServerFromProposal
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setUseThirdPartyAdServerFromProposal($useThirdPartyAdServerFromProposal)
    {
      $this->useThirdPartyAdServerFromProposal = $useThirdPartyAdServerFromProposal;
      return $this;
    }

    /**
     * @return int
     */
    public function getThirdPartyAdServerId()
    {
      return $this->thirdPartyAdServerId;
    }

    /**
     * @param int $thirdPartyAdServerId
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setThirdPartyAdServerId($thirdPartyAdServerId)
    {
      $this->thirdPartyAdServerId = $thirdPartyAdServerId;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomThirdPartyAdServerName()
    {
      return $this->customThirdPartyAdServerName;
    }

    /**
     * @param string $customThirdPartyAdServerName
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setCustomThirdPartyAdServerName($customThirdPartyAdServerName)
    {
      $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      return $this;
    }

    /**
     * @return string
     */
    public function getEnvironmentType()
    {
      return $this->environmentType;
    }

    /**
     * @param string $environmentType
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsProgrammatic()
    {
      return $this->isProgrammatic;
    }

    /**
     * @param boolean $isProgrammatic
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setIsProgrammatic($isProgrammatic)
    {
      $this->isProgrammatic = $isProgrammatic;
      return $this;
    }

    /**
     * @return string
     */
    public function getLinkStatus()
    {
      return $this->linkStatus;
    }

    /**
     * @param string $linkStatus
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setLinkStatus($linkStatus)
    {
      $this->linkStatus = $linkStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItemMarketplaceInfo
     */
    public function getMarketplaceInfo()
    {
      return $this->marketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\ProposalLineItemMarketplaceInfo $marketplaceInfo
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setMarketplaceInfo($marketplaceInfo)
    {
      $this->marketplaceInfo = $marketplaceInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getRateCardPricingModel()
    {
      return $this->rateCardPricingModel;
    }

    /**
     * @param string $rateCardPricingModel
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setRateCardPricingModel($rateCardPricingModel)
    {
      $this->rateCardPricingModel = $rateCardPricingModel;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdditionalTerms()
    {
      return $this->additionalTerms;
    }

    /**
     * @param string $additionalTerms
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setAdditionalTerms($additionalTerms)
    {
      $this->additionalTerms = $additionalTerms;
      return $this;
    }

    /**
     * @return string
     */
    public function getProgrammaticCreativeSource()
    {
      return $this->programmaticCreativeSource;
    }

    /**
     * @param string $programmaticCreativeSource
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setProgrammaticCreativeSource($programmaticCreativeSource)
    {
      $this->programmaticCreativeSource = $programmaticCreativeSource;
      return $this;
    }

    /**
     * @return int
     */
    public function getEstimatedMinimumImpressions()
    {
      return $this->estimatedMinimumImpressions;
    }

    /**
     * @param int $estimatedMinimumImpressions
     * @return \Google\AdsApi\AdManager\v201808\ProposalLineItem
     */
    public function setEstimatedMinimumImpressions($estimatedMinimumImpressions)
    {
      $this->estimatedMinimumImpressions = (!is_null($estimatedMinimumImpressions) && PHP_INT_SIZE === 4)
          ? floatval($estimatedMinimumImpressions) : $estimatedMinimumImpressions;
      return $this;
    }

}
