<?php

namespace Google\AdsApi\AdWords\v201806\cm;


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
     * @var \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     */
    protected $fieldPathElements = null;

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
     * @var array $parameterMap
     */
    private $parameterMap = ['ApiError.Type' => 'ApiErrorType'];

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null)
    {
      $this->fieldPath = $fieldPath;
      $this->fieldPathElements = $fieldPathElements;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
     */
    public function setFieldPath($fieldPath)
    {
      $this->fieldPath = $fieldPath;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[]
     */
    public function getFieldPathElements()
    {
      return $this->fieldPathElements;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201806\cm\FieldPathElement[] $fieldPathElements
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
     */
    public function setFieldPathElements(array $fieldPathElements)
    {
      $this->fieldPathElements = $fieldPathElements;
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
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
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
     */
    public function setApiErrorType($ApiErrorType)
    {
      $this->ApiErrorType = $ApiErrorType;
      return $this;
    }

    /**
     * Getter for a non PHP standard named variables.
     *
     * @param string $var variable name to get
     * @return string variable value
     */
    public function __get($var)
    {
      if (!array_key_exists($var, $this->parameterMap)) {
        return null;
      }
      return $this->{$this->parameterMap[$var]};
    }

    /**
     * Setter for a non PHP standard named variables.
     *
     * @param string $var variable name
     * @param mixed $value variable value to set
     * @return \Google\AdsApi\AdWords\v201806\cm\ApiError
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
