<?php

namespace Google\AdsApi\AdManager\v201711;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class User extends \Google\AdsApi\AdManager\v201711\UserRecord
{

    /**
     * @var boolean $isActive
     */
    protected $isActive = null;

    /**
     * @var boolean $isEmailNotificationAllowed
     */
    protected $isEmailNotificationAllowed = null;

    /**
     * @var string $externalId
     */
    protected $externalId = null;

    /**
     * @var boolean $isServiceAccount
     */
    protected $isServiceAccount = null;

    /**
     * @var string $ordersUiLocalTimeZoneId
     */
    protected $ordersUiLocalTimeZoneId = null;

    /**
     * @var \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[] $customFieldValues
     */
    protected $customFieldValues = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param int $roleId
     * @param string $roleName
     * @param boolean $isActive
     * @param boolean $isEmailNotificationAllowed
     * @param string $externalId
     * @param boolean $isServiceAccount
     * @param string $ordersUiLocalTimeZoneId
     * @param \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[] $customFieldValues
     */
    public function __construct($id = null, $name = null, $email = null, $roleId = null, $roleName = null, $isActive = null, $isEmailNotificationAllowed = null, $externalId = null, $isServiceAccount = null, $ordersUiLocalTimeZoneId = null, array $customFieldValues = null)
    {
      parent::__construct($id, $name, $email, $roleId, $roleName);
      $this->isActive = $isActive;
      $this->isEmailNotificationAllowed = $isEmailNotificationAllowed;
      $this->externalId = $externalId;
      $this->isServiceAccount = $isServiceAccount;
      $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
      $this->customFieldValues = $customFieldValues;
    }

    /**
     * @return boolean
     */
    public function getIsActive()
    {
      return $this->isActive;
    }

    /**
     * @param boolean $isActive
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsEmailNotificationAllowed()
    {
      return $this->isEmailNotificationAllowed;
    }

    /**
     * @param boolean $isEmailNotificationAllowed
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setIsEmailNotificationAllowed($isEmailNotificationAllowed)
    {
      $this->isEmailNotificationAllowed = $isEmailNotificationAllowed;
      return $this;
    }

    /**
     * @return string
     */
    public function getExternalId()
    {
      return $this->externalId;
    }

    /**
     * @param string $externalId
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setExternalId($externalId)
    {
      $this->externalId = $externalId;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getIsServiceAccount()
    {
      return $this->isServiceAccount;
    }

    /**
     * @param boolean $isServiceAccount
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setIsServiceAccount($isServiceAccount)
    {
      $this->isServiceAccount = $isServiceAccount;
      return $this;
    }

    /**
     * @return string
     */
    public function getOrdersUiLocalTimeZoneId()
    {
      return $this->ordersUiLocalTimeZoneId;
    }

    /**
     * @param string $ordersUiLocalTimeZoneId
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setOrdersUiLocalTimeZoneId($ordersUiLocalTimeZoneId)
    {
      $this->ordersUiLocalTimeZoneId = $ordersUiLocalTimeZoneId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[]
     */
    public function getCustomFieldValues()
    {
      return $this->customFieldValues;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201711\BaseCustomFieldValue[] $customFieldValues
     * @return \Google\AdsApi\AdManager\v201711\User
     */
    public function setCustomFieldValues(array $customFieldValues)
    {
      $this->customFieldValues = $customFieldValues;
      return $this;
    }

}
