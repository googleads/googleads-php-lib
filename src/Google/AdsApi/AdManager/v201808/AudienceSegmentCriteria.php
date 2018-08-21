<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegmentCriteria extends \Google\AdsApi\AdManager\v201808\CustomCriteriaLeaf
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var int[] $audienceSegmentIds
     */
    protected $audienceSegmentIds = null;

    /**
     * @param string $operator
     * @param int[] $audienceSegmentIds
     */
    public function __construct($operator = null, array $audienceSegmentIds = null)
    {
      $this->operator = $operator;
      $this->audienceSegmentIds = $audienceSegmentIds;
    }

    /**
     * @return string
     */
    public function getOperator()
    {
      return $this->operator;
    }

    /**
     * @param string $operator
     * @return \Google\AdsApi\AdManager\v201808\AudienceSegmentCriteria
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getAudienceSegmentIds()
    {
      return $this->audienceSegmentIds;
    }

    /**
     * @param int[] $audienceSegmentIds
     * @return \Google\AdsApi\AdManager\v201808\AudienceSegmentCriteria
     */
    public function setAudienceSegmentIds(array $audienceSegmentIds)
    {
      $this->audienceSegmentIds = $audienceSegmentIds;
      return $this;
    }

}
