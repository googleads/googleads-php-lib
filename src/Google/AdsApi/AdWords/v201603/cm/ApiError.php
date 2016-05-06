<?php

namespace Google\AdsApi\AdWords\v201603\cm;


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
     * @var string $ApiErrorType
     */
    protected $ApiErrorType = null;

    /**
     * @param string $fieldPath
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     */
    public function __construct($fieldPath = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
      $this->fieldPath = $fieldPath;
      $this->trigger = $trigger;
      $this->errorString = $errorString;
      $this->ApiErrorType = $ApiErrorType;
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
     * @return \Google\AdsApi\AdWords\v201603\cm\ApiError
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
     * @return \Google\AdsApi\AdWords\v201603\cm\ApiError
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
     * @return \Google\AdsApi\AdWords\v201603\cm\ApiError
     */
    public function setErrorString($errorString)
    {
      $this->errorString = $errorString;
      return $this;
    }

    /**
     * @return string
     */
    public function getApiErrorType()
    {
      return $this->ApiErrorType;
    }

    /**
     * @param string $ApiErrorType
     * @return \Google\AdsApi\AdWords\v201603\cm\ApiError
     */
    public function setApiErrorType($ApiErrorType)
    {
      $this->ApiErrorType = $ApiErrorType;
      return $this;
    }

}
