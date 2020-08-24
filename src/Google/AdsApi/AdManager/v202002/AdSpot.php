<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdSpot
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
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var boolean $customSpot
     */
    protected $customSpot = null;

    /**
     * @var boolean $flexible
     */
    protected $flexible = null;

    /**
     * @var int $maxDurationMillis
     */
    protected $maxDurationMillis = null;

    /**
     * @var int $maxNumberOfAds
     */
    protected $maxNumberOfAds = null;

    /**
     * @var string $targetingType
     */
    protected $targetingType = null;

    /**
     * @var boolean $backfillBlocked
     */
    protected $backfillBlocked = null;

    /**
     * @var string[] $allowedLineItemTypes
     */
    protected $allowedLineItemTypes = null;

    /**
     * @var boolean $inventorySharingBlocked
     */
    protected $inventorySharingBlocked = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $displayName
     * @param boolean $customSpot
     * @param boolean $flexible
     * @param int $maxDurationMillis
     * @param int $maxNumberOfAds
     * @param string $targetingType
     * @param boolean $backfillBlocked
     * @param string[] $allowedLineItemTypes
     * @param boolean $inventorySharingBlocked
     */
    public function __construct($id = null, $name = null, $displayName = null, $customSpot = null, $flexible = null, $maxDurationMillis = null, $maxNumberOfAds = null, $targetingType = null, $backfillBlocked = null, array $allowedLineItemTypes = null, $inventorySharingBlocked = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->displayName = $displayName;
      $this->customSpot = $customSpot;
      $this->flexible = $flexible;
      $this->maxDurationMillis = $maxDurationMillis;
      $this->maxNumberOfAds = $maxNumberOfAds;
      $this->targetingType = $targetingType;
      $this->backfillBlocked = $backfillBlocked;
      $this->allowedLineItemTypes = $allowedLineItemTypes;
      $this->inventorySharingBlocked = $inventorySharingBlocked;
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
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
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
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getCustomSpot()
    {
      return $this->customSpot;
    }

    /**
     * @param boolean $customSpot
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setCustomSpot($customSpot)
    {
      $this->customSpot = $customSpot;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getFlexible()
    {
      return $this->flexible;
    }

    /**
     * @param boolean $flexible
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setFlexible($flexible)
    {
      $this->flexible = $flexible;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxDurationMillis()
    {
      return $this->maxDurationMillis;
    }

    /**
     * @param int $maxDurationMillis
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setMaxDurationMillis($maxDurationMillis)
    {
      $this->maxDurationMillis = (!is_null($maxDurationMillis) && PHP_INT_SIZE === 4)
          ? floatval($maxDurationMillis) : $maxDurationMillis;
      return $this;
    }

    /**
     * @return int
     */
    public function getMaxNumberOfAds()
    {
      return $this->maxNumberOfAds;
    }

    /**
     * @param int $maxNumberOfAds
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setMaxNumberOfAds($maxNumberOfAds)
    {
      $this->maxNumberOfAds = $maxNumberOfAds;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetingType()
    {
      return $this->targetingType;
    }

    /**
     * @param string $targetingType
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setTargetingType($targetingType)
    {
      $this->targetingType = $targetingType;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBackfillBlocked()
    {
      return $this->backfillBlocked;
    }

    /**
     * @param boolean $backfillBlocked
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setBackfillBlocked($backfillBlocked)
    {
      $this->backfillBlocked = $backfillBlocked;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getAllowedLineItemTypes()
    {
      return $this->allowedLineItemTypes;
    }

    /**
     * @param string[]|null $allowedLineItemTypes
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setAllowedLineItemTypes(array $allowedLineItemTypes = null)
    {
      $this->allowedLineItemTypes = $allowedLineItemTypes;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInventorySharingBlocked()
    {
      return $this->inventorySharingBlocked;
    }

    /**
     * @param boolean $inventorySharingBlocked
     * @return \Google\AdsApi\AdManager\v202002\AdSpot
     */
    public function setInventorySharingBlocked($inventorySharingBlocked)
    {
      $this->inventorySharingBlocked = $inventorySharingBlocked;
      return $this;
    }

}
