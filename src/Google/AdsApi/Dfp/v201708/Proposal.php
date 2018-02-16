<?php

namespace Google\AdsApi\Dfp\v201708;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Proposal
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var boolean $isProgrammatic
     */
    protected $isProgrammatic = null;

    /**
     * @var int $dfpOrderId
     */
    protected $dfpOrderId = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $pricingModel
     */
    protected $pricingModel = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var string $timeZoneId
     */
    protected $timeZoneId = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation $advertiser
     */
    protected $advertiser = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation[] $agencies
     */
    protected $agencies = null;

    /**
     * @var int $probabilityOfClose
     */
    protected $probabilityOfClose = null;

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
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $internalNotes
     */
    protected $internalNotes = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\Money $budget
     */
    protected $budget = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\SalespersonSplit $primarySalesperson
     */
    protected $primarySalesperson = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\SalespersonSplit[] $secondarySalespeople
     */
    protected $secondarySalespeople = null;

    /**
     * @var int[] $salesPlannerIds
     */
    protected $salesPlannerIds = null;

    /**
     * @var int $primaryTraffickerId
     */
    protected $primaryTraffickerId = null;

    /**
     * @var int[] $secondaryTraffickerIds
     */
    protected $secondaryTraffickerIds = null;

    /**
     * @var int[] $sellerContactIds
     */
    protected $sellerContactIds = null;

    /**
     * @var int[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var int $advertiserDiscount
     */
    protected $advertiserDiscount = null;

    /**
     * @var int $proposalDiscount
     */
    protected $proposalDiscount = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var int $exchangeRate
     */
    protected $exchangeRate = null;

    /**
     * @var boolean $refreshExchangeRate
     */
    protected $refreshExchangeRate = null;

    /**
     * @var int $agencyCommission
     */
    protected $agencyCommission = null;

    /**
     * @var int $valueAddedTax
     */
    protected $valueAddedTax = null;

    /**
     * @var boolean $isSold
     */
    protected $isSold = null;

    /**
     * @var string $approvalStatus
     */
    protected $approvalStatus = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\WorkflowProgress $workflowProgress
     */
    protected $workflowProgress = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ProposalLink[] $resources
     */
    protected $resources = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $actualExpiryTime
     */
    protected $actualExpiryTime = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\DateTime $expectedExpiryTime
     */
    protected $expectedExpiryTime = null;

    /**
     * @var int $thirdPartyAdServerId
     */
    protected $thirdPartyAdServerId = null;

    /**
     * @var string $customThirdPartyAdServerName
     */
    protected $customThirdPartyAdServerName = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ProposalTermsAndConditions[] $termsAndConditions
     */
    protected $termsAndConditions = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\RetractionDetails $lastRetractionDetails
     */
    protected $lastRetractionDetails = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\ProposalMarketplaceInfo $marketplaceInfo
     */
    protected $marketplaceInfo = null;

    /**
     * @var \Google\AdsApi\Dfp\v201708\OfflineError[] $offlineErrors
     */
    protected $offlineErrors = null;

    /**
     * @var boolean $hasOfflineErrors
     */
    protected $hasOfflineErrors = null;

    /**
     * @param int $id
     * @param boolean $isProgrammatic
     * @param int $dfpOrderId
     * @param string $name
     * @param string $pricingModel
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @param string $timeZoneId
     * @param string $status
     * @param boolean $isArchived
     * @param \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation $advertiser
     * @param \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation[] $agencies
     * @param int $probabilityOfClose
     * @param string $billingCap
     * @param string $billingSchedule
     * @param string $billingSource
     * @param string $billingBase
     * @param string $poNumber
     * @param string $internalNotes
     * @param \Google\AdsApi\Dfp\v201708\Money $budget
     * @param \Google\AdsApi\Dfp\v201708\SalespersonSplit $primarySalesperson
     * @param \Google\AdsApi\Dfp\v201708\SalespersonSplit[] $secondarySalespeople
     * @param int[] $salesPlannerIds
     * @param int $primaryTraffickerId
     * @param int[] $secondaryTraffickerIds
     * @param int[] $sellerContactIds
     * @param int[] $appliedTeamIds
     * @param \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $effectiveAppliedLabels
     * @param int $advertiserDiscount
     * @param int $proposalDiscount
     * @param string $currencyCode
     * @param int $exchangeRate
     * @param boolean $refreshExchangeRate
     * @param int $agencyCommission
     * @param int $valueAddedTax
     * @param boolean $isSold
     * @param string $approvalStatus
     * @param \Google\AdsApi\Dfp\v201708\WorkflowProgress $workflowProgress
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\Dfp\v201708\ProposalLink[] $resources
     * @param \Google\AdsApi\Dfp\v201708\DateTime $actualExpiryTime
     * @param \Google\AdsApi\Dfp\v201708\DateTime $expectedExpiryTime
     * @param int $thirdPartyAdServerId
     * @param string $customThirdPartyAdServerName
     * @param \Google\AdsApi\Dfp\v201708\ProposalTermsAndConditions[] $termsAndConditions
     * @param \Google\AdsApi\Dfp\v201708\RetractionDetails $lastRetractionDetails
     * @param \Google\AdsApi\Dfp\v201708\ProposalMarketplaceInfo $marketplaceInfo
     * @param \Google\AdsApi\Dfp\v201708\OfflineError[] $offlineErrors
     * @param boolean $hasOfflineErrors
     */
    public function __construct($id = null, $isProgrammatic = null, $dfpOrderId = null, $name = null, $pricingModel = null, $startDateTime = null, $endDateTime = null, $timeZoneId = null, $status = null, $isArchived = null, $advertiser = null, array $agencies = null, $probabilityOfClose = null, $billingCap = null, $billingSchedule = null, $billingSource = null, $billingBase = null, $poNumber = null, $internalNotes = null, $budget = null, $primarySalesperson = null, array $secondarySalespeople = null, array $salesPlannerIds = null, $primaryTraffickerId = null, array $secondaryTraffickerIds = null, array $sellerContactIds = null, array $appliedTeamIds = null, array $customFieldValues = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $advertiserDiscount = null, $proposalDiscount = null, $currencyCode = null, $exchangeRate = null, $refreshExchangeRate = null, $agencyCommission = null, $valueAddedTax = null, $isSold = null, $approvalStatus = null, $workflowProgress = null, $lastModifiedDateTime = null, array $resources = null, $actualExpiryTime = null, $expectedExpiryTime = null, $thirdPartyAdServerId = null, $customThirdPartyAdServerName = null, array $termsAndConditions = null, $lastRetractionDetails = null, $marketplaceInfo = null, array $offlineErrors = null, $hasOfflineErrors = null)
    {
      $this->id = $id;
      $this->isProgrammatic = $isProgrammatic;
      $this->dfpOrderId = $dfpOrderId;
      $this->name = $name;
      $this->pricingModel = $pricingModel;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->timeZoneId = $timeZoneId;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->advertiser = $advertiser;
      $this->agencies = $agencies;
      $this->probabilityOfClose = $probabilityOfClose;
      $this->billingCap = $billingCap;
      $this->billingSchedule = $billingSchedule;
      $this->billingSource = $billingSource;
      $this->billingBase = $billingBase;
      $this->poNumber = $poNumber;
      $this->internalNotes = $internalNotes;
      $this->budget = $budget;
      $this->primarySalesperson = $primarySalesperson;
      $this->secondarySalespeople = $secondarySalespeople;
      $this->salesPlannerIds = $salesPlannerIds;
      $this->primaryTraffickerId = $primaryTraffickerId;
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      $this->sellerContactIds = $sellerContactIds;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->customFieldValues = $customFieldValues;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->advertiserDiscount = $advertiserDiscount;
      $this->proposalDiscount = $proposalDiscount;
      $this->currencyCode = $currencyCode;
      $this->exchangeRate = $exchangeRate;
      $this->refreshExchangeRate = $refreshExchangeRate;
      $this->agencyCommission = $agencyCommission;
      $this->valueAddedTax = $valueAddedTax;
      $this->isSold = $isSold;
      $this->approvalStatus = $approvalStatus;
      $this->workflowProgress = $workflowProgress;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->resources = $resources;
      $this->actualExpiryTime = $actualExpiryTime;
      $this->expectedExpiryTime = $expectedExpiryTime;
      $this->thirdPartyAdServerId = $thirdPartyAdServerId;
      $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      $this->termsAndConditions = $termsAndConditions;
      $this->lastRetractionDetails = $lastRetractionDetails;
      $this->marketplaceInfo = $marketplaceInfo;
      $this->offlineErrors = $offlineErrors;
      $this->hasOfflineErrors = $hasOfflineErrors;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setIsProgrammatic($isProgrammatic)
    {
      $this->isProgrammatic = $isProgrammatic;
      return $this;
    }

    /**
     * @return int
     */
    public function getDfpOrderId()
    {
      return $this->dfpOrderId;
    }

    /**
     * @param int $dfpOrderId
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setDfpOrderId($dfpOrderId)
    {
      $this->dfpOrderId = (!is_null($dfpOrderId) && PHP_INT_SIZE === 4)
          ? floatval($dfpOrderId) : $dfpOrderId;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getPricingModel()
    {
      return $this->pricingModel;
    }

    /**
     * @param string $pricingModel
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setPricingModel($pricingModel)
    {
      $this->pricingModel = $pricingModel;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $startDateTime
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $endDateTime
     * @return \Google\AdsApi\Dfp\v201708\Proposal
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setTimeZoneId($timeZoneId)
    {
      $this->timeZoneId = $timeZoneId;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation
     */
    public function getAdvertiser()
    {
      return $this->advertiser;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation $advertiser
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAdvertiser($advertiser)
    {
      $this->advertiser = $advertiser;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation[]
     */
    public function getAgencies()
    {
      return $this->agencies;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ProposalCompanyAssociation[] $agencies
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAgencies(array $agencies)
    {
      $this->agencies = $agencies;
      return $this;
    }

    /**
     * @return int
     */
    public function getProbabilityOfClose()
    {
      return $this->probabilityOfClose;
    }

    /**
     * @param int $probabilityOfClose
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setProbabilityOfClose($probabilityOfClose)
    {
      $this->probabilityOfClose = (!is_null($probabilityOfClose) && PHP_INT_SIZE === 4)
          ? floatval($probabilityOfClose) : $probabilityOfClose;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setBillingBase($billingBase)
    {
      $this->billingBase = $billingBase;
      return $this;
    }

    /**
     * @return string
     */
    public function getPoNumber()
    {
      return $this->poNumber;
    }

    /**
     * @param string $poNumber
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setInternalNotes($internalNotes)
    {
      $this->internalNotes = $internalNotes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\Money
     */
    public function getBudget()
    {
      return $this->budget;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\Money $budget
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setBudget($budget)
    {
      $this->budget = $budget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\SalespersonSplit
     */
    public function getPrimarySalesperson()
    {
      return $this->primarySalesperson;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\SalespersonSplit $primarySalesperson
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setPrimarySalesperson($primarySalesperson)
    {
      $this->primarySalesperson = $primarySalesperson;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\SalespersonSplit[]
     */
    public function getSecondarySalespeople()
    {
      return $this->secondarySalespeople;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\SalespersonSplit[] $secondarySalespeople
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setSecondarySalespeople(array $secondarySalespeople)
    {
      $this->secondarySalespeople = $secondarySalespeople;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSalesPlannerIds()
    {
      return $this->salesPlannerIds;
    }

    /**
     * @param int[] $salesPlannerIds
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setSalesPlannerIds(array $salesPlannerIds)
    {
      $this->salesPlannerIds = $salesPlannerIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getPrimaryTraffickerId()
    {
      return $this->primaryTraffickerId;
    }

    /**
     * @param int $primaryTraffickerId
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setPrimaryTraffickerId($primaryTraffickerId)
    {
      $this->primaryTraffickerId = (!is_null($primaryTraffickerId) && PHP_INT_SIZE === 4)
          ? floatval($primaryTraffickerId) : $primaryTraffickerId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSecondaryTraffickerIds()
    {
      return $this->secondaryTraffickerIds;
    }

    /**
     * @param int[] $secondaryTraffickerIds
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setSecondaryTraffickerIds(array $secondaryTraffickerIds)
    {
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSellerContactIds()
    {
      return $this->sellerContactIds;
    }

    /**
     * @param int[] $sellerContactIds
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setSellerContactIds(array $sellerContactIds)
    {
      $this->sellerContactIds = $sellerContactIds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAppliedTeamIds()
    {
      return $this->appliedTeamIds;
    }

    /**
     * @param int[] $appliedTeamIds
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAppliedTeamIds(array $appliedTeamIds)
    {
      $this->appliedTeamIds = $appliedTeamIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserDiscount()
    {
      return $this->advertiserDiscount;
    }

    /**
     * @param int $advertiserDiscount
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAdvertiserDiscount($advertiserDiscount)
    {
      $this->advertiserDiscount = (!is_null($advertiserDiscount) && PHP_INT_SIZE === 4)
          ? floatval($advertiserDiscount) : $advertiserDiscount;
      return $this;
    }

    /**
     * @return int
     */
    public function getProposalDiscount()
    {
      return $this->proposalDiscount;
    }

    /**
     * @param int $proposalDiscount
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setProposalDiscount($proposalDiscount)
    {
      $this->proposalDiscount = (!is_null($proposalDiscount) && PHP_INT_SIZE === 4)
          ? floatval($proposalDiscount) : $proposalDiscount;
      return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyCode()
    {
      return $this->currencyCode;
    }

    /**
     * @param string $currencyCode
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getExchangeRate()
    {
      return $this->exchangeRate;
    }

    /**
     * @param int $exchangeRate
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setExchangeRate($exchangeRate)
    {
      $this->exchangeRate = (!is_null($exchangeRate) && PHP_INT_SIZE === 4)
          ? floatval($exchangeRate) : $exchangeRate;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getRefreshExchangeRate()
    {
      return $this->refreshExchangeRate;
    }

    /**
     * @param boolean $refreshExchangeRate
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setRefreshExchangeRate($refreshExchangeRate)
    {
      $this->refreshExchangeRate = $refreshExchangeRate;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyCommission()
    {
      return $this->agencyCommission;
    }

    /**
     * @param int $agencyCommission
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setAgencyCommission($agencyCommission)
    {
      $this->agencyCommission = (!is_null($agencyCommission) && PHP_INT_SIZE === 4)
          ? floatval($agencyCommission) : $agencyCommission;
      return $this;
    }

    /**
     * @return int
     */
    public function getValueAddedTax()
    {
      return $this->valueAddedTax;
    }

    /**
     * @param int $valueAddedTax
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setValueAddedTax($valueAddedTax)
    {
      $this->valueAddedTax = (!is_null($valueAddedTax) && PHP_INT_SIZE === 4)
          ? floatval($valueAddedTax) : $valueAddedTax;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setIsSold($isSold)
    {
      $this->isSold = $isSold;
      return $this;
    }

    /**
     * @return string
     */
    public function getApprovalStatus()
    {
      return $this->approvalStatus;
    }

    /**
     * @param string $approvalStatus
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setApprovalStatus($approvalStatus)
    {
      $this->approvalStatus = $approvalStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\WorkflowProgress
     */
    public function getWorkflowProgress()
    {
      return $this->workflowProgress;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\WorkflowProgress $workflowProgress
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setWorkflowProgress($workflowProgress)
    {
      $this->workflowProgress = $workflowProgress;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ProposalLink[]
     */
    public function getResources()
    {
      return $this->resources;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ProposalLink[] $resources
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setResources(array $resources)
    {
      $this->resources = $resources;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getActualExpiryTime()
    {
      return $this->actualExpiryTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $actualExpiryTime
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setActualExpiryTime($actualExpiryTime)
    {
      $this->actualExpiryTime = $actualExpiryTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\DateTime
     */
    public function getExpectedExpiryTime()
    {
      return $this->expectedExpiryTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\DateTime $expectedExpiryTime
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setExpectedExpiryTime($expectedExpiryTime)
    {
      $this->expectedExpiryTime = $expectedExpiryTime;
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
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
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setCustomThirdPartyAdServerName($customThirdPartyAdServerName)
    {
      $this->customThirdPartyAdServerName = $customThirdPartyAdServerName;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ProposalTermsAndConditions[]
     */
    public function getTermsAndConditions()
    {
      return $this->termsAndConditions;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ProposalTermsAndConditions[] $termsAndConditions
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setTermsAndConditions(array $termsAndConditions)
    {
      $this->termsAndConditions = $termsAndConditions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\RetractionDetails
     */
    public function getLastRetractionDetails()
    {
      return $this->lastRetractionDetails;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\RetractionDetails $lastRetractionDetails
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setLastRetractionDetails($lastRetractionDetails)
    {
      $this->lastRetractionDetails = $lastRetractionDetails;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\ProposalMarketplaceInfo
     */
    public function getMarketplaceInfo()
    {
      return $this->marketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\ProposalMarketplaceInfo $marketplaceInfo
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setMarketplaceInfo($marketplaceInfo)
    {
      $this->marketplaceInfo = $marketplaceInfo;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201708\OfflineError[]
     */
    public function getOfflineErrors()
    {
      return $this->offlineErrors;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201708\OfflineError[] $offlineErrors
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setOfflineErrors(array $offlineErrors)
    {
      $this->offlineErrors = $offlineErrors;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasOfflineErrors()
    {
      return $this->hasOfflineErrors;
    }

    /**
     * @param boolean $hasOfflineErrors
     * @return \Google\AdsApi\Dfp\v201708\Proposal
     */
    public function setHasOfflineErrors($hasOfflineErrors)
    {
      $this->hasOfflineErrors = $hasOfflineErrors;
      return $this;
    }

}
