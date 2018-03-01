<?php

namespace Google\AdsApi\AdWords\v201802\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomParameter
{

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @var boolean $isRemove
     */
    protected $isRemove = null;

    /**
     * @param string $key
     * @param string $value
     * @param boolean $isRemove
     */
    public function __construct($key = null, $value = null, $isRemove = null)
    {
      $this->key = $key;
      $this->value = $value;
      $this->isRemove = $isRemove;
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
     * @return \Google\AdsApi\AdWords\v201802\cm\CustomParameter
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param string $value
     * @return \Google\AdsApi\AdWords\v201802\cm\CustomParameter
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsRemove()
    {
      return $this->isRemove;
    }

    /**
     * @param boolean $isRemove
     * @return \Google\AdsApi\AdWords\v201802\cm\CustomParameter
     */
    public function setIsRemove($isRemove)
    {
      $this->isRemove = $isRemove;
      return $this;
    }

}
