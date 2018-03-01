<?php

namespace Google\AdsApi\AdWords\v201802\cm;


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
     * @var array $parameterMap
     */
    private $parameterMap = ['ApplicationException.Type' => 'ApplicationExceptionType'];

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
     * @return \Google\AdsApi\AdWords\v201802\cm\ApplicationException
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
     * @return \Google\AdsApi\AdWords\v201802\cm\ApplicationException
     */
    public function setApplicationExceptionType($ApplicationExceptionType)
    {
      $this->ApplicationExceptionType = $ApplicationExceptionType;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\ApplicationException
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
