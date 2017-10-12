<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemAttributeError
{

    /**
     * @var int[] $feedAttributeIds
     */
    protected $feedAttributeIds = null;

    /**
     * @var int $validationErrorCode
     */
    protected $validationErrorCode = null;

    /**
     * @var string $errorInformation
     */
    protected $errorInformation = null;

    /**
     * @param int[] $feedAttributeIds
     * @param int $validationErrorCode
     * @param string $errorInformation
     */
    public function __construct(array $feedAttributeIds = null, $validationErrorCode = null, $errorInformation = null)
    {
      $this->feedAttributeIds = $feedAttributeIds;
      $this->validationErrorCode = $validationErrorCode;
      $this->errorInformation = $errorInformation;
    }

    /**
     * @return int[]
     */
    public function getFeedAttributeIds()
    {
      return $this->feedAttributeIds;
    }

    /**
     * @param int[] $feedAttributeIds
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedItemAttributeError
     */
    public function setFeedAttributeIds(array $feedAttributeIds)
    {
      $this->feedAttributeIds = $feedAttributeIds;
      return $this;
    }

    /**
     * @return int
     */
    public function getValidationErrorCode()
    {
      return $this->validationErrorCode;
    }

    /**
     * @param int $validationErrorCode
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedItemAttributeError
     */
    public function setValidationErrorCode($validationErrorCode)
    {
      $this->validationErrorCode = $validationErrorCode;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorInformation()
    {
      return $this->errorInformation;
    }

    /**
     * @param string $errorInformation
     * @return \Google\AdsApi\AdWords\v201710\cm\FeedItemAttributeError
     */
    public function setErrorInformation($errorInformation)
    {
      $this->errorInformation = $errorInformation;
      return $this;
    }

}
