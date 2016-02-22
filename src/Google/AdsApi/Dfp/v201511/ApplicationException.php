<?php

namespace Google\AdsApi\Dfp\v201511;

class ApplicationException
{

    /**
     * @var string $message
     */
    protected $message = null;

    /**
     * @param string $message
     */
    public function __construct($message = null)
    {
      $this->message = $message;
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
     * @return \Google\AdsApi\Dfp\v201511\ApplicationException
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
