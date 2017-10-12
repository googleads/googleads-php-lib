<?php

namespace Google\AdsApi\AdWords\v201710\rm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class UserIdentifier
{

    /**
     * @var string $userIdentifierType
     */
    protected $userIdentifierType = null;

    /**
     * @var string $value
     */
    protected $value = null;

    /**
     * @param string $userIdentifierType
     * @param string $value
     */
    public function __construct($userIdentifierType = null, $value = null)
    {
      $this->userIdentifierType = $userIdentifierType;
      $this->value = $value;
    }

    /**
     * @return string
     */
    public function getUserIdentifierType()
    {
      return $this->userIdentifierType;
    }

    /**
     * @param string $userIdentifierType
     * @return \Google\AdsApi\AdWords\v201710\rm\UserIdentifier
     */
    public function setUserIdentifierType($userIdentifierType)
    {
      $this->userIdentifierType = $userIdentifierType;
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
     * @return \Google\AdsApi\AdWords\v201710\rm\UserIdentifier
     */
    public function setValue($value)
    {
      $this->value = $value;
      return $this;
    }

}
