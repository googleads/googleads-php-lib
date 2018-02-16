<?php

namespace Google\AdsApi\AdWords\v201710\ch;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedChangeData
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var string $feedChangeStatus
     */
    protected $feedChangeStatus = null;

    /**
     * @var int[] $changedFeedItems
     */
    protected $changedFeedItems = null;

    /**
     * @var int[] $removedFeedItems
     */
    protected $removedFeedItems = null;

    /**
     * @param int $feedId
     * @param string $feedChangeStatus
     * @param int[] $changedFeedItems
     * @param int[] $removedFeedItems
     */
    public function __construct($feedId = null, $feedChangeStatus = null, array $changedFeedItems = null, array $removedFeedItems = null)
    {
      $this->feedId = $feedId;
      $this->feedChangeStatus = $feedChangeStatus;
      $this->changedFeedItems = $changedFeedItems;
      $this->removedFeedItems = $removedFeedItems;
    }

    /**
     * @return int
     */
    public function getFeedId()
    {
      return $this->feedId;
    }

    /**
     * @param int $feedId
     * @return \Google\AdsApi\AdWords\v201710\ch\FeedChangeData
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedChangeStatus()
    {
      return $this->feedChangeStatus;
    }

    /**
     * @param string $feedChangeStatus
     * @return \Google\AdsApi\AdWords\v201710\ch\FeedChangeData
     */
    public function setFeedChangeStatus($feedChangeStatus)
    {
      $this->feedChangeStatus = $feedChangeStatus;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getChangedFeedItems()
    {
      return $this->changedFeedItems;
    }

    /**
     * @param int[] $changedFeedItems
     * @return \Google\AdsApi\AdWords\v201710\ch\FeedChangeData
     */
    public function setChangedFeedItems(array $changedFeedItems)
    {
      $this->changedFeedItems = $changedFeedItems;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getRemovedFeedItems()
    {
      return $this->removedFeedItems;
    }

    /**
     * @param int[] $removedFeedItems
     * @return \Google\AdsApi\AdWords\v201710\ch\FeedChangeData
     */
    public function setRemovedFeedItems(array $removedFeedItems)
    {
      $this->removedFeedItems = $removedFeedItems;
      return $this;
    }

}
