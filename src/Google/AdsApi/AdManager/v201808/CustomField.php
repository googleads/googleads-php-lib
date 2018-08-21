<?php

namespace Google\AdsApi\AdManager\v201808;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class CustomField
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
     * @var string $description
     */
    protected $description = null;

    /**
     * @var boolean $isActive
     */
    protected $isActive = null;

    /**
     * @var string $entityType
     */
    protected $entityType = null;

    /**
     * @var string $dataType
     */
    protected $dataType = null;

    /**
     * @var string $visibility
     */
    protected $visibility = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param boolean $isActive
     * @param string $entityType
     * @param string $dataType
     * @param string $visibility
     */
    public function __construct($id = null, $name = null, $description = null, $isActive = null, $entityType = null, $dataType = null, $visibility = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->isActive = $isActive;
      $this->entityType = $entityType;
      $this->dataType = $dataType;
      $this->visibility = $visibility;
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
     * @return \Google\AdsApi\AdManager\v201808\CustomField
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
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
      return $this->description;
    }

    /**
     * @param string $description
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setDescription($description)
    {
      $this->description = $description;
      return $this;
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
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
      return $this->entityType;
    }

    /**
     * @param string $entityType
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setEntityType($entityType)
    {
      $this->entityType = $entityType;
      return $this;
    }

    /**
     * @return string
     */
    public function getDataType()
    {
      return $this->dataType;
    }

    /**
     * @param string $dataType
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setDataType($dataType)
    {
      $this->dataType = $dataType;
      return $this;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
      return $this->visibility;
    }

    /**
     * @param string $visibility
     * @return \Google\AdsApi\AdManager\v201808\CustomField
     */
    public function setVisibility($visibility)
    {
      $this->visibility = $visibility;
      return $this;
    }

}
