<?php

namespace Google\AdsApi\Dfp\v201511;

class ApproveWorkflowApprovalRequests extends \Google\AdsApi\Dfp\v201511\WorkflowRequestAction
{

    /**
     * @var string $comment
     */
    protected $comment = null;

    /**
     * @param string $comment
     */
    public function __construct($comment = null)
    {
      $this->comment = $comment;
    }

    /**
     * @return string
     */
    public function getComment()
    {
      return $this->comment;
    }

    /**
     * @param string $comment
     * @return \Google\AdsApi\Dfp\v201511\ApproveWorkflowApprovalRequests
     */
    public function setComment($comment)
    {
      $this->comment = $comment;
      return $this;
    }

}
