<?php

namespace Google\AdsApi\AdWords\v201806\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ConstantOperand extends \Google\AdsApi\AdWords\v201806\cm\FunctionArgumentOperand
{

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var string $unit
     */
    protected $unit = null;

    /**
     * @var int $longValue
     */
    protected $longValue = null;

    /**
     * @var boolean $booleanValue
     */
    protected $booleanValue = null;

    /**
     * @var float $doubleValue
     */
    protected $doubleValue = null;

    /**
     * @var string $stringValue
     */
    protected $stringValue = null;

    /**
     * @param string $FunctionArgumentOperandType
     * @param string $type
     * @param string $unit
     * @param int $longValue
     * @param boolean $booleanValue
     * @param float $doubleValue
     * @param string $stringValue
     */
    public function __construct($FunctionArgumentOperandType = null, $type = null, $unit = null, $longValue = null, $booleanValue = null, $doubleValue = null, $stringValue = null)
    {
      parent::__construct($FunctionArgumentOperandType);
      $this->type = $type;
      $this->unit = $unit;
      $this->longValue = $longValue;
      $this->booleanValue = $booleanValue;
      $this->doubleValue = $doubleValue;
      $this->stringValue = $stringValue;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return string
     */
    public function getUnit()
    {
      return $this->unit;
    }

    /**
     * @param string $unit
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setUnit($unit)
    {
      $this->unit = $unit;
      return $this;
    }

    /**
     * @return int
     */
    public function getLongValue()
    {
      return $this->longValue;
    }

    /**
     * @param int $longValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setLongValue($longValue)
    {
      $this->longValue = (!is_null($longValue) && PHP_INT_SIZE === 4)
          ? floatval($longValue) : $longValue;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getBooleanValue()
    {
      return $this->booleanValue;
    }

    /**
     * @param boolean $booleanValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setBooleanValue($booleanValue)
    {
      $this->booleanValue = $booleanValue;
      return $this;
    }

    /**
     * @return float
     */
    public function getDoubleValue()
    {
      return $this->doubleValue;
    }

    /**
     * @param float $doubleValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setDoubleValue($doubleValue)
    {
      $this->doubleValue = $doubleValue;
      return $this;
    }

    /**
     * @return string
     */
    public function getStringValue()
    {
      return $this->stringValue;
    }

    /**
     * @param string $stringValue
     * @return \Google\AdsApi\AdWords\v201806\cm\ConstantOperand
     */
    public function setStringValue($stringValue)
    {
      $this->stringValue = $stringValue;
      return $this;
    }

}
