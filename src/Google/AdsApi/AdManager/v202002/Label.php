<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Label
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
     * @var \Google\AdsApi\AdManager\v202002\AdCategoryDto $adCategory
     */
    protected $adCategory = null;

    /**
     * @var string[] $types
     */
    protected $types = null;

    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param boolean $isActive
     * @param \Google\AdsApi\AdManager\v202002\AdCategoryDto $adCategory
     * @param string[] $types
     */
    public function __construct($id = null, $name = null, $description = null, $isActive = null, $adCategory = null, array $types = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->description = $description;
      $this->isActive = $isActive;
      $this->adCategory = $adCategory;
      $this->types = $types;
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
     * @return \Google\AdsApi\AdManager\v202002\Label
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
     * @return \Google\AdsApi\AdManager\v202002\Label
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
     * @return \Google\AdsApi\AdManager\v202002\Label
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
     * @return \Google\AdsApi\AdManager\v202002\Label
     */
    public function setIsActive($isActive)
    {
      $this->isActive = $isActive;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdManager\v202002\AdCategoryDto
     */
    public function getAdCategory()
    {
      return $this->adCategory;
    }

    /**
     * @param \Google\AdsApi\AdManager\v202002\AdCategoryDto $adCategory
     * @return \Google\AdsApi\AdManager\v202002\Label
     */
    public function setAdCategory($adCategory)
    {
      $this->adCategory = $adCategory;
      return $this;
    }

    /**
     * @return string[]
     */
    public function getTypes()
    {
      return $this->types;
    }

    /**
     * @param string[]|null $types
     * @return \Google\AdsApi\AdManager\v202002\Label
     */
    public function setTypes(array $types = null)
    {
      $this->types = $types;
      return $this;
    }

}
