<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class DateError extends \Google\AdsApi\AdWords\v201601\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null)
    {
      parent::__construct($fieldPath, $trigger, $errorString, $ApiErrorType);
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
     * @return \Google\AdsApi\AdWords\v201601\cm\DateError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
