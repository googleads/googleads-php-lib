<?php

namespace Google\AdsApi\AdWords\v201605\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ApplicationException extends \Exception
{

    /**
     * @var string $message1
     */
    protected $message1 = null;

    /**
     * @var string $ApplicationExceptionType
     */
    protected $ApplicationExceptionType = null;

    /**
     * @param string $message
     * @param string $message1
     * @param string $ApplicationExceptionType
     */
    public function __construct($message = null, $message1 = null, $ApplicationExceptionType = null)
    {
      parent::__construct($message);
      $this->message1 = $message1;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

    /**
     * @return string
     */
    public function getMessage1()
    {
      return $this->message1;
    }

    /**
     * @param string $message1
     * @return \Google\AdsApi\AdWords\v201605\cm\ApplicationException
     */
    public function setMessage1($message1)
    {
      $this->message1 = $message1;
      return $this;
    }

    /**
     * @return string
     */
    public function getApplicationExceptionType()
    {
      return $this->ApplicationExceptionType;
    }

    /**
     * @param string $ApplicationExceptionType
     * @return \Google\AdsApi\AdWords\v201605\cm\ApplicationException
     */
    public function setApplicationExceptionType($ApplicationExceptionType)
    {
      $this->ApplicationExceptionType = $ApplicationExceptionType;
      return $this;
    }

}
