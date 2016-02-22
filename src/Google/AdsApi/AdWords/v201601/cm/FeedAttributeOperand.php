<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class FeedAttributeOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
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
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttributeOperand
     */
    public function setFeedId($feedId)
    {
      $this->feedId = $feedId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\FeedAttributeOperand
     */
    public function setFeedAttributeId($feedAttributeId)
    {
      $this->feedAttributeId = $feedAttributeId;
      return $this;
    }

}
