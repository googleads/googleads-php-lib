<?php

namespace Google\AdsApi\AdWords\v201809\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserListReturnValue extends \Google\AdsApi\AdWords\v201809\cm\ListReturnValue
{

    /**
     * @var \Google\AdsApi\AdWords\v201809\rm\UserList[] $value
     */
    protected $value = null;

    /**
     * @param string $ListReturnValueType
     * @param \Google\AdsApi\AdWords\v201809\rm\UserList[] $value
     */
    public function __construct($ListReturnValueType = null, array $value = null)
    {
      parent::__construct($ListReturnValueType);
      $this->value = $value;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201809\rm\UserList[]
     */
    public function getValue()
    {
      return $this->value;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201809\rm\UserList[] $value
     * @return \Google\AdsApi\AdWords\v201809\rm\UserListReturnValue
     */
    public function setValue(array $value)
    {
      $this->value = $value;
      return $this;
    }

}
