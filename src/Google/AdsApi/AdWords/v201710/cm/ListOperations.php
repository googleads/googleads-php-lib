<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ListOperations
{

    /**
     * @var boolean $clear
     */
    protected $clear = null;

    /**
     * @var string[] $operators
     */
    protected $operators = null;

    /**
     * @param boolean $clear
     * @param string[] $operators
     */
    public function __construct($clear = null, array $operators = null)
    {
      $this->clear = $clear;
      $this->operators = $operators;
    }

    /**
     * @return boolean
     */
    public function getClear()
    {
      return $this->clear;
    }

    /**
     * @param boolean $clear
     * @return \Google\AdsApi\AdWords\v201710\cm\ListOperations
     */
    public function setClear($clear)
    {
      $this->clear = $clear;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getOperators()
    {
      return $this->operators;
    }

    /**
     * @param string[] $operators
     * @return \Google\AdsApi\AdWords\v201710\cm\ListOperations
     */
    public function setOperators(array $operators)
    {
      $this->operators = $operators;
      return $this;
    }

}
