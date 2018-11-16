<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class WebpageCondition
{

    /**
     * @var string $operand
     */
    protected $operand = null;

    /**
     * @var string $argument
     */
    protected $argument = null;

    /**
     * @param string $operand
     * @param string $argument
     */
    public function __construct($operand = null, $argument = null)
    {
      $this->operand = $operand;
      $this->argument = $argument;
    }

    /**
     * @return string
     */
    public function getOperand()
    {
      return $this->operand;
    }

    /**
     * @param string $operand
     * @return \Google\AdsApi\AdWords\v201802\cm\WebpageCondition
     */
    public function setOperand($operand)
    {
      $this->operand = $operand;
      return $this;
    }

    /**
     * @return string
     */
    public function getArgument()
    {
      return $this->argument;
    }

    /**
     * @param string $argument
     * @return \Google\AdsApi\AdWords\v201802\cm\WebpageCondition
     */
    public function setArgument($argument)
    {
      $this->argument = $argument;
      return $this;
    }

}
