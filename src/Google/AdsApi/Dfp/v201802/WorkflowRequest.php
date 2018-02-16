<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class WorkflowRequest
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $workflowRuleName
     */
    protected $workflowRuleName = null;

    /**
     * @var int $entityId
     */
    protected $entityId = null;

    /**
     * @var string $entityType
     */
    protected $entityType = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $workflowRuleName
     * @param int $entityId
     * @param string $entityType
     * @param string $type
     */
    public function __construct($id = null, $workflowRuleName = null, $entityId = null, $entityType = null, $type = null)
    {
      $this->id = $id;
      $this->workflowRuleName = $workflowRuleName;
      $this->entityId = $entityId;
      $this->entityType = $entityType;
      $this->type = $type;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201802\WorkflowRequest
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getWorkflowRuleName()
    {
      return $this->workflowRuleName;
    }

    /**
     * @param string $workflowRuleName
     * @return \Google\AdsApi\Dfp\v201802\WorkflowRequest
     */
    public function setWorkflowRuleName($workflowRuleName)
    {
      $this->workflowRuleName = $workflowRuleName;
      return $this;
    }

    /**
     * @return int
     */
    public function getEntityId()
    {
      return $this->entityId;
    }

    /**
     * @param int $entityId
     * @return \Google\AdsApi\Dfp\v201802\WorkflowRequest
     */
    public function setEntityId($entityId)
    {
      $this->entityId = (!is_null($entityId) && PHP_INT_SIZE === 4)
          ? floatval($entityId) : $entityId;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201802\WorkflowRequest
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\Dfp\v201802\WorkflowRequest
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
