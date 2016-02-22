<?php

namespace Google\AdsApi\Dfp\v201511;

class UserRecord
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $email
     */
    protected $email = null;

    /**
     * @var int $roleId
     */
    protected $roleId = null;

    /**
     * @var string $roleName
     */
    protected $roleName = null;

    /**
     * @var string $preferredLocale
     */
    protected $preferredLocale = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $email
     * @param int $roleId
     * @param string $roleName
     * @param string $preferredLocale
     */
    public function __construct($id = null, $name = null, $email = null, $roleId = null, $roleName = null, $preferredLocale = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->email = $email;
      $this->roleId = $roleId;
      $this->roleName = $roleName;
      $this->preferredLocale = $preferredLocale;
    }

    /**
     * @return int
     */
    public function getId()
    {
      return $this->id;
    }

    /**
     * @param int $id
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setId($id)
    {
      $this->id = $id;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
      return $this->email;
    }

    /**
     * @param string $email
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setEmail($email)
    {
      $this->email = $email;
      return $this;
    }

    /**
     * @return int
     */
    public function getRoleId()
    {
      return $this->roleId;
    }

    /**
     * @param int $roleId
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setRoleId($roleId)
    {
      $this->roleId = $roleId;
      return $this;
    }

    /**
     * @return string
     */
    public function getRoleName()
    {
      return $this->roleName;
    }

    /**
     * @param string $roleName
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setRoleName($roleName)
    {
      $this->roleName = $roleName;
      return $this;
    }

    /**
     * @return string
     */
    public function getPreferredLocale()
    {
      return $this->preferredLocale;
    }

    /**
     * @param string $preferredLocale
     * @return \Google\AdsApi\Dfp\v201511\UserRecord
     */
    public function setPreferredLocale($preferredLocale)
    {
      $this->preferredLocale = $preferredLocale;
      return $this;
    }

}
