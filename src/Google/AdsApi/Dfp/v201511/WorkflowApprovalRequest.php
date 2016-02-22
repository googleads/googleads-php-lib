<?php

namespace Google\AdsApi\Dfp\v201511;

class WorkflowApprovalRequest extends \Google\AdsApi\Dfp\v201511\WorkflowRequest
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
     * @return \Google\AdsApi\Dfp\v201511\WorkflowApprovalRequest
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
