<?php

namespace Google\AdsApi\AdWords\v201605\ch;


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
     * @var long[] $changedAds
     */
    protected $changedAds = null;

    /**
     * @var long[] $changedCriteria
     */
    protected $changedCriteria = null;

    /**
     * @var long[] $removedCriteria
     */
    protected $removedCriteria = null;

    /**
     * @var long[] $changedFeeds
     */
    protected $changedFeeds = null;

    /**
     * @var long[] $removedFeeds
     */
    protected $removedFeeds = null;

    /**
     * @var long[] $changedAdGroupBidModifierCriteria
     */
    protected $changedAdGroupBidModifierCriteria = null;

    /**
     * @var long[] $removedAdGroupBidModifierCriteria
     */
    protected $removedAdGroupBidModifierCriteria = null;

    /**
     * @param int $adGroupId
     * @param string $adGroupChangeStatus
     * @param long[] $changedAds
     * @param long[] $changedCriteria
     * @param long[] $removedCriteria
     * @param long[] $changedFeeds
     * @param long[] $removedFeeds
     * @param long[] $changedAdGroupBidModifierCriteria
     * @param long[] $removedAdGroupBidModifierCriteria
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
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
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
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setAdGroupChangeStatus($adGroupChangeStatus)
    {
      $this->adGroupChangeStatus = $adGroupChangeStatus;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedAds()
    {
      return $this->changedAds;
    }

    /**
     * @param long[] $changedAds
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setChangedAds(array $changedAds)
    {
      $this->changedAds = $changedAds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedCriteria()
    {
      return $this->changedCriteria;
    }

    /**
     * @param long[] $changedCriteria
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setChangedCriteria(array $changedCriteria)
    {
      $this->changedCriteria = $changedCriteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedCriteria()
    {
      return $this->removedCriteria;
    }

    /**
     * @param long[] $removedCriteria
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setRemovedCriteria(array $removedCriteria)
    {
      $this->removedCriteria = $removedCriteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedFeeds()
    {
      return $this->changedFeeds;
    }

    /**
     * @param long[] $changedFeeds
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setChangedFeeds(array $changedFeeds)
    {
      $this->changedFeeds = $changedFeeds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedFeeds()
    {
      return $this->removedFeeds;
    }

    /**
     * @param long[] $removedFeeds
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setRemovedFeeds(array $removedFeeds)
    {
      $this->removedFeeds = $removedFeeds;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedAdGroupBidModifierCriteria()
    {
      return $this->changedAdGroupBidModifierCriteria;
    }

    /**
     * @param long[] $changedAdGroupBidModifierCriteria
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setChangedAdGroupBidModifierCriteria(array $changedAdGroupBidModifierCriteria)
    {
      $this->changedAdGroupBidModifierCriteria = $changedAdGroupBidModifierCriteria;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedAdGroupBidModifierCriteria()
    {
      return $this->removedAdGroupBidModifierCriteria;
    }

    /**
     * @param long[] $removedAdGroupBidModifierCriteria
     * @return \Google\AdsApi\AdWords\v201605\ch\AdGroupChangeData
     */
    public function setRemovedAdGroupBidModifierCriteria(array $removedAdGroupBidModifierCriteria)
    {
      $this->removedAdGroupBidModifierCriteria = $removedAdGroupBidModifierCriteria;
      return $this;
    }

}
