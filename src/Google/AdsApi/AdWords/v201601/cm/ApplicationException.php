<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class ApplicationException
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @var string $ApplicationExceptionType
     */
    protected $ApplicationExceptionType = null;

    /**
     * @param string $message
     * @param string $ApplicationExceptionType
     */
    public function __construct($message = null, $ApplicationExceptionType = null)
    {
      $this->message = $message;
      $this->ApplicationExceptionType = $ApplicationExceptionType;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \Google\AdsApi\AdWords\v201601\cm\ApplicationException
     */
    public function setMessage($message)
    {
      $this->message = $message;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\ApplicationException
     */
    public function setApplicationExceptionType($ApplicationExceptionType)
    {
      $this->ApplicationExceptionType = $ApplicationExceptionType;
      return $this;
    }

}
