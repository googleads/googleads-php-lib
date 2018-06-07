<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedAttributeOperand extends \Google\AdsApi\AdWords\v201806\cm\FunctionArgumentOperand
{

    /**
     * @var int $feedId
     */
    protected $feedId = null;

    /**
     * @var int $feedAttributeId
     */
    protected $feedAttributeId = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param int $feedId
     * @param int $feedAttributeId
     */
    public function __construct($FunctionArgumentOperandType = null, $feedId = null, $feedAttributeId = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->feedId = $feedId;
      $this->feedAttributeId = $feedAttributeId;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedAttributeOperand
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
    public function getFeedAttributeId()
    {
      return $this->feedAttributeId;
    }

    /**
     * @param int $feedAttributeId
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedAttributeOperand
     */
    public function setFeedAttributeId($feedAttributeId)
    {
      $this->feedAttributeId = (!is_null($feedAttributeId) && PHP_INT_SIZE === 4)
          ? floatval($feedAttributeId) : $feedAttributeId;
      return $this;
    }

}
