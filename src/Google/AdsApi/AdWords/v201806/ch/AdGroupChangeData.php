<?php

namespace Google\AdsApi\AdWords\v201806\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupChangeData
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var string $adGroupChangeStatus
     */
    protected $adGroupChangeStatus = null;

    /**
     * @var int[] $changedAds
     */
    protected $changedAds = null;

    /**
     * @var int[] $changedCriteria
     */
    protected $changedCriteria = null;

    /**
     * @var int[] $removedCriteria
     */
    protected $removedCriteria = null;

    /**
     * @var int[] $changedFeeds
     */
    protected $changedFeeds = null;

    /**
     * @var int[] $removedFeeds
     */
    protected $removedFeeds = null;

    /**
     * @var int[] $changedAdGroupBidModifierCriteria
     */
    protected $changedAdGroupBidModifierCriteria = null;

    /**
     * @var int[] $removedAdGroupBidModifierCriteria
     */
    protected $removedAdGroupBidModifierCriteria = null;

    /**
     * @param int $adGroupId
     * @param string $adGroupChangeStatus
     * @param int[] $changedAds
     * @param int[] $changedCriteria
     * @param int[] $removedCriteria
     * @param int[] $changedFeeds
     * @param int[] $removedFeeds
     * @param int[] $changedAdGroupBidModifierCriteria
     * @param int[] $removedAdGroupBidModifierCriteria
     */
    public function __construct($adGroupId = null, $adGroupChangeStatus = null, array $changedAds = null, array $changedCriteria = null, array $removedCriteria = null, array $changedFeeds = null, array $removedFeeds = null, array $changedAdGroupBidModifierCriteria = null, array $removedAdGroupBidModifierCriteria = null)
    {
      $this->adGroupId = $adGroupId;
      $this->adGroupChangeStatus = $adGroupChangeStatus;
      $this->changedAds = $changedAds;
      $this->changedCriteria = $changedCriteria;
      $this->removedCriteria = $removedCriteria;
      $this->changedFeeds = $changedFeeds;
      $this->removedFeeds = $removedFeeds;
      $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
      $this->removedAdGroupBidModifierCriteria = $removedAdGroupBidModifierCriteria;
    }

    /**
     * @return int
     */
    public function getAdGroupId()
    {
      return $this->adGroupId;
    }

    /**
     * @param int $adGroupId
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return string
     */
    public function getAdGroupChangeStatus()
    {
      return $this->adGroupChangeStatus;
    }

    /**
     * @param string $adGroupChangeStatus
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setAdGroupChangeStatus($adGroupChangeStatus)
    {
      $this->adGroupChangeStatus = $adGroupChangeStatus;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedAds()
    {
      return $this->changedAds;
    }

    /**
     * @param int[] $changedAds
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setChangedAds(array $changedAds)
    {
      $this->changedAds = $changedAds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedCriteria()
    {
      return $this->changedCriteria;
    }

    /**
     * @param int[] $changedCriteria
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setChangedCriteria(array $changedCriteria)
    {
      $this->changedCriteria = $changedCriteria;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedCriteria()
    {
      return $this->removedCriteria;
    }

    /**
     * @param int[] $removedCriteria
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setRemovedCriteria(array $removedCriteria)
    {
      $this->removedCriteria = $removedCriteria;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedFeeds()
    {
      return $this->changedFeeds;
    }

    /**
     * @param int[] $changedFeeds
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setChangedFeeds(array $changedFeeds)
    {
      $this->changedFeeds = $changedFeeds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedFeeds()
    {
      return $this->removedFeeds;
    }

    /**
     * @param int[] $removedFeeds
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setRemovedFeeds(array $removedFeeds)
    {
      $this->removedFeeds = $removedFeeds;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedAdGroupBidModifierCriteria()
    {
      return $this->changedAdGroupBidModifierCriteria;
    }

    /**
     * @param int[] $changedAdGroupBidModifierCriteria
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setChangedAdGroupBidModifierCriteria(array $changedAdGroupBidModifierCriteria)
    {
      $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedAdGroupBidModifierCriteria()
    {
      return $this->removedAdGroupBidModifierCriteria;
    }

    /**
     * @param int[] $removedAdGroupBidModifierCriteria
     * @return \Google\AdsApi\AdWords\v201806\ch\AdGroupChangeData
     */
    public function setRemovedAdGroupBidModifierCriteria(array $removedAdGroupBidModifierCriteria)
    {
      $this->removedAdGroupBidModifierCriteria = $removedAdGroupBidModifierCriteria;
      return $this;
    }

}
