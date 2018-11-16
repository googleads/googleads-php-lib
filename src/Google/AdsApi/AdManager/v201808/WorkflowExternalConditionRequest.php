<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WorkflowExternalConditionRequest extends \Google\AdsApi\AdManager\v201808\WorkflowRequest
{

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $id
     * @param string $workflowRuleName
     * @param int $entityId
     * @param string $entityType
     * @param string $type
     * @param string $status
     */
    public function __construct($id = null, $workflowRuleName = null, $entityId = null, $entityType = null, $type = null, $status = null)
    {
      parent::__construct($id, $workflowRuleName, $entityId, $entityType, $type);
      $this->status = $status;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v201808\WorkflowExternalConditionRequest
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
