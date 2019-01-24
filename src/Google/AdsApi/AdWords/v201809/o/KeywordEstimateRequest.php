<?php

namespace Google\AdsApi\AdWords\v201809\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class KeywordEstimateRequest extends \Google\AdsApi\AdWords\v201809\o\EstimateRequest
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Keyword $keyword
     */
    protected $keyword = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\cm\Money $maxCpc
     */
    protected $maxCpc = null;

    /**
     * @var boolean $isNegative
     */
    protected $isNegative = null;

    /**
     * @param string $EstimateRequestType
     * @param \Google\AdsApi\AdWords\v201809\cm\Keyword $keyword
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $maxCpc
     * @param boolean $isNegative
     */
    public function __construct($EstimateRequestType = null, $keyword = null, $maxCpc = null, $isNegative = null)
    {
      parent::__construct($EstimateRequestType);
      $this->keyword = $keyword;
      $this->maxCpc = $maxCpc;
      $this->isNegative = $isNegative;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Keyword
     */
    public function getKeyword()
    {
      return $this->keyword;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Keyword $keyword
     * @return \Google\AdsApi\AdWords\v201809\o\KeywordEstimateRequest
     */
    public function setKeyword($keyword)
    {
      $this->keyword = $keyword;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\cm\Money
     */
    public function getMaxCpc()
    {
      return $this->maxCpc;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\cm\Money $maxCpc
     * @return \Google\AdsApi\AdWords\v201809\o\KeywordEstimateRequest
     */
    public function setMaxCpc($maxCpc)
    {
      $this->maxCpc = $maxCpc;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsNegative()
    {
      return $this->isNegative;
    }

    /**
     * @param boolean $isNegative
     * @return \Google\AdsApi\AdWords\v201809\o\KeywordEstimateRequest
     */
    public function setIsNegative($isNegative)
    {
      $this->isNegative = $isNegative;
      return $this;
    }

}
