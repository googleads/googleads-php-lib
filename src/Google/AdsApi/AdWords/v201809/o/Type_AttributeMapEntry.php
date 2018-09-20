<?php

namespace Google\AdsApi\AdWords\v201809\o;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Type_AttributeMapEntry
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\AdWords\v201809\o\Attribute $value
     */
    protected $value = null;

    /**
     * @param string $key
     * @param \Google\AdsApi\AdWords\v201809\o\Attribute $value
     */
    public function __construct($key = null, $value = null)
    {
      $this->key = $key;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param string $key
     * @return \Google\AdsApi\AdWords\v201809\o\Type_AttributeMapEntry
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\o\Attribute
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\o\Attribute $value
     * @return \Google\AdsApi\AdWords\v201809\o\Type_AttributeMapEntry
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
