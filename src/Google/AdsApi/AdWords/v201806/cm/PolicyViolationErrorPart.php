<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class PolicyViolationErrorPart
{

    /**
     * @var int $index
     */
    protected $index = null;

    /**
     * @var int $length
     */
    protected $length = null;

    /**
     * @param int $index
     * @param int $length
     */
    public function __construct($index = null, $length = null)
    {
      $this->index = $index;
      $this->length = $length;
    }

    /**
     * @return int
     */
    public function getIndex()
    {
      return $this->index;
    }

    /**
     * @param int $index
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyViolationErrorPart
     */
    public function setIndex($index)
    {
      $this->index = $index;
      return $this;
    }

    /**
     * @return int
     */
    public function getLength()
    {
      return $this->length;
    }

    /**
     * @param int $length
     * @return \Google\AdsApi\AdWords\v201806\cm\PolicyViolationErrorPart
     */
    public function setLength($length)
    {
      $this->length = $length;
      return $this;
    }

}
