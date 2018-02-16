<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class MutateResult
{

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\Operand $result
     */
    protected $result = null;

    /**
     * @var \Google\AdsApi\AdWords\v201710\cm\ErrorList $errorList
     */
    protected $errorList = null;

    /**
     * @var int $index
     */
    protected $index = null;

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Operand $result
     * @param \Google\AdsApi\AdWords\v201710\cm\ErrorList $errorList
     * @param int $index
     */
    public function __construct($result = null, $errorList = null, $index = null)
    {
      $this->result = $result;
      $this->errorList = $errorList;
      $this->index = $index;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\Operand
     */
    public function getResult()
    {
      return $this->result;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\Operand $result
     * @return \Google\AdsApi\AdWords\v201710\cm\MutateResult
     */
    public function setResult($result)
    {
      $this->result = $result;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201710\cm\ErrorList
     */
    public function getErrorList()
    {
      return $this->errorList;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201710\cm\ErrorList $errorList
     * @return \Google\AdsApi\AdWords\v201710\cm\MutateResult
     */
    public function setErrorList($errorList)
    {
      $this->errorList = $errorList;
      return $this;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\MutateResult
     */
    public function setIndex($index)
    {
      $this->index = (!is_null($index) && PHP_INT_SIZE === 4)
          ? floatval($index) : $index;
      return $this;
    }

}
