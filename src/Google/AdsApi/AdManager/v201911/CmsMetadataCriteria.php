<?php

namespace Google\AdsApi\AdManager\v201911;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CmsMetadataCriteria extends \Google\AdsApi\AdManager\v201911\CustomCriteriaLeaf
{

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @var int[] $cmsMetadataValueIds
     */
    protected $cmsMetadataValueIds = null;

    /**
     * @param string $operator
     * @param int[] $cmsMetadataValueIds
     */
    public function __construct($operator = null, array $cmsMetadataValueIds = null)
    {
      $this->operator = $operator;
      $this->cmsMetadataValueIds = $cmsMetadataValueIds;
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
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataCriteria
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCmsMetadataValueIds()
    {
      return $this->cmsMetadataValueIds;
    }

    /**
     * @param int[]|null $cmsMetadataValueIds
     * @return \Google\AdsApi\AdManager\v201911\CmsMetadataCriteria
     */
    public function setCmsMetadataValueIds(array $cmsMetadataValueIds = null)
    {
      $this->cmsMetadataValueIds = $cmsMetadataValueIds;
      return $this;
    }

}
