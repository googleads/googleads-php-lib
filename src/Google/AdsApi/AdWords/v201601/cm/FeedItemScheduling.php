<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedItemScheduling
{

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\FeedItemSchedule[] $feedItemSchedules
     */
    protected $feedItemSchedules = null;

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemSchedule[] $feedItemSchedules
     */
    public function __construct(array $feedItemSchedules = null)
    {
      $this->feedItemSchedules = $feedItemSchedules;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemSchedule[]
     */
    public function getFeedItemSchedules()
    {
      return $this->feedItemSchedules;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\FeedItemSchedule[] $feedItemSchedules
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedItemScheduling
     */
    public function setFeedItemSchedules(array $feedItemSchedules)
    {
      $this->feedItemSchedules = $feedItemSchedules;
      return $this;
    }

}
