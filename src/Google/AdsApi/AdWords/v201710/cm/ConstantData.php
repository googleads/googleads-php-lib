<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConstantData
{

    /**
     * @var string $ConstantDataType
     */
    protected $ConstantDataType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['ConstantData.Type' => 'ConstantDataType'];

    /**
     * @param string $ConstantDataType
     */
    public function __construct($ConstantDataType = null)
    {
      $this->ConstantDataType = $ConstantDataType;
    }

    /**
     * @return string
     */
    public function getConstantDataType()
    {
      return $this->ConstantDataType;
    }

    /**
     * @param string $ConstantDataType
     * @return \Google\AdsApi\AdWords\v201710\cm\ConstantData
     */
    public function setConstantDataType($ConstantDataType)
    {
      $this->ConstantDataType = $ConstantDataType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\ConstantData
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
