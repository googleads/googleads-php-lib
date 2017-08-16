<?php

namespace Google\AdsApi\Dfp\v201708;


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
     * @param string $message
     * @param string $message1
     */
    public function __construct($message = null, $message1 = null)
    {
      parent::__construct($message);
      $this->message1 = $message1;
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
     * @return \Google\AdsApi\Dfp\v201708\ApplicationException
     */
    public function setMessage1($message1)
    {
      $this->message1 = $message1;
      return $this;
    }

}
