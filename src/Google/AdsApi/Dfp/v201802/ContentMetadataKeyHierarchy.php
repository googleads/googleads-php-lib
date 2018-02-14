<?php

namespace Google\AdsApi\Dfp\v201802;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class ContentMetadataKeyHierarchy
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
     * @var \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchyLevel[] $hierarchyLevels
     */
    protected $hierarchyLevels = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @param int $id
     * @param string $name
     * @param \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchyLevel[] $hierarchyLevels
     * @param string $status
     */
    public function __construct($id = null, $name = null, array $hierarchyLevels = null, $status = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->hierarchyLevels = $hierarchyLevels;
      $this->status = $status;
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
     * @return \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchy
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
     * @return \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchy
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchyLevel[]
     */
    public function getHierarchyLevels()
    {
      return $this->hierarchyLevels;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchyLevel[] $hierarchyLevels
     * @return \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchy
     */
    public function setHierarchyLevels(array $hierarchyLevels)
    {
      $this->hierarchyLevels = $hierarchyLevels;
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
     * @return \Google\AdsApi\Dfp\v201802\ContentMetadataKeyHierarchy
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

}
