<?php

namespace Google\AdsApi\AdWords\v201601\ch;

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
     * @var long[] $changedFeedItems
     */
    protected $changedFeedItems = null;

    /**
     * @var long[] $removedFeedItems
     */
    protected $removedFeedItems = null;

    /**
     * @param int $feedId
     * @param string $feedChangeStatus
     * @param long[] $changedFeedItems
     * @param long[] $removedFeedItems
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
     * @return \Google\AdsApi\AdWords\v201601\ch\FeedChangeData
     */
    public function setFeedId($feedId)
    {
      $this->feedId = $feedId;
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
     * @return \Google\AdsApi\AdWords\v201601\ch\FeedChangeData
     */
    public function setFeedChangeStatus($feedChangeStatus)
    {
      $this->feedChangeStatus = $feedChangeStatus;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getChangedFeedItems()
    {
      return $this->changedFeedItems;
    }

    /**
     * @param long[] $changedFeedItems
     * @return \Google\AdsApi\AdWords\v201601\ch\FeedChangeData
     */
    public function setChangedFeedItems(array $changedFeedItems)
    {
      $this->changedFeedItems = $changedFeedItems;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getRemovedFeedItems()
    {
      return $this->removedFeedItems;
    }

    /**
     * @param long[] $removedFeedItems
     * @return \Google\AdsApi\AdWords\v201601\ch\FeedChangeData
     */
    public function setRemovedFeedItems(array $removedFeedItems)
    {
      $this->removedFeedItems = $removedFeedItems;
      return $this;
    }

}
