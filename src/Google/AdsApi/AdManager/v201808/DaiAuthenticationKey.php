<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class DaiAuthenticationKey
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $key
     */
    protected $key = null;

    /**
     * @var \Google\AdsApi\AdManager\v201808\DateTime $creationDateTime
     */
    protected $creationDateTime = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var string $keyType
     */
    protected $keyType = null;

    /**
     * @param int $id
     * @param string $key
     * @param \Google\AdsApi\AdManager\v201808\DateTime $creationDateTime
     * @param string $status
     * @param string $name
     * @param string $keyType
     */
    public function __construct($id = null, $key = null, $creationDateTime = null, $status = null, $name = null, $keyType = null)
    {
      $this->id = $id;
      $this->key = $key;
      $this->creationDateTime = $creationDateTime;
      $this->status = $status;
      $this->name = $name;
      $this->keyType = $keyType;
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
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setId($id)
    {
      $this->id = (!is_null($id) && PHP_INT_SIZE === 4)
          ? floatval($id) : $id;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setKey($key)
    {
      $this->key = $key;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v201808\DateTime
     */
    public function getCreationDateTime()
    {
      return $this->creationDateTime;
    }

    /**
     * @param \Google\AdsApi\AdManager\v201808\DateTime $creationDateTime
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setCreationDateTime($creationDateTime)
    {
      $this->creationDateTime = $creationDateTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
      return $this->status;
    }

    /**
     * @param string $status
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setStatus($status)
    {
      $this->status = $status;
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
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getKeyType()
    {
      return $this->keyType;
    }

    /**
     * @param string $keyType
     * @return \Google\AdsApi\AdManager\v201808\DaiAuthenticationKey
     */
    public function setKeyType($keyType)
    {
      $this->keyType = $keyType;
      return $this;
    }

}
