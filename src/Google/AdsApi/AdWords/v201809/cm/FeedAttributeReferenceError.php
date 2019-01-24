<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedAttributeReferenceError extends \Google\AdsApi\AdWords\v201809\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $feedName
     */
    protected $feedName = null;

    /**
     * @var string $feedAttributeName
     */
    protected $feedAttributeName = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201809\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $feedName
     * @param string $feedAttributeName
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $feedName = null, $feedAttributeName = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->feedName = $feedName;
      $this->feedAttributeName = $feedAttributeName;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedAttributeReferenceError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedAttributeReferenceError
     */
    public function setFeedName($feedName)
    {
      $this->feedName = $feedName;
      return $this;
    }

    /**
     * @return string
     */
    public function getFeedAttributeName()
    {
      return $this->feedAttributeName;
    }

    /**
     * @param string $feedAttributeName
     * @return \Google\AdsApi\AdWords\v201809\cm\FeedAttributeReferenceError
     */
    public function setFeedAttributeName($feedAttributeName)
    {
      $this->feedAttributeName = $feedAttributeName;
      return $this;
    }

}
