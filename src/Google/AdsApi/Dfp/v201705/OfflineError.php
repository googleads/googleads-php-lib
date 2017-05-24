<?php

namespace Google\AdsApi\Dfp\v201705;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class OfflineError
{

    /**
     * @var string $fieldPath
     */
    protected $fieldPath = null;

    /**
     * @var string $trigger
     */
    protected $trigger = null;

    /**
     * @var \Google\AdsApi\Dfp\v201705\DateTime $errorTime
     */
    protected $errorTime = null;

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param \Google\AdsApi\Dfp\v201705\DateTime $errorTime
     * @param string $reason
     */
    public function __construct($fieldPath = null, $trigger = null, $errorTime = null, $reason = null)
    {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorTime = $errorTime;
      $this->reason = $reason;
    }

    /**
     * @return string
     */
    public function getFieldPath()
    {
      return $this->fieldPath;
    }

    /**
     * @param string $fieldPath
     * @return \Google\AdsApi\Dfp\v201705\OfflineError
     */
    public function setFieldPath($fieldPath)
    {
      $this->fieldPath = $fieldPath;
      return $this;
    }

    /**
     * @return string
     */
    public function getTrigger()
    {
      return $this->trigger;
    }

    /**
     * @param string $trigger
     * @return \Google\AdsApi\Dfp\v201705\OfflineError
     */
    public function setTrigger($trigger)
    {
      $this->trigger = $trigger;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201705\DateTime
     */
    public function getErrorTime()
    {
      return $this->errorTime;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201705\DateTime $errorTime
     * @return \Google\AdsApi\Dfp\v201705\OfflineError
     */
    public function setErrorTime($errorTime)
    {
      $this->errorTime = $errorTime;
      return $this;
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
     * @return \Google\AdsApi\Dfp\v201705\OfflineError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

}
