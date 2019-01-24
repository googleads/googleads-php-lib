<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class FunctionParsingError extends \Google\AdsApi\AdWords\v201809\cm\ApiError
{

    /**
     * @var string $reason
     */
    protected $reason = null;

    /**
     * @var string $offendingText
     */
    protected $offendingText = null;

    /**
     * @var int $offendingTextIndex
     */
    protected $offendingTextIndex = null;

    /**
     * @param string $fieldPath
     * @param \Google\AdsApi\AdWords\v201809\cm\FieldPathElement[] $fieldPathElements
     * @param string $trigger
     * @param string $errorString
     * @param string $ApiErrorType
     * @param string $reason
     * @param string $offendingText
     * @param int $offendingTextIndex
     */
    public function __construct($fieldPath = null, array $fieldPathElements = null, $trigger = null, $errorString = null, $ApiErrorType = null, $reason = null, $offendingText = null, $offendingTextIndex = null)
    {
      parent::__construct($fieldPath, $fieldPathElements, $trigger, $errorString, $ApiErrorType);
      $this->reason = $reason;
      $this->offendingText = $offendingText;
      $this->offendingTextIndex = $offendingTextIndex;
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
     * @return \Google\AdsApi\AdWords\v201809\cm\FunctionParsingError
     */
    public function setReason($reason)
    {
      $this->reason = $reason;
      return $this;
    }

    /**
     * @return string
     */
    public function getOffendingText()
    {
      return $this->offendingText;
    }

    /**
     * @param string $offendingText
     * @return \Google\AdsApi\AdWords\v201809\cm\FunctionParsingError
     */
    public function setOffendingText($offendingText)
    {
      $this->offendingText = $offendingText;
      return $this;
    }

    /**
     * @return int
     */
    public function getOffendingTextIndex()
    {
      return $this->offendingTextIndex;
    }

    /**
     * @param int $offendingTextIndex
     * @return \Google\AdsApi\AdWords\v201809\cm\FunctionParsingError
     */
    public function setOffendingTextIndex($offendingTextIndex)
    {
      $this->offendingTextIndex = $offendingTextIndex;
      return $this;
    }

}
