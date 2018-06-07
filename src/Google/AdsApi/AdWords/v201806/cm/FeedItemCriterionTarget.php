<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FeedItemCriterionTarget extends \Google\AdsApi\AdWords\v201806\cm\FeedItemTarget
{

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\Criterion $criterion
     */
    protected $criterion = null;

    /**
     * @var boolean $isNegative
     */
    protected $isNegative = null;

    /**
     * @param int $feedId
     * @param int $feedItemId
     * @param string $targetType
     * @param string $status
     * @param string $FeedItemTargetType
     * @param \Google\AdsApi\AdWords\v201806\cm\Criterion $criterion
     * @param boolean $isNegative
     */
    public function __construct($feedId = null, $feedItemId = null, $targetType = null, $status = null, $FeedItemTargetType = null, $criterion = null, $isNegative = null)
    {
      parent::__construct($feedId, $feedItemId, $targetType, $status, $FeedItemTargetType);
      $this->criterion = $criterion;
      $this->isNegative = $isNegative;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\Criterion
     */
    public function getCriterion()
    {
      return $this->criterion;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\Criterion $criterion
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemCriterionTarget
     */
    public function setCriterion($criterion)
    {
      $this->criterion = $criterion;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\FeedItemCriterionTarget
     */
    public function setIsNegative($isNegative)
    {
      $this->isNegative = $isNegative;
      return $this;
    }

}
