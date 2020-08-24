<?php

namespace Google\AdsApi\AdManager\v202002;


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
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
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
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Goal $goal
     */
    protected $goal = null;

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
     * @var int $videoMaxDuration
     */
    protected $videoMaxDuration = null;

    /**
     * @var string $videoCreativeSkippableAdType
     */
    protected $videoCreativeSkippableAdType = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\FrequencyCap[] $frequencyCaps
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
     * @var \Google\AdsApi\AdManager\v202002\CreativePlaceholder[] $creativePlaceholders
     */
    protected $creativePlaceholders = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Targeting $targeting
     */
    protected $targeting = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var boolean $disableSameAdvertiserCompetitiveExclusion
     */
    protected $disableSameAdvertiserCompetitiveExclusion = null;

    /**
     * @var boolean $isSold
     */
    protected $isSold = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Money $netRate
     */
    protected $netRate = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\Money $netCost
     */
    protected $netCost = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DeliveryIndicator $deliveryIndicator
     */
    protected $deliveryIndicator = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DeliveryData $deliveryData
     */
    protected $deliveryData = null;

    /**
     * @var string $computedStatus
     */
    protected $computedStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var string $reservationStatus
     */
    protected $reservationStatus = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $lastReservationDateTime
     */
    protected $lastReservationDateTime = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var string[] $allowedFormats
     */
    protected $allowedFormats = null;

    /**
     * @var boolean $isProgrammatic
     */
    protected $isProgrammatic = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\ProposalLineItemMarketplaceInfo $marketplaceInfo
     */
    protected $marketplaceInfo = null;

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
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     * @param string $timeZoneId
     * @param string $internalNotes
     * @param boolean $isArchived
     * @param \Google\AdsApi\AdManager\v202002\Goal $goal
     * @param int $contractedUnitsBought
     * @param string $deliveryRateType
     * @param string $roadblockingType
     * @param string $companionDeliveryOption
     * @param int $videoMaxDuration
     * @param string $videoCreativeSkippableAdType
     * @param \Google\AdsApi\AdManager\v202002\FrequencyCap[] $frequencyCaps
     * @param int $dfpLineItemId
     * @param string $lineItemType
     * @param int $lineItemPriority
     * @param string $rateType
     * @param \Google\AdsApi\AdManager\v202002\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\AdManager\v202002\Targeting $targeting
     * @param \Google\AdsApi\AdManager\v202002\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param boolean $isSold
     * @param \Google\AdsApi\AdManager\v202002\Money $netRate
     * @param \Google\AdsApi\AdManager\v202002\Money $netCost
     * @param \Google\AdsApi\AdManager\v202002\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\AdManager\v202002\DeliveryData $deliveryData
     * @param string $computedStatus
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     * @param string $reservationStatus
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastReservationDateTime
     * @param string $environmentType
     * @param string[] $allowedFormats
     * @param boolean $isProgrammatic
     * @param \Google\AdsApi\AdManager\v202002\ProposalLineItemMarketplaceInfo $marketplaceInfo
     * @param string $additionalTerms
     * @param string $programmaticCreativeSource
     * @param int $estimatedMinimumImpressions
     */
    public function __construct($id = null, $proposalId = null, $name = null, $startDateTime = null, $endDateTime = null, $timeZoneId = null, $internalNotes = null, $isArchived = null, $goal = null, $contractedUnitsBought = null, $deliveryRateType = null, $roadblockingType = null, $companionDeliveryOption = null, $videoMaxDuration = null, $videoCreativeSkippableAdType = null, array $frequencyCaps = null, $dfpLineItemId = null, $lineItemType = null, $lineItemPriority = null, $rateType = null, array $creativePlaceholders = null, $targeting = null, array $customFieldValues = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $isSold = null, $netRate = null, $netCost = null, $deliveryIndicator = null, $deliveryData = null, $computedStatus = null, $lastModifiedDateTime = null, $reservationStatus = null, $lastReservationDateTime = null, $environmentType = null, array $allowedFormats = null, $isProgrammatic = null, $marketplaceInfo = null, $additionalTerms = null, $programmaticCreativeSource = null, $estimatedMinimumImpressions = null)
    {
      $this->id = $id;
      $this->proposalId = $proposalId;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->timeZoneId = $timeZoneId;
      $this->internalNotes = $internalNotes;
      $this->isArchived = $isArchived;
      $this->goal = $goal;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->deliveryRateType = $deliveryRateType;
      $this->roadblockingType = $roadblockingType;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->videoCreativeSkippableAdType = $videoCreativeSkippableAdType;
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
      $this->isSold = $isSold;
      $this->netRate = $netRate;
      $this->netCost = $netCost;
      $this->deliveryIndicator = $deliveryIndicator;
      $this->deliveryData = $deliveryData;
      $this->computedStatus = $computedStatus;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->reservationStatus = $reservationStatus;
      $this->lastReservationDateTime = $lastReservationDateTime;
      $this->environmentType = $environmentType;
      $this->allowedFormats = $allowedFormats;
      $this->isProgrammatic = $isProgrammatic;
      $this->marketplaceInfo = $marketplaceInfo;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setProposalId($proposalId)
    {
      $this->proposalId = (!is_null($proposalId) && PHP_INT_SIZE === 4)
          ? floatval($proposalId) : $proposalId;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setInternalNotes($internalNotes)
    {
      $this->internalNotes = $internalNotes;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Goal
     */
    public function getGoal()
    {
      return $this->goal;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Goal $goal
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setGoal($goal)
    {
      $this->goal = $goal;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setCompanionDeliveryOption($companionDeliveryOption)
    {
      $this->companionDeliveryOption = $companionDeliveryOption;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setVideoMaxDuration($videoMaxDuration)
    {
      $this->videoMaxDuration = (!is_null($videoMaxDuration) && PHP_INT_SIZE === 4)
          ? floatval($videoMaxDuration) : $videoMaxDuration;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoCreativeSkippableAdType()
    {
      return $this->videoCreativeSkippableAdType;
    }

    /**
     * @param string $videoCreativeSkippableAdType
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setVideoCreativeSkippableAdType($videoCreativeSkippableAdType)
    {
      $this->videoCreativeSkippableAdType = $videoCreativeSkippableAdType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\FrequencyCap[]
     */
    public function getFrequencyCaps()
    {
      return $this->frequencyCaps;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\FrequencyCap[]|null $frequencyCaps
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setFrequencyCaps(array $frequencyCaps = null)
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setRateType($rateType)
    {
      $this->rateType = $rateType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\CreativePlaceholder[]
     */
    public function getCreativePlaceholders()
    {
      return $this->creativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\CreativePlaceholder[]|null $creativePlaceholders
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setCreativePlaceholders(array $creativePlaceholders = null)
    {
      $this->creativePlaceholders = $creativePlaceholders;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Targeting
     */
    public function getTargeting()
    {
      return $this->targeting;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Targeting $targeting
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setTargeting($targeting)
    {
      $this->targeting = $targeting;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\BaseCustomFieldValue[]|null $customFieldValues
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setCustomFieldValues(array $customFieldValues = null)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[]|null $appliedLabels
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setAppliedLabels(array $appliedLabels = null)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[]|null $effectiveAppliedLabels
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels = null)
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setDisableSameAdvertiserCompetitiveExclusion($disableSameAdvertiserCompetitiveExclusion)
    {
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setIsSold($isSold)
    {
      $this->isSold = $isSold;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Money
     */
    public function getNetRate()
    {
      return $this->netRate;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Money $netRate
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setNetRate($netRate)
    {
      $this->netRate = $netRate;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\Money
     */
    public function getNetCost()
    {
      return $this->netCost;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\Money $netCost
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setNetCost($netCost)
    {
      $this->netCost = $netCost;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DeliveryIndicator
     */
    public function getDeliveryIndicator()
    {
      return $this->deliveryIndicator;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DeliveryIndicator $deliveryIndicator
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setDeliveryIndicator($deliveryIndicator)
    {
      $this->deliveryIndicator = $deliveryIndicator;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DeliveryData
     */
    public function getDeliveryData()
    {
      return $this->deliveryData;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DeliveryData $deliveryData
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setComputedStatus($computedStatus)
    {
      $this->computedStatus = $computedStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setReservationStatus($reservationStatus)
    {
      $this->reservationStatus = $reservationStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\DateTime
     */
    public function getLastReservationDateTime()
    {
      return $this->lastReservationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastReservationDateTime
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setLastReservationDateTime($lastReservationDateTime)
    {
      $this->lastReservationDateTime = $lastReservationDateTime;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setEnvironmentType($environmentType)
    {
      $this->environmentType = $environmentType;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedFormats()
    {
      return $this->allowedFormats;
    }

    /**
     * @param string[]|null $allowedFormats
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setAllowedFormats(array $allowedFormats = null)
    {
      $this->allowedFormats = $allowedFormats;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setIsProgrammatic($isProgrammatic)
    {
      $this->isProgrammatic = $isProgrammatic;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItemMarketplaceInfo
     */
    public function getMarketplaceInfo()
    {
      return $this->marketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\ProposalLineItemMarketplaceInfo $marketplaceInfo
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setMarketplaceInfo($marketplaceInfo)
    {
      $this->marketplaceInfo = $marketplaceInfo;
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
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
     * @return \Google\AdsApi\AdManager\v202002\ProposalLineItem
     */
    public function setEstimatedMinimumImpressions($estimatedMinimumImpressions)
    {
      $this->estimatedMinimumImpressions = (!is_null($estimatedMinimumImpressions) && PHP_INT_SIZE === 4)
          ? floatval($estimatedMinimumImpressions) : $estimatedMinimumImpressions;
      return $this;
    }

}
