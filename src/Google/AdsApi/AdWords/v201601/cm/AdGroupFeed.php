<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class AdGroupFeed
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     */
    protected $matchingFunction = null;

    /**
     * @var int[] $placeholderTypes
     */
    protected $placeholderTypes = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $feedId
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     * @param int[] $placeholderTypes
     * @param string $status
     */
    public function __construct($feedId = null, $adGroupId = null, $matchingFunction = null, array $placeholderTypes = null, $status = null)
    {
      $this->feedId = $feedId;
      $this->adGroupId = $adGroupId;
      $this->matchingFunction = $matchingFunction;
      $this->placeholderTypes = $placeholderTypes;
      $this->status = $status;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupFeed
     */
    public function setFeedId($feedId)
    {
      $this->feedId = $feedId;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupFeed
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\MatchingFunction
     */
    public function getMatchingFunction()
    {
      return $this->matchingFunction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\MatchingFunction $matchingFunction
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupFeed
     */
    public function setMatchingFunction($matchingFunction)
    {
      $this->matchingFunction = $matchingFunction;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getPlaceholderTypes()
    {
      return $this->placeholderTypes;
    }

    /**
     * @param int[] $placeholderTypes
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupFeed
     */
    public function setPlaceholderTypes(array $placeholderTypes)
    {
      $this->placeholderTypes = $placeholderTypes;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\AdGroupFeed
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
