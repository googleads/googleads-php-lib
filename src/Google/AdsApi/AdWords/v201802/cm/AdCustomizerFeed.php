<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCustomizerFeed
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var string $feedName
     */
    protected $feedName = null;

    /**
     * @var string $feedStatus
     */
    protected $feedStatus = null;

    /**
     * @var \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeedAttribute[] $feedAttributes
     */
    protected $feedAttributes = null;

    /**
     * @param int $feedId
     * @param string $feedName
     * @param string $feedStatus
     * @param \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeedAttribute[] $feedAttributes
     */
    public function __construct($feedId = null, $feedName = null, $feedStatus = null, array $feedAttributes = null)
    {
      $this->feedId = $feedId;
      $this->feedName = $feedName;
      $this->feedStatus = $feedStatus;
      $this->feedAttributes = $feedAttributes;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeed
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
    public function getFeedName()
    {
      return $this->feedName;
    }

    /**
     * @param string $feedName
     * @return \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeed
     */
    public function setFeedName($feedName)
    {
      $this->feedName = $feedName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedStatus()
    {
      return $this->feedStatus;
    }

    /**
     * @param string $feedStatus
     * @return \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeed
     */
    public function setFeedStatus($feedStatus)
    {
      $this->feedStatus = $feedStatus;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeedAttribute[]
     */
    public function getFeedAttributes()
    {
      return $this->feedAttributes;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeedAttribute[] $feedAttributes
     * @return \Google\AdsApi\AdWords\v201802\cm\AdCustomizerFeed
     */
    public function setFeedAttributes(array $feedAttributes)
    {
      $this->feedAttributes = $feedAttributes;
      return $this;
    }

}
