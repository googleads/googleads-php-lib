<?php

namespace Google\AdsApi\AdManager\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Order
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var boolean $unlimitedEndDateTime
     */
    protected $unlimitedEndDateTime = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var string $notes
     */
    protected $notes = null;

    /**
     * @var int $externalOrderId
     */
    protected $externalOrderId = null;

    /**
     * @var string $poNumber
     */
    protected $poNumber = null;

    /**
     * @var string $currencyCode
     */
    protected $currencyCode = null;

    /**
     * @var int $advertiserId
     */
    protected $advertiserId = null;

    /**
     * @var int[] $advertiserContactIds
     */
    protected $advertiserContactIds = null;

    /**
     * @var int $agencyId
     */
    protected $agencyId = null;

    /**
     * @var int[] $agencyContactIds
     */
    protected $agencyContactIds = null;

    /**
     * @var int $creatorId
     */
    protected $creatorId = null;

    /**
     * @var int $traffickerId
     */
    protected $traffickerId = null;

    /**
     * @var int[] $secondaryTraffickerIds
     */
    protected $secondaryTraffickerIds = null;

    /**
     * @var int $salespersonId
     */
    protected $salespersonId = null;

    /**
     * @var int[] $secondarySalespersonIds
     */
    protected $secondarySalespersonIds = null;

    /**
     * @var int $totalImpressionsDelivered
     */
    protected $totalImpressionsDelivered = null;

    /**
     * @var int $totalClicksDelivered
     */
    protected $totalClicksDelivered = null;

    /**
     * @var int $totalViewableImpressionsDelivered
     */
    protected $totalViewableImpressionsDelivered = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\Money $totalBudget
     */
    protected $totalBudget = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\AppliedLabel[] $appliedLabels
     */
    protected $appliedLabels = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\AppliedLabel[] $effectiveAppliedLabels
     */
    protected $effectiveAppliedLabels = null;

    /**
     * @var string $lastModifiedByApp
     */
    protected $lastModifiedByApp = null;

    /**
     * @var boolean $isProgrammatic
     */
    protected $isProgrammatic = null;

    /**
     * @var int[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @param boolean $unlimitedEndDateTime
     * @param string $status
     * @param boolean $isArchived
     * @param string $notes
     * @param int $externalOrderId
     * @param string $poNumber
     * @param string $currencyCode
     * @param int $advertiserId
     * @param int[] $advertiserContactIds
     * @param int $agencyId
     * @param int[] $agencyContactIds
     * @param int $creatorId
     * @param int $traffickerId
     * @param int[] $secondaryTraffickerIds
     * @param int $salespersonId
     * @param int[] $secondarySalespersonIds
     * @param int $totalImpressionsDelivered
     * @param int $totalClicksDelivered
     * @param int $totalViewableImpressionsDelivered
     * @param \Google\AdsApi\AdManager\v201802\Money $totalBudget
     * @param \Google\AdsApi\AdManager\v201802\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v201802\AppliedLabel[] $effectiveAppliedLabels
     * @param string $lastModifiedByApp
     * @param boolean $isProgrammatic
     * @param int[] $appliedTeamIds
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($id = null, $name = null, $startDateTime = null, $endDateTime = null, $unlimitedEndDateTime = null, $status = null, $isArchived = null, $notes = null, $externalOrderId = null, $poNumber = null, $currencyCode = null, $advertiserId = null, array $advertiserContactIds = null, $agencyId = null, array $agencyContactIds = null, $creatorId = null, $traffickerId = null, array $secondaryTraffickerIds = null, $salespersonId = null, array $secondarySalespersonIds = null, $totalImpressionsDelivered = null, $totalClicksDelivered = null, $totalViewableImpressionsDelivered = null, $totalBudget = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $lastModifiedByApp = null, $isProgrammatic = null, array $appliedTeamIds = null, $lastModifiedDateTime = null, array $customFieldValues = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->notes = $notes;
      $this->externalOrderId = $externalOrderId;
      $this->poNumber = $poNumber;
      $this->currencyCode = $currencyCode;
      $this->advertiserId = $advertiserId;
      $this->advertiserContactIds = $advertiserContactIds;
      $this->agencyId = $agencyId;
      $this->agencyContactIds = $agencyContactIds;
      $this->creatorId = $creatorId;
      $this->traffickerId = $traffickerId;
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      $this->salespersonId = $salespersonId;
      $this->secondarySalespersonIds = $secondarySalespersonIds;
      $this->totalImpressionsDelivered = $totalImpressionsDelivered;
      $this->totalClicksDelivered = $totalClicksDelivered;
      $this->totalViewableImpressionsDelivered = $totalViewableImpressionsDelivered;
      $this->totalBudget = $totalBudget;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->lastModifiedByApp = $lastModifiedByApp;
      $this->isProgrammatic = $isProgrammatic;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->customFieldValues = $customFieldValues;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getStartDateTime()
    {
      return $this->startDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $startDateTime
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setStartDateTime($startDateTime)
    {
      $this->startDateTime = $startDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getEndDateTime()
    {
      return $this->endDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $endDateTime
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setUnlimitedEndDateTime($unlimitedEndDateTime)
    {
      $this->unlimitedEndDateTime = $unlimitedEndDateTime;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setNotes($notes)
    {
      $this->notes = $notes;
      return $this;
    }

    /**
     * @return int
     */
    public function getExternalOrderId()
    {
      return $this->externalOrderId;
    }

    /**
     * @param int $externalOrderId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setExternalOrderId($externalOrderId)
    {
      $this->externalOrderId = $externalOrderId;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setPoNumber($poNumber)
    {
      $this->poNumber = $poNumber;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setCurrencyCode($currencyCode)
    {
      $this->currencyCode = $currencyCode;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdvertiserId()
    {
      return $this->advertiserId;
    }

    /**
     * @param int $advertiserId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAdvertiserId($advertiserId)
    {
      $this->advertiserId = (!is_null($advertiserId) && PHP_INT_SIZE === 4)
          ? floatval($advertiserId) : $advertiserId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAdvertiserContactIds()
    {
      return $this->advertiserContactIds;
    }

    /**
     * @param int[] $advertiserContactIds
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAdvertiserContactIds(array $advertiserContactIds)
    {
      $this->advertiserContactIds = $advertiserContactIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getAgencyId()
    {
      return $this->agencyId;
    }

    /**
     * @param int $agencyId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAgencyId($agencyId)
    {
      $this->agencyId = (!is_null($agencyId) && PHP_INT_SIZE === 4)
          ? floatval($agencyId) : $agencyId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAgencyContactIds()
    {
      return $this->agencyContactIds;
    }

    /**
     * @param int[] $agencyContactIds
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAgencyContactIds(array $agencyContactIds)
    {
      $this->agencyContactIds = $agencyContactIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getCreatorId()
    {
      return $this->creatorId;
    }

    /**
     * @param int $creatorId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setCreatorId($creatorId)
    {
      $this->creatorId = (!is_null($creatorId) && PHP_INT_SIZE === 4)
          ? floatval($creatorId) : $creatorId;
      return $this;
    }

    /**
     * @return int
     */
    public function getTraffickerId()
    {
      return $this->traffickerId;
    }

    /**
     * @param int $traffickerId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setTraffickerId($traffickerId)
    {
      $this->traffickerId = (!is_null($traffickerId) && PHP_INT_SIZE === 4)
          ? floatval($traffickerId) : $traffickerId;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setSecondaryTraffickerIds(array $secondaryTraffickerIds)
    {
      $this->secondaryTraffickerIds = $secondaryTraffickerIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getSalespersonId()
    {
      return $this->salespersonId;
    }

    /**
     * @param int $salespersonId
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setSalespersonId($salespersonId)
    {
      $this->salespersonId = (!is_null($salespersonId) && PHP_INT_SIZE === 4)
          ? floatval($salespersonId) : $salespersonId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getSecondarySalespersonIds()
    {
      return $this->secondarySalespersonIds;
    }

    /**
     * @param int[] $secondarySalespersonIds
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setSecondarySalespersonIds(array $secondarySalespersonIds)
    {
      $this->secondarySalespersonIds = $secondarySalespersonIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalImpressionsDelivered()
    {
      return $this->totalImpressionsDelivered;
    }

    /**
     * @param int $totalImpressionsDelivered
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setTotalImpressionsDelivered($totalImpressionsDelivered)
    {
      $this->totalImpressionsDelivered = (!is_null($totalImpressionsDelivered) && PHP_INT_SIZE === 4)
          ? floatval($totalImpressionsDelivered) : $totalImpressionsDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalClicksDelivered()
    {
      return $this->totalClicksDelivered;
    }

    /**
     * @param int $totalClicksDelivered
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setTotalClicksDelivered($totalClicksDelivered)
    {
      $this->totalClicksDelivered = (!is_null($totalClicksDelivered) && PHP_INT_SIZE === 4)
          ? floatval($totalClicksDelivered) : $totalClicksDelivered;
      return $this;
    }

    /**
     * @return int
     */
    public function getTotalViewableImpressionsDelivered()
    {
      return $this->totalViewableImpressionsDelivered;
    }

    /**
     * @param int $totalViewableImpressionsDelivered
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setTotalViewableImpressionsDelivered($totalViewableImpressionsDelivered)
    {
      $this->totalViewableImpressionsDelivered = (!is_null($totalViewableImpressionsDelivered) && PHP_INT_SIZE === 4)
          ? floatval($totalViewableImpressionsDelivered) : $totalViewableImpressionsDelivered;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\Money
     */
    public function getTotalBudget()
    {
      return $this->totalBudget;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\Money $totalBudget
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setTotalBudget($totalBudget)
    {
      $this->totalBudget = $totalBudget;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\AppliedLabel[]
     */
    public function getAppliedLabels()
    {
      return $this->appliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\AppliedLabel[] $appliedLabels
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAppliedLabels(array $appliedLabels)
    {
      $this->appliedLabels = $appliedLabels;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\AppliedLabel[]
     */
    public function getEffectiveAppliedLabels()
    {
      return $this->effectiveAppliedLabels;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\AppliedLabel[] $effectiveAppliedLabels
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setLastModifiedByApp($lastModifiedByApp)
    {
      $this->lastModifiedByApp = $lastModifiedByApp;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setIsProgrammatic($isProgrammatic)
    {
      $this->isProgrammatic = $isProgrammatic;
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
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setAppliedTeamIds(array $appliedTeamIds)
    {
      $this->appliedTeamIds = $appliedTeamIds;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\DateTime
     */
    public function getLastModifiedDateTime()
    {
      return $this->lastModifiedDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\DateTime $lastModifiedDateTime
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201802\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\AdManager\v201802\Order
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

}
