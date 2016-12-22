<?php

namespace Google\AdsApi\Dfp\v201611;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class ApiError
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
     * @var string $errorString
     */
    protected $errorString = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null)
    {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
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
     * @return \Google\AdsApi\Dfp\v201611\ApiError
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
     * @return \Google\AdsApi\Dfp\v201611\ApiError
     */
    public function setTrigger($trigger)
    {
      $this->trigger = $trigger;
      return $this;
    }

    /**
     * @return string
     */
    public function getErrorString()
    {
      return $this->errorString;
    }

    /**
     * @param string $errorString
     * @return \Google\AdsApi\Dfp\v201611\ApiError
     */
    public function setErrorString($errorString)
    {
      $this->errorString = $errorString;
      return $this;
    }

}
