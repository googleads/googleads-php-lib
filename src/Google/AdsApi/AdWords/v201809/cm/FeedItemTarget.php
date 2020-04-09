<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class FeedItemTarget
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $feedItemId
     */
    protected $feedItemId = null;

    /**
     * @var string $targetType
     */
    protected $targetType = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $FeedItemTargetType
     */
    protected $FeedItemTargetType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['FeedItemTarget.Type' => 'FeedItemTargetType'];

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $targetType
     * @param string $status
     * @param string $FeedItemTargetType
     */
    public function __construct($feedId = null, $feedItemId = null, $targetType = null, $status = null, $FeedItemTargetType = null)
    {
      $this->feedId = $feedId;
      $this->feedItemId = $feedItemId;
      $this->targetType = $targetType;
      $this->status = $status;
      $this->FeedItemTargetType = $FeedItemTargetType;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function setFeedId($feedId)
    {
      $this->feedId = (!is_null($feedId) && PHP_INT_SIZE === 4)
          ? floatval($feedId) : $feedId;
      return $this;
    }

    /**
     * @return int
     */
    public function getFeedItemId()
    {
      return $this->feedItemId;
    }

    /**
     * @param int $feedItemId
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function setFeedItemId($feedItemId)
    {
      $this->feedItemId = (!is_null($feedItemId) && PHP_INT_SIZE === 4)
          ? floatval($feedItemId) : $feedItemId;
      return $this;
    }

    /**
     * @return string
     */
    public function getTargetType()
    {
      return $this->targetType;
    }

    /**
     * @param string $targetType
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function setTargetType($targetType)
    {
      $this->targetType = $targetType;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedItemTargetType()
    {
      return $this->FeedItemTargetType;
    }

    /**
     * @param string $FeedItemTargetType
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function setFeedItemTargetType($FeedItemTargetType)
    {
      $this->FeedItemTargetType = $FeedItemTargetType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedItemTarget
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
