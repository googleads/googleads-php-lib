<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ChangeHistoryValue extends \Google\AdsApi\AdManager\v201808\ObjectValue
{

    /**
     * @var string $entityType
     */
    protected $entityType = null;

    /**
     * @var string $operation
     */
    protected $operation = null;

    /**
     * @param string $entityType
     * @param string $operation
     */
    public function __construct($entityType = null, $operation = null)
    {
      $this->entityType = $entityType;
      $this->operation = $operation;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param string $entityType
     * @return \Google\AdsApi\AdManager\v201808\ChangeHistoryValue
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperation()
    {
      return $this->operation;
    }

    /**
     * @param string $operation
     * @return \Google\AdsApi\AdManager\v201808\ChangeHistoryValue
     */
    public function setOperation($operation)
    {
      $this->operation = $operation;
      return $this;
    }

}
