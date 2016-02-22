<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class RequestContextOperand extends \Google\AdsApi\AdWords\v201601\cm\FunctionArgumentOperand
{

    /**
     * @var string $contextType
     */
    protected $contextType = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param string $contextType
     */
    public function __construct($FunctionArgumentOperandType = null, $contextType = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->contextType = $contextType;
    }

    /**
     * @return string
     */
    public function getContextType()
    {
      return $this->contextType;
    }

    /**
     * @param string $contextType
     * @return \Google\AdsApi\AdWords\v201601\cm\RequestContextOperand
     */
    public function setContextType($contextType)
    {
      $this->contextType = $contextType;
      return $this;
    }

}
