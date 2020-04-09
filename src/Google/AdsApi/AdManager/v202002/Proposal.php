<?php

namespace Google\AdsApi\AdManager\v202002;


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
     * @var \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     */
    protected $startDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     */
    protected $endDateTime = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var boolean $isArchived
     */
    protected $isArchived = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation $advertiser
     */
    protected $advertiser = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation[] $agencies
     */
    protected $agencies = null;

    /**
     * @var string $internalNotes
     */
    protected $internalNotes = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\SalespersonSplit $primarySalesperson
     */
    protected $primarySalesperson = null;

    /**
     * @var int[] $salesPlannerIds
     */
    protected $salesPlannerIds = null;

    /**
     * @var int $primaryTraffickerId
     */
    protected $primaryTraffickerId = null;

    /**
     * @var int[] $sellerContactIds
     */
    protected $sellerContactIds = null;

    /**
     * @var int[] $appliedTeamIds
     */
    protected $appliedTeamIds = null;

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
     * @var boolean $isSold
     */
    protected $isSold = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     */
    protected $lastModifiedDateTime = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\ProposalMarketplaceInfo $marketplaceInfo
     */
    protected $marketplaceInfo = null;

    /**
     * @var \Google\AdsApi\AdManager\v202002\BuyerRfp $buyerRfp
     */
    protected $buyerRfp = null;

    /**
     * @var boolean $hasBuyerRfp
     */
    protected $hasBuyerRfp = null;

    /**
     * @param int $id
     * @param boolean $isProgrammatic
     * @param int $dfpOrderId
     * @param string $name
     * @param \Google\AdsApi\AdManager\v202002\DateTime $startDateTime
     * @param \Google\AdsApi\AdManager\v202002\DateTime $endDateTime
     * @param string $status
     * @param boolean $isArchived
     * @param \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation $advertiser
     * @param \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation[] $agencies
     * @param string $internalNotes
     * @param \Google\AdsApi\AdManager\v202002\SalespersonSplit $primarySalesperson
     * @param int[] $salesPlannerIds
     * @param int $primaryTraffickerId
     * @param int[] $sellerContactIds
     * @param int[] $appliedTeamIds
     * @param \Google\AdsApi\AdManager\v202002\BaseCustomFieldValue[] $customFieldValues
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[] $appliedLabels
     * @param \Google\AdsApi\AdManager\v202002\AppliedLabel[] $effectiveAppliedLabels
     * @param string $currencyCode
     * @param int $exchangeRate
     * @param boolean $refreshExchangeRate
     * @param boolean $isSold
     * @param \Google\AdsApi\AdManager\v202002\DateTime $lastModifiedDateTime
     * @param \Google\AdsApi\AdManager\v202002\ProposalMarketplaceInfo $marketplaceInfo
     * @param \Google\AdsApi\AdManager\v202002\BuyerRfp $buyerRfp
     * @param boolean $hasBuyerRfp
     */
    public function __construct($id = null, $isProgrammatic = null, $dfpOrderId = null, $name = null, $startDateTime = null, $endDateTime = null, $status = null, $isArchived = null, $advertiser = null, array $agencies = null, $internalNotes = null, $primarySalesperson = null, array $salesPlannerIds = null, $primaryTraffickerId = null, array $sellerContactIds = null, array $appliedTeamIds = null, array $customFieldValues = null, array $appliedLabels = null, array $effectiveAppliedLabels = null, $currencyCode = null, $exchangeRate = null, $refreshExchangeRate = null, $isSold = null, $lastModifiedDateTime = null, $marketplaceInfo = null, $buyerRfp = null, $hasBuyerRfp = null)
    {
      $this->id = $id;
      $this->isProgrammatic = $isProgrammatic;
      $this->dfpOrderId = $dfpOrderId;
      $this->name = $name;
      $this->startDateTime = $startDateTime;
      $this->endDateTime = $endDateTime;
      $this->status = $status;
      $this->isArchived = $isArchived;
      $this->advertiser = $advertiser;
      $this->agencies = $agencies;
      $this->internalNotes = $internalNotes;
      $this->primarySalesperson = $primarySalesperson;
      $this->salesPlannerIds = $salesPlannerIds;
      $this->primaryTraffickerId = $primaryTraffickerId;
      $this->sellerContactIds = $sellerContactIds;
      $this->appliedTeamIds = $appliedTeamIds;
      $this->customFieldValues = $customFieldValues;
      $this->appliedLabels = $appliedLabels;
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
      $this->currencyCode = $currencyCode;
      $this->exchangeRate = $exchangeRate;
      $this->refreshExchangeRate = $refreshExchangeRate;
      $this->isSold = $isSold;
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      $this->marketplaceInfo = $marketplaceInfo;
      $this->buyerRfp = $buyerRfp;
      $this->hasBuyerRfp = $hasBuyerRfp;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setEndDateTime($endDateTime)
    {
      $this->endDateTime = $endDateTime;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setIsArchived($isArchived)
    {
      $this->isArchived = $isArchived;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation
     */
    public function getAdvertiser()
    {
      return $this->advertiser;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation $advertiser
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setAdvertiser($advertiser)
    {
      $this->advertiser = $advertiser;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation[]
     */
    public function getAgencies()
    {
      return $this->agencies;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\ProposalCompanyAssociation[]|null $agencies
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setAgencies(array $agencies = null)
    {
      $this->agencies = $agencies;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setInternalNotes($internalNotes)
    {
      $this->internalNotes = $internalNotes;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\SalespersonSplit
     */
    public function getPrimarySalesperson()
    {
      return $this->primarySalesperson;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\SalespersonSplit $primarySalesperson
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setPrimarySalesperson($primarySalesperson)
    {
      $this->primarySalesperson = $primarySalesperson;
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
     * @param int[]|null $salesPlannerIds
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setSalesPlannerIds(array $salesPlannerIds = null)
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
    public function getSellerContactIds()
    {
      return $this->sellerContactIds;
    }

    /**
     * @param int[]|null $sellerContactIds
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setSellerContactIds(array $sellerContactIds = null)
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
     * @param int[]|null $appliedTeamIds
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setAppliedTeamIds(array $appliedTeamIds = null)
    {
      $this->appliedTeamIds = $appliedTeamIds;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setEffectiveAppliedLabels(array $effectiveAppliedLabels = null)
    {
      $this->effectiveAppliedLabels = $effectiveAppliedLabels;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setRefreshExchangeRate($refreshExchangeRate)
    {
      $this->refreshExchangeRate = $refreshExchangeRate;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setIsSold($isSold)
    {
      $this->isSold = $isSold;
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
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setLastModifiedDateTime($lastModifiedDateTime)
    {
      $this->lastModifiedDateTime = $lastModifiedDateTime;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\ProposalMarketplaceInfo
     */
    public function getMarketplaceInfo()
    {
      return $this->marketplaceInfo;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\ProposalMarketplaceInfo $marketplaceInfo
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setMarketplaceInfo($marketplaceInfo)
    {
      $this->marketplaceInfo = $marketplaceInfo;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\BuyerRfp
     */
    public function getBuyerRfp()
    {
      return $this->buyerRfp;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\BuyerRfp $buyerRfp
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setBuyerRfp($buyerRfp)
    {
      $this->buyerRfp = $buyerRfp;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getHasBuyerRfp()
    {
      return $this->hasBuyerRfp;
    }

    /**
     * @param boolean $hasBuyerRfp
     * @return \Google\AdsApi\AdManager\v202002\Proposal
     */
    public function setHasBuyerRfp($hasBuyerRfp)
    {
      $this->hasBuyerRfp = $hasBuyerRfp;
      return $this;
    }

}
