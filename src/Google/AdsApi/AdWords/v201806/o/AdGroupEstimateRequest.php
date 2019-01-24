<?php

namespace Google\AdsApi\AdWords\v201806\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdGroupEstimateRequest extends \Google\AdsApi\AdWords\v201806\o\EstimateRequest
{

    /**
     * @var int $adGroupId
     */
    protected $adGroupId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\o\KeywordEstimateRequest[] $keywordEstimateRequests
     */
    protected $keywordEstimateRequests = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Money $maxCpc
     */
    protected $maxCpc = null;

    /**
     * @param string $EstimateRequestType
     * @param int $adGroupId
     * @param \Google\AdsApi\AdWords\v201806\o\KeywordEstimateRequest[] $keywordEstimateRequests
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $maxCpc
     */
    public function __construct($EstimateRequestType = null, $adGroupId = null, array $keywordEstimateRequests = null, $maxCpc = null)
    {
      parent::__construct($EstimateRequestType);
      $this->adGroupId = $adGroupId;
      $this->keywordEstimateRequests = $keywordEstimateRequests;
      $this->maxCpc = $maxCpc;
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
     * @return \Google\AdsApi\AdWords\v201806\o\AdGroupEstimateRequest
     */
    public function setAdGroupId($adGroupId)
    {
      $this->adGroupId = (!is_null($adGroupId) && PHP_INT_SIZE === 4)
          ? floatval($adGroupId) : $adGroupId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\o\KeywordEstimateRequest[]
     */
    public function getKeywordEstimateRequests()
    {
      return $this->keywordEstimateRequests;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\o\KeywordEstimateRequest[] $keywordEstimateRequests
     * @return \Google\AdsApi\AdWords\v201806\o\AdGroupEstimateRequest
     */
    public function setKeywordEstimateRequests(array $keywordEstimateRequests)
    {
      $this->keywordEstimateRequests = $keywordEstimateRequests;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Money
     */
    public function getMaxCpc()
    {
      return $this->maxCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Money $maxCpc
     * @return \Google\AdsApi\AdWords\v201806\o\AdGroupEstimateRequest
     */
    public function setMaxCpc($maxCpc)
    {
      $this->maxCpc = $maxCpc;
      return $this;
    }

}
