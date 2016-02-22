<?php

namespace Google\AdsApi\Dfp\v201511;

class LabelEntityAssociationError extends \Google\AdsApi\Dfp\v201511\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $reason
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $reason = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString);
      $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getReason()
    {
      return $this->reason;
    }

    /**
     * @param string $reason
     * @return \Google\AdsApi\Dfp\v201511\LabelEntityAssociationError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
