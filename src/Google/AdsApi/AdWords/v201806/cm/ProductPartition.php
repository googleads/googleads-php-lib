<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ProductPartition extends \Google\AdsApi\AdWords\v201806\cm\Criterion
{

    /**
     * @var string $partitionType
     */
    protected $partitionType = null;

    /**
     * @var int $parentCriterionId
     */
    protected $parentCriterionId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201806\cm\ProductDimension $caseValue
     */
    protected $caseValue = null;

    /**
     * @param int $id
     * @param string $type
     * @param string $CriterionType
     * @param string $partitionType
     * @param int $parentCriterionId
     * @param \Google\AdsApi\AdWords\v201806\cm\ProductDimension $caseValue
     */
    public function __construct($id = null, $type = null, $CriterionType = null, $partitionType = null, $parentCriterionId = null, $caseValue = null)
    {
      parent::__construct($id, $type, $CriterionType);
      $this->partitionType = $partitionType;
      $this->parentCriterionId = $parentCriterionId;
      $this->caseValue = $caseValue;
    }

    /**
     * @return string
     */
    public function getPartitionType()
    {
      return $this->partitionType;
    }

    /**
     * @param string $partitionType
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductPartition
     */
    public function setPartitionType($partitionType)
    {
      $this->partitionType = $partitionType;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentCriterionId()
    {
      return $this->parentCriterionId;
    }

    /**
     * @param int $parentCriterionId
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductPartition
     */
    public function setParentCriterionId($parentCriterionId)
    {
      $this->parentCriterionId = (!is_null($parentCriterionId) && PHP_INT_SIZE === 4)
          ? floatval($parentCriterionId) : $parentCriterionId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductDimension
     */
    public function getCaseValue()
    {
      return $this->caseValue;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\ProductDimension $caseValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ProductPartition
     */
    public function setCaseValue($caseValue)
    {
      $this->caseValue = $caseValue;
      return $this;
    }

}
