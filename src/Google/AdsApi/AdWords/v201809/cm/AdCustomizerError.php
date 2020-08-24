<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCustomizerError extends \Google\AdsApi\AdWords\v201809\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $functionString
     */
    protected $functionString = null;

    /**
     * @var string $operatorName
     */
    protected $operatorName = null;

    /**
     * @var int $operandIndex
     */
    protected $operandIndex = null;

    /**
     * @var string $operandValue
     */
    protected $operandValue = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201809\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $functionString
     * @param string $operatorName
     * @param int $operandIndex
     * @param string $operandValue
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $functionString = null, $operatorName = null, $operandIndex = null, $operandValue = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->functionString = $functionString;
      $this->operatorName = $operatorName;
      $this->operandIndex = $operandIndex;
      $this->operandValue = $operandValue;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getFunctionString()
    {
      return $this->functionString;
    }

    /**
     * @param string $functionString
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerError
     */
    public function setFunctionString($functionString)
    {
      $this->functionString = $functionString;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperatorName()
    {
      return $this->operatorName;
    }

    /**
     * @param string $operatorName
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerError
     */
    public function setOperatorName($operatorName)
    {
      $this->operatorName = $operatorName;
      return $this;
    }

    /**
     * @return int
     */
    public function getOperandIndex()
    {
      return $this->operandIndex;
    }

    /**
     * @param int $operandIndex
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerError
     */
    public function setOperandIndex($operandIndex)
    {
      $this->operandIndex = $operandIndex;
      return $this;
    }

    /**
     * @return string
     */
    public function getOperandValue()
    {
      return $this->operandValue;
    }

    /**
     * @param string $operandValue
     * @return \Google\AdsApi\AdWords\v201809\cm\AdCustomizerError
     */
    public function setOperandValue($operandValue)
    {
      $this->operandValue = $operandValue;
      return $this;
    }

}
