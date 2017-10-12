<?php

namespace Google\AdsApi\AdWords\v201710\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Bids
{

    /**
     * @var string $BidsType
     */
    protected $BidsType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Bids.Type' => 'BidsType'];

    /**
     * @param string $BidsType
     */
    public function __construct($BidsType = null)
    {
      $this->BidsType = $BidsType;
    }

    /**
     * @return string
     */
    public function getBidsType()
    {
      return $this->BidsType;
    }

    /**
     * @param string $BidsType
     * @return \Google\AdsApi\AdWords\v201710\cm\Bids
     */
    public function setBidsType($BidsType)
    {
      $this->BidsType = $BidsType;
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
     * @return \Google\AdsApi\AdWords\v201710\cm\Bids
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
