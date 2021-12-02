<?php

namespace Google\AdsApi\AdManager\v202108;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomCriteria extends \Google\AdsApi\AdManager\v202108\CustomCriteriaLeaf
{

    /**
     * @var int $keyId
     */
    protected $keyId = null;

    /**
     * @var int[] $valueIds
     */
    protected $valueIds = null;

    /**
     * @var string $operator
     */
    protected $operator = null;

    /**
     * @param int $keyId
     * @param int[] $valueIds
     * @param string $operator
     */
    public function __construct($keyId = null, array $valueIds = null, $operator = null)
    {
      $this->keyId = $keyId;
      $this->valueIds = $valueIds;
      $this->operator = $operator;
    }

    /**
     * @return int
     */
    public function getKeyId()
    {
      return $this->keyId;
    }

    /**
     * @param int $keyId
     * @return \Google\AdsApi\AdManager\v202108\CustomCriteria
     */
    public function setKeyId($keyId)
    {
      $this->keyId = (!is_null($keyId) && PHP_INT_SIZE === 4)
          ? floatval($keyId) : $keyId;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getValueIds()
    {
      return $this->valueIds;
    }

    /**
     * @param int[]|null $valueIds
     * @return \Google\AdsApi\AdManager\v202108\CustomCriteria
     */
    public function setValueIds(array $valueIds = null)
    {
      $this->valueIds = $valueIds;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v202108\CustomCriteria
     */
    public function setOperator($operator)
    {
      $this->operator = $operator;
      return $this;
    }

}
