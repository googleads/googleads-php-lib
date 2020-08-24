<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProposalMarketplaceInfo
{

    /**
     * @var boolean $hasLocalVersionEdits
     */
    protected $hasLocalVersionEdits = null;

    /**
     * @var string $negotiationStatus
     */
    protected $negotiationStatus = null;

    /**
     * @var string $marketplaceComment
     */
    protected $marketplaceComment = null;

    /**
     * @var string $pausedBy
     */
    protected $pausedBy = null;

    /**
     * @var string $pauseReason
     */
    protected $pauseReason = null;

    /**
     * @var boolean $isNewVersionFromBuyer
     */
    protected $isNewVersionFromBuyer = null;

    /**
     * @var int $buyerAccountId
     */
    protected $buyerAccountId = null;

    /**
     * @var string $partnerClientId
     */
    protected $partnerClientId = null;

    /**
     * @param boolean $hasLocalVersionEdits
     * @param string $negotiationStatus
     * @param string $marketplaceComment
     * @param string $pausedBy
     * @param string $pauseReason
     * @param boolean $isNewVersionFromBuyer
     * @param int $buyerAccountId
     * @param string $partnerClientId
     */
    public function __construct($hasLocalVersionEdits = null, $negotiationStatus = null, $marketplaceComment = null, $pausedBy = null, $pauseReason = null, $isNewVersionFromBuyer = null, $buyerAccountId = null, $partnerClientId = null)
    {
      $this->hasLocalVersionEdits = $hasLocalVersionEdits;
      $this->negotiationStatus = $negotiationStatus;
      $this->marketplaceComment = $marketplaceComment;
      $this->pausedBy = $pausedBy;
      $this->pauseReason = $pauseReason;
      $this->isNewVersionFromBuyer = $isNewVersionFromBuyer;
      $this->buyerAccountId = $buyerAccountId;
      $this->partnerClientId = $partnerClientId;
    }

    /**
     * @return boolean
     */
    public function getHasLocalVersionEdits()
    {
      return $this->hasLocalVersionEdits;
    }

    /**
     * @param boolean $hasLocalVersionEdits
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setHasLocalVersionEdits($hasLocalVersionEdits)
    {
      $this->hasLocalVersionEdits = $hasLocalVersionEdits;
      return $this;
    }

    /**
     * @return string
     */
    public function getNegotiationStatus()
    {
      return $this->negotiationStatus;
    }

    /**
     * @param string $negotiationStatus
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setNegotiationStatus($negotiationStatus)
    {
      $this->negotiationStatus = $negotiationStatus;
      return $this;
    }

    /**
     * @return string
     */
    public function getMarketplaceComment()
    {
      return $this->marketplaceComment;
    }

    /**
     * @param string $marketplaceComment
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setMarketplaceComment($marketplaceComment)
    {
      $this->marketplaceComment = $marketplaceComment;
      return $this;
    }

    /**
     * @return string
     */
    public function getPausedBy()
    {
      return $this->pausedBy;
    }

    /**
     * @param string $pausedBy
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setPausedBy($pausedBy)
    {
      $this->pausedBy = $pausedBy;
      return $this;
    }

    /**
     * @return string
     */
    public function getPauseReason()
    {
      return $this->pauseReason;
    }

    /**
     * @param string $pauseReason
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setPauseReason($pauseReason)
    {
      $this->pauseReason = $pauseReason;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNewVersionFromBuyer()
    {
      return $this->isNewVersionFromBuyer;
    }

    /**
     * @param boolean $isNewVersionFromBuyer
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setIsNewVersionFromBuyer($isNewVersionFromBuyer)
    {
      $this->isNewVersionFromBuyer = $isNewVersionFromBuyer;
      return $this;
    }

    /**
     * @return int
     */
    public function getBuyerAccountId()
    {
      return $this->buyerAccountId;
    }

    /**
     * @param int $buyerAccountId
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setBuyerAccountId($buyerAccountId)
    {
      $this->buyerAccountId = (!is_null($buyerAccountId) && PHP_INT_SIZE === 4)
          ? floatval($buyerAccountId) : $buyerAccountId;
      return $this;
    }

    /**
     * @return string
     */
    public function getPartnerClientId()
    {
      return $this->partnerClientId;
    }

    /**
     * @param string $partnerClientId
     * @return \Google\AdsApi\AdManager\v202005\ProposalMarketplaceInfo
     */
    public function setPartnerClientId($partnerClientId)
    {
      $this->partnerClientId = $partnerClientId;
      return $this;
    }

}
