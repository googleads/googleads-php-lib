<?php

namespace Google\AdsApi\AdManager\v202002;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AdCategoryDto
{

    /**
     * @var int $id
     */
    protected $id = null;

    /**
     * @var string $displayName
     */
    protected $displayName = null;

    /**
     * @var int $parentId
     */
    protected $parentId = null;

    /**
     * @param int $id
     * @param string $displayName
     * @param int $parentId
     */
    public function __construct($id = null, $displayName = null, $parentId = null)
    {
      $this->id = $id;
      $this->displayName = $displayName;
      $this->parentId = $parentId;
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
     * @return \Google\AdsApi\AdManager\v202002\AdCategoryDto
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
    public function getDisplayName()
    {
      return $this->displayName;
    }

    /**
     * @param string $displayName
     * @return \Google\AdsApi\AdManager\v202002\AdCategoryDto
     */
    public function setDisplayName($displayName)
    {
      $this->displayName = $displayName;
      return $this;
    }

    /**
     * @return int
     */
    public function getParentId()
    {
      return $this->parentId;
    }

    /**
     * @param int $parentId
     * @return \Google\AdsApi\AdManager\v202002\AdCategoryDto
     */
    public function setParentId($parentId)
    {
      $this->parentId = (!is_null($parentId) && PHP_INT_SIZE === 4)
          ? floatval($parentId) : $parentId;
      return $this;
    }

}
