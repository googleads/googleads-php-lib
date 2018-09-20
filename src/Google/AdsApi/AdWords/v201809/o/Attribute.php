<?php

namespace Google\AdsApi\AdWords\v201809\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
abstract class Attribute
{

    /**
     * @var string $AttributeType
     */
    protected $AttributeType = null;

    /**
     * @var array $parameterMap
     */
    private $parameterMap = ['Attribute.Type' => 'AttributeType'];

    /**
     * @param string $AttributeType
     */
    public function __construct($AttributeType = null)
    {
      $this->AttributeType = $AttributeType;
    }

    /**
     * @return string
     */
    public function getAttributeType()
    {
      return $this->AttributeType;
    }

    /**
     * @param string $AttributeType
     * @return \Google\AdsApi\AdWords\v201809\o\Attribute
     */
    public function setAttributeType($AttributeType)
    {
      $this->AttributeType = $AttributeType;
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
     * @return \Google\AdsApi\AdWords\v201809\o\Attribute
     */
    public function __set($var, $value)
    {
      $this->{$this->parameterMap[$var]} = $value;
    }

}
