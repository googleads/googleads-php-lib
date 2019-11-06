<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class LineItemSummary
{

    /**
     * @var int $orderId
     */
    protected $orderId = null;

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var string $orderName
     */
    protected $orderName = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var string $startDateTimeType
     */
    protected $startDateTimeType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var int $autoExtensionDays
     */
    protected $autoExtensionDays = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var string $creativeRotationType
     */
    protected $creativeRotationType = null;

    /**
     * @var string $deliveryRateType
     */
    protected $deliveryRateType = null;

    /**
     * @var string $deliveryForecastSource
     */
    protected $deliveryForecastSource = null;

    /**
     * @var string $roadblockingType
     */
    protected $roadblockingType = null;

    /**
     * @var string $skippableAdType
     */
    protected $skippableAdType = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\FrequencyCap[] $frequencyCaps
     */
    protected $frequencyCaps = null;

    /**
     * @var string $lineItemType
     */
    protected $lineItemType = null;

    /**
     * @var int $priority
     */
    protected $priority = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Money $costPerUnit
     */
    protected $costPerUnit = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Money $valueCostPerUnit
     */
    protected $valueCostPerUnit = null;

    /**
     * @var string $costType
     */
    protected $costType = null;

    /**
     * @var string $discountType
     */
    protected $discountType = null;

    /**
     * @var float $discount
     */
    protected $discount = null;

    /**
     * @var int $contractedUnitsBought
     */
    protected $contractedUnitsBought = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\CreativePlaceholder[] $creativePlaceholders
     */
    protected $creativePlaceholders = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\LineItemActivityAssociation[] $activityAssociations
     */
    protected $activityAssociations = null;

    /**
     * @var string $environmentType
     */
    protected $environmentType = null;

    /**
     * @var string[] $allowedFormats
     */
    protected $allowedFormats = null;

    /**
     * @var string $companionDeliveryOption
     */
    protected $companionDeliveryOption = null;

    /**
     * @var boolean $allowOverbook
     */
    protected $allowOverbook = null;

    /**
     * @var boolean $skipInventoryCheck
     */
    protected $skipInventoryCheck = null;

    /**
     * @var boolean $skipCrossSellingRuleWarningChecks
     */
    protected $skipCrossSellingRuleWarningChecks = null;

    /**
     * @var boolean $reserveAtCreation
     */
    protected $reserveAtCreation = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Stats $stats
     */
    protected $stats = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DeliveryIndicator $deliveryIndicator
     */
    protected $deliveryIndicator = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DeliveryData $deliveryData
     */
    protected $deliveryData = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Money $budget
     */
    protected $budget = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $reservationStatus
     */
    protected $reservationStatus = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var string $webPropertyCode
     */
    protected $webPropertyCode = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var boolean $disableSameAdvertiserCompetitiveExclusion
     */
    protected $disableSameAdvertiserCompetitiveExclusion = null;

    /**
     * @var string $lastModifiedByApp
     */
    protected $lastModifiedByApp = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var boolean $isPrioritizedPreferredDealsEnabled
     */
    protected $isPrioritizedPreferredDealsEnabled = null;

    /**
     * @var int $adExchangeAuctionOpeningPriority
     */
    protected $adExchangeAuctionOpeningPriority = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var boolean $isSetTopBoxEnabled
     */
    protected $isSetTopBoxEnabled = null;

    /**
     * @var boolean $isMissingCreatives
     */
    protected $isMissingCreatives = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\SetTopBoxInfo $setTopBoxDisplayInfo
     */
    protected $setTopBoxDisplayInfo = null;

    /**
     * @var string $programmaticCreativeSource
     */
    protected $programmaticCreativeSource = null;

    /**
     * @var int $videoMaxDuration
     */
    protected $videoMaxDuration = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Goal $primaryGoal
     */
    protected $primaryGoal = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\Goal[] $secondaryGoals
     */
    protected $secondaryGoals = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\GrpSettings $grpSettings
     */
    protected $grpSettings = null;

    /**
     * @var \Google\AdsApi\AdManager\v201911\LineItemDealInfoDto $dealInfo
     */
    protected $dealInfo = null;

    /**
     * @var int $viewabilityProviderCompanyId
     */
    protected $viewabilityProviderCompanyId = null;

    /**
     * @var string $userConsentEligibility
     */
    protected $userConsentEligibility = null;

    /**
     * @var string $childContentEligibility
     */
    protected $childContentEligibility = null;

    /**
     * @var string $customVastExtension
     */
    protected $customVastExtension = null;

    /**
     * @param int $orderId
     * @param int $id
     * @param string $name
     * @param string $externalId
     * @param string $orderName
     * @param \Google\AdsApi\AdManager\v201911\DateTime $startDateTime
     * @param string $startDateTimeType
     * @param \Google\AdsApi\AdManager\v201911\DateTime $endDateTime
     * @param int $autoExtensionDays
     * @param boolean $unlimitedEndDateTime
     * @param string $creativeRotationType
     * @param string $deliveryRateType
     * @param string $deliveryForecastSource
     * @param string $roadblockingType
     * @param string $skippableAdType
     * @param \Google\AdsApi\AdManager\v201911\FrequencyCap[] $frequencyCaps
     * @param string $lineItemType
     * @param int $priority
     * @param \Google\AdsApi\AdManager\v201911\Money $costPerUnit
     * @param \Google\AdsApi\AdManager\v201911\Money $valueCostPerUnit
     * @param string $costType
     * @param string $discountType
     * @param float $discount
     * @param int $contractedUnitsBought
     * @param \Google\AdsApi\AdManager\v201911\CreativePlaceholder[] $creativePlaceholders
     * @param \Google\AdsApi\AdManager\v201911\LineItemActivityAssociation[] $activityAssociations
     * @param string $environmentType
     * @param string[] $allowedFormats
     * @param string $companionDeliveryOption
     * @param boolean $allowOverbook
     * @param boolean $skipInventoryCheck
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @param boolean $reserveAtCreation
     * @param \Google\AdsApi\AdManager\v201911\Stats $stats
     * @param \Google\AdsApi\AdManager\v201911\DeliveryIndicator $deliveryIndicator
     * @param \Google\AdsApi\AdManager\v201911\DeliveryData $deliveryData
     * @param \Google\AdsApi\AdManager\v201911\Money $budget
     * @param string $status
     * @param string $reservationStatus
     * @param boolean $isArchived
     * @param string $webPropertyCode
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[] $effectiveAppliedLabels
     * @param boolean $disableSameAdvertiserCompetitiveExclusion
     * @param string $lastModifiedByApp
     * @param string $notes
     * @param \Google\AdsApi\AdManager\v201911\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201911\DateTime $creationDateTime
     * @param boolean $isPrioritizedPreferredDealsEnabled
     * @param int $adExchangeAuctionOpeningPriority
     * @param \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[] $customFieldValues
     * @param boolean $isSetTopBoxEnabled
     * @param boolean $isMissingCreatives
     * @param \Google\AdsApi\AdManager\v201911\SetTopBoxInfo $setTopBoxDisplayInfo
     * @param string $programmaticCreativeSource
     * @param int $videoMaxDuration
     * @param \Google\AdsApi\AdManager\v201911\Goal $primaryGoal
     * @param \Google\AdsApi\AdManager\v201911\Goal[] $secondaryGoals
     * @param \Google\AdsApi\AdManager\v201911\GrpSettings $grpSettings
     * @param \Google\AdsApi\AdManager\v201911\LineItemDealInfoDto $dealInfo
     * @param int $viewabilityProviderCompanyId
     * @param string $userConsentEligibility
     * @param string $childContentEligibility
     * @param string $customVastExtension
     */
    public function __construct($orderId = null, $id = null, $name = null, $externalId = null, $orderName = null, $startDateTime = null, $startDateTimeType = null, $endDateTime = null, $autoExtensionDays = null, $unlimitedEndDateTime = null, $creativeRotationType = null, $deliveryRateType = null, $deliveryForecastSource = null, $roadblockingType = null, $skippableAdType = null, array $frequencyCaps = null, $lineItemType = null, $priority = null, $costPerUnit = null, $valueCostPerUnit = null, $costType = null, $discountType = null, $discount = null, $contractedUnitsBought = null, array $creativePlaceholders = null, array $activityAssociations = null, $environmentType = null, array $allowedFormats = null, $companionDeliveryOption = null, $allowOverbook = null, $skipInventoryCheck = null, $skipCrossSellingRuleWarningChecks = null, $reserveAtCreation = null, $stats = null, $deliveryIndicator = null, $deliveryData = null, $budget = null, $status = null, $reservationStatus = null, $isArchived = null, $webPropertyCode = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $disableSameAdvertiserCompetitiveExclusion = null, $lastModifiedByApp = null, $notes = null, $lastModifiedDateTime = null, $creationDateTime = null, $isPrioritizedPreferredDealsEnabled = null, $adExchangeAuctionOpeningPriority = null, array $customFieldValues = null, $isSetTopBoxEnabled = null, $isMissingCreatives = null, $setTopBoxDisplayInfo = null, $programmaticCreativeSource = null, $videoMaxDuration = null, $primaryGoal = null, array $secondaryGoals = null, $grpSettings = null, $dealInfo = null, $viewabilityProviderCompanyId = null, $userConsentEligibility = null, $childContentEligibility = null, $customVastExtension = null)
    {
      $this->orderId = $orderId;
      $this->id = $id;
      $this->name = $name;
      $this->externalId = $externalId;
      $this->orderName = $orderName;
      $this->startDateTime = $startDateTime;
      $this->startDateTimeType = $startDateTimeType;
      $this->endDateTime = $endDateTime;
      $this->autoExtensionDays = $autoExtensionDays;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->creativeRotationType = $creativeRotationType;
      $this->deliveryRateType = $deliveryRateType;
      $this->deliveryForecastSource = $deliveryForecastSource;
      $this->roadblockingType = $roadblockingType;
      $this->skippableAdType = $skippableAdType;
      $this->frequencyCaps = $frequencyCaps;
      $this->lineItemType = $lineItemType;
      $this->priority = $priority;
      $this->costPerUnit = $costPerUnit;
      $this->valueCostPerUnit = $valueCostPerUnit;
      $this->costType = $costType;
      $this->discountType = $discountType;
      $this->discount = $discount;
      $this->contractedUnitsBought = $contractedUnitsBought;
      $this->creativePlaceholders = $creativePlaceholders;
      $this->activityAssociations = $activityAssociations;
      $this->environmentType = $environmentType;
      $this->allowedFormats = $allowedFormats;
      $this->companionDeliveryOption = $companionDeliveryOption;
      $this->allowOverbook = $allowOverbook;
      $this->skipInventoryCheck = $skipInventoryCheck;
      $this->skipCrossSellingRuleWarningChecks = $skipCrossSellingRuleWarningChecks;
      $this->reserveAtCreation = $reserveAtCreation;
      $this->stats = $stats;
      $this->deliveryIndicator = $deliveryIndicator;
      $this->deliveryData = $deliveryData;
      $this->budget = $budget;
      $this->status = $status;
      $this->reservationStatus = $reservationStatus;
      $this->isArchived = $isArchived;
      $this->webPropertyCode = $webPropertyCode;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
      $this->lastModifiedByApp = $lastModifiedByApp;
      $this->notes = $notes;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->creationDateTime = $creationDateTime;
      $this->isPrioritizedPreferredDealsEnabled = $isPrioritizedPreferredDealsEnabled;
      $this->adExchangeAuctionOpeningPriority = $adExchangeAuctionOpeningPriority;
      $this->customFieldValues = $customFieldValues;
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
      $this->isMissingCreatives = $isMissingCreatives;
      $this->setTopBoxDisplayInfo = $setTopBoxDisplayInfo;
      $this->programmaticCreativeSource = $programmaticCreativeSource;
      $this->videoMaxDuration = $videoMaxDuration;
      $this->primaryGoal = $primaryGoal;
      $this->secondaryGoals = $secondaryGoals;
      $this->grpSettings = $grpSettings;
      $this->dealInfo = $dealInfo;
      $this->viewabilityProviderCompanyId = $viewabilityProviderCompanyId;
      $this->userConsentEligibility = $userConsentEligibility;
      $this->childContentEligibility = $childContentEligibility;
      $this->customVastExtension = $customVastExtension;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
      return $this->orderId;
    }

    /**
     * @param int $orderId
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setOrderId($orderId)
    {
      $this->orderId = (!is_null($orderId) && PHP_INT_SIZE === 4)
          ? floatval($orderId) : $orderId;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrderName()
    {
      return $this->orderName;
    }

    /**
     * @param string $orderName
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setOrderName($orderName)
    {
      $this->orderName = $orderName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStartDateTimeType()
    {
      return $this->startDateTimeType;
    }

    /**
     * @param string $startDateTimeType
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setStartDateTimeType($startDateTimeType)
    {
      $this->startDateTimeType = $startDateTimeType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
      return $this;
    }

    /**
     * @return int
     */
    public function getAutoExtensionDays()
    {
      return $this->autoExtensionDays;
    }

    /**
     * @param int $autoExtensionDays
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setAutoExtensionDays($autoExtensionDays)
    {
      $this->autoExtensionDays = $autoExtensionDays;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getUnlimitedEndDateTime()
    {
      return $this->unlimitedEndDateTime;
    }

    /**
     * @param boolean $unlimitedEndDateTime
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCreativeRotationType($creativeRotationType)
    {
      $this->creativeRotationType = $creativeRotationType;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDeliveryRateType($deliveryRateType)
    {
      $this->deliveryRateType = $deliveryRateType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDeliveryForecastSource()
    {
      return $this->deliveryForecastSource;
    }

    /**
     * @param string $deliveryForecastSource
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDeliveryForecastSource($deliveryForecastSource)
    {
      $this->deliveryForecastSource = $deliveryForecastSource;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setRoadblockingType($roadblockingType)
    {
      $this->roadblockingType = $roadblockingType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSkippableAdType()
    {
      return $this->skippableAdType;
    }

    /**
     * @param string $skippableAdType
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setSkippableAdType($skippableAdType)
    {
      $this->skippableAdType = $skippableAdType;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\FrequencyCap[]
     */
    public function getFrequencyCaps()
    {
      return $this->frequencyCaps;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\FrequencyCap[]|null $frequencyCaps
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setFrequencyCaps(array $frequencyCaps = null)
    {
      $this->frequencyCaps = $frequencyCaps;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setLineItemType($lineItemType)
    {
      $this->lineItemType = $lineItemType;
      return $this;
    }

    /**
     * @return int
     */
    public function getPriority()
    {
      return $this->priority;
    }

    /**
     * @param int $priority
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setPriority($priority)
    {
      $this->priority = $priority;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Money
     */
    public function getCostPerUnit()
    {
      return $this->costPerUnit;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Money $costPerUnit
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCostPerUnit($costPerUnit)
    {
      $this->costPerUnit = $costPerUnit;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Money
     */
    public function getValueCostPerUnit()
    {
      return $this->valueCostPerUnit;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Money $valueCostPerUnit
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setValueCostPerUnit($valueCostPerUnit)
    {
      $this->valueCostPerUnit = $valueCostPerUnit;
      return $this;
    }

    /**
     * @return string
     */
    public function getCostType()
    {
      return $this->costType;
    }

    /**
     * @param string $costType
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCostType($costType)
    {
      $this->costType = $costType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDiscountType()
    {
      return $this->discountType;
    }

    /**
     * @param string $discountType
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDiscountType($discountType)
    {
      $this->discountType = $discountType;
      return $this;
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
      return $this->discount;
    }

    /**
     * @param float $discount
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDiscount($discount)
    {
      $this->discount = $discount;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setContractedUnitsBought($contractedUnitsBought)
    {
      $this->contractedUnitsBought = (!is_null($contractedUnitsBought) && PHP_INT_SIZE === 4)
          ? floatval($contractedUnitsBought) : $contractedUnitsBought;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\CreativePlaceholder[]
     */
    public function getCreativePlaceholders()
    {
      return $this->creativePlaceholders;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\CreativePlaceholder[]|null $creativePlaceholders
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCreativePlaceholders(array $creativePlaceholders = null)
    {
      $this->creativePlaceholders = $creativePlaceholders;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\LineItemActivityAssociation[]
     */
    public function getActivityAssociations()
    {
      return $this->activityAssociations;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\LineItemActivityAssociation[]|null $activityAssociations
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setActivityAssociations(array $activityAssociations = null)
    {
      $this->activityAssociations = $activityAssociations;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setAllowedFormats(array $allowedFormats = null)
    {
      $this->allowedFormats = $allowedFormats;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCompanionDeliveryOption($companionDeliveryOption)
    {
      $this->companionDeliveryOption = $companionDeliveryOption;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getAllowOverbook()
    {
      return $this->allowOverbook;
    }

    /**
     * @param boolean $allowOverbook
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setAllowOverbook($allowOverbook)
    {
      $this->allowOverbook = $allowOverbook;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipInventoryCheck()
    {
      return $this->skipInventoryCheck;
    }

    /**
     * @param boolean $skipInventoryCheck
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setSkipInventoryCheck($skipInventoryCheck)
    {
      $this->skipInventoryCheck = $skipInventoryCheck;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getSkipCrossSellingRuleWarningChecks()
    {
      return $this->skipCrossSellingRuleWarningChecks;
    }

    /**
     * @param boolean $skipCrossSellingRuleWarningChecks
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setSkipCrossSellingRuleWarningChecks($skipCrossSellingRuleWarningChecks)
    {
      $this->skipCrossSellingRuleWarningChecks = $skipCrossSellingRuleWarningChecks;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReserveAtCreation()
    {
      return $this->reserveAtCreation;
    }

    /**
     * @param boolean $reserveAtCreation
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setReserveAtCreation($reserveAtCreation)
    {
      $this->reserveAtCreation = $reserveAtCreation;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Stats
     */
    public function getStats()
    {
      return $this->stats;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Stats $stats
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setStats($stats)
    {
      $this->stats = $stats;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DeliveryIndicator
     */
    public function getDeliveryIndicator()
    {
      return $this->deliveryIndicator;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DeliveryIndicator $deliveryIndicator
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDeliveryIndicator($deliveryIndicator)
    {
      $this->deliveryIndicator = $deliveryIndicator;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DeliveryData
     */
    public function getDeliveryData()
    {
      return $this->deliveryData;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DeliveryData $deliveryData
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDeliveryData($deliveryData)
    {
      $this->deliveryData = $deliveryData;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Money
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Money $budget
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setReservationStatus($reservationStatus)
    {
      $this->reservationStatus = $reservationStatus;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return string
     */
    public function getWebPropertyCode()
    {
      return $this->webPropertyCode;
    }

    /**
     * @param string $webPropertyCode
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setWebPropertyCode($webPropertyCode)
    {
      $this->webPropertyCode = $webPropertyCode;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[]|null $appliedLabels
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setAppliedLabels(array $appliedLabels = null)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\AppliedLabel[]|null $effectiveAppliedLabels
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDisableSameAdvertiserCompetitiveExclusion($disableSameAdvertiserCompetitiveExclusion)
    {
      $this->disableSameAdvertiserCompetitiveExclusion = $disableSameAdvertiserCompetitiveExclusion;
      return $this;
    }

    /**
     * @return string
     */
    public function getLastModifiedByApp()
    {
      return $this->lastModifiedByApp;
    }

    /**
     * @param string $lastModifiedByApp
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setLastModifiedByApp($lastModifiedByApp)
    {
      $this->lastModifiedByApp = $lastModifiedByApp;
      return $this;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
      return $this->notes;
    }

    /**
     * @param string $notes
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsPrioritizedPreferredDealsEnabled()
    {
      return $this->isPrioritizedPreferredDealsEnabled;
    }

    /**
     * @param boolean $isPrioritizedPreferredDealsEnabled
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setIsPrioritizedPreferredDealsEnabled($isPrioritizedPreferredDealsEnabled)
    {
      $this->isPrioritizedPreferredDealsEnabled = $isPrioritizedPreferredDealsEnabled;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdExchangeAuctionOpeningPriority()
    {
      return $this->adExchangeAuctionOpeningPriority;
    }

    /**
     * @param int $adExchangeAuctionOpeningPriority
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setAdExchangeAuctionOpeningPriority($adExchangeAuctionOpeningPriority)
    {
      $this->adExchangeAuctionOpeningPriority = $adExchangeAuctionOpeningPriority;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\BaseCustomFieldValue[]|null $customFieldValues
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCustomFieldValues(array $customFieldValues = null)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsSetTopBoxEnabled()
    {
      return $this->isSetTopBoxEnabled;
    }

    /**
     * @param boolean $isSetTopBoxEnabled
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setIsSetTopBoxEnabled($isSetTopBoxEnabled)
    {
      $this->isSetTopBoxEnabled = $isSetTopBoxEnabled;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsMissingCreatives()
    {
      return $this->isMissingCreatives;
    }

    /**
     * @param boolean $isMissingCreatives
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setIsMissingCreatives($isMissingCreatives)
    {
      $this->isMissingCreatives = $isMissingCreatives;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\SetTopBoxInfo
     */
    public function getSetTopBoxDisplayInfo()
    {
      return $this->setTopBoxDisplayInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\SetTopBoxInfo $setTopBoxDisplayInfo
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setSetTopBoxDisplayInfo($setTopBoxDisplayInfo)
    {
      $this->setTopBoxDisplayInfo = $setTopBoxDisplayInfo;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setProgrammaticCreativeSource($programmaticCreativeSource)
    {
      $this->programmaticCreativeSource = $programmaticCreativeSource;
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
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setVideoMaxDuration($videoMaxDuration)
    {
      $this->videoMaxDuration = (!is_null($videoMaxDuration) && PHP_INT_SIZE === 4)
          ? floatval($videoMaxDuration) : $videoMaxDuration;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Goal
     */
    public function getPrimaryGoal()
    {
      return $this->primaryGoal;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Goal $primaryGoal
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setPrimaryGoal($primaryGoal)
    {
      $this->primaryGoal = $primaryGoal;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\Goal[]
     */
    public function getSecondaryGoals()
    {
      return $this->secondaryGoals;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\Goal[]|null $secondaryGoals
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setSecondaryGoals(array $secondaryGoals = null)
    {
      $this->secondaryGoals = $secondaryGoals;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\GrpSettings
     */
    public function getGrpSettings()
    {
      return $this->grpSettings;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\GrpSettings $grpSettings
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setGrpSettings($grpSettings)
    {
      $this->grpSettings = $grpSettings;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201911\LineItemDealInfoDto
     */
    public function getDealInfo()
    {
      return $this->dealInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201911\LineItemDealInfoDto $dealInfo
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setDealInfo($dealInfo)
    {
      $this->dealInfo = $dealInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getViewabilityProviderCompanyId()
    {
      return $this->viewabilityProviderCompanyId;
    }

    /**
     * @param int $viewabilityProviderCompanyId
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setViewabilityProviderCompanyId($viewabilityProviderCompanyId)
    {
      $this->viewabilityProviderCompanyId = (!is_null($viewabilityProviderCompanyId) && PHP_INT_SIZE === 4)
          ? floatval($viewabilityProviderCompanyId) : $viewabilityProviderCompanyId;
      return $this;
    }

    /**
     * @return string
     */
    public function getUserConsentEligibility()
    {
      return $this->userConsentEligibility;
    }

    /**
     * @param string $userConsentEligibility
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setUserConsentEligibility($userConsentEligibility)
    {
      $this->userConsentEligibility = $userConsentEligibility;
      return $this;
    }

    /**
     * @return string
     */
    public function getChildContentEligibility()
    {
      return $this->childContentEligibility;
    }

    /**
     * @param string $childContentEligibility
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setChildContentEligibility($childContentEligibility)
    {
      $this->childContentEligibility = $childContentEligibility;
      return $this;
    }

    /**
     * @return string
     */
    public function getCustomVastExtension()
    {
      return $this->customVastExtension;
    }

    /**
     * @param string $customVastExtension
     * @return \Google\AdsApi\AdManager\v201911\LineItemSummary
     */
    public function setCustomVastExtension($customVastExtension)
    {
      $this->customVastExtension = $customVastExtension;
      return $this;
    }

}
