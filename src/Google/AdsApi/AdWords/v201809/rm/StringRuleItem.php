<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class StringRuleItem
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\StringKey $key
     */
    protected $key = null;

    /**
     * @var string $op
     */
    protected $op = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\StringKey $key
     * @param string $op
     * @param string $value
     */
    public function __construct($key = null, $op = null, $value = null)
    {
      $this->key = $key;
      $this->op = $op;
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\StringKey
     */
    public function getKey()
    {
      return $this->key;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\StringKey $key
     * @return \Google\AdsApi\AdWords\v201809\rm\StringRuleItem
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return string
     */
    public function getOp()
    {
      return $this->op;
    }

    /**
     * @param string $op
     * @return \Google\AdsApi\AdWords\v201809\rm\StringRuleItem
     */
    public function setOp($op)
    {
      $this->op = $op;
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
     * @return \Google\AdsApi\AdWords\v201809\rm\StringRuleItem
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
