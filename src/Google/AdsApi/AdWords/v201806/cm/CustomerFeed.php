<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomerFeed
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
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
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     * @param int[] $placeholderTypes
     * @param string $status
     */
    public function __construct($feedId = null, $matchingFunction = null, array $placeholderTypes = null, $status = null)
    {
      $this->feedId = $feedId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomerFeed
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\MatchingFunction
     */
    public function getMatchingFunction()
    {
      return $this->matchingFunction;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\MatchingFunction $matchingFunction
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomerFeed
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomerFeed
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
     * @return \Google\AdsApi\AdWords\v201806\cm\CustomerFeed
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
