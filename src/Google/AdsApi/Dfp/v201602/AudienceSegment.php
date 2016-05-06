<?php

namespace Google\AdsApi\Dfp\v201602;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class AudienceSegment
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
     * @var long[] $categoryIds
     */
    protected $categoryIds = null;

    /**
     * @var string $description
     */
    protected $description = null;

    /**
     * @var string $status
     */
    protected $status = null;

    /**
     * @var int $size
     */
    protected $size = null;

    /**
     * @var \Google\AdsApi\Dfp\v201602\AudienceSegmentDataProvider $dataProvider
     */
    protected $dataProvider = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $name
     * @param long[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param \Google\AdsApi\Dfp\v201602\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $dataProvider = null, $type = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->dataProvider = $dataProvider;
      $this->type = $type;
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
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return long[]
     */
    public function getCategoryIds()
    {
      return $this->categoryIds;
    }

    /**
     * @param long[] $categoryIds
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setCategoryIds(array $categoryIds)
    {
      $this->categoryIds = $categoryIds;
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
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setDescription($description)
    {
      $this->description = $description;
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
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setStatus($status)
    {
      $this->status = $status;
      return $this;
    }

    /**
     * @return int
     */
    public function getSize()
    {
      return $this->size;
    }

    /**
     * @param int $size
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setSize($size)
    {
      $this->size = $size;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegmentDataProvider
     */
    public function getDataProvider()
    {
      return $this->dataProvider;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201602\AudienceSegmentDataProvider $dataProvider
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setDataProvider($dataProvider)
    {
      $this->dataProvider = $dataProvider;
      return $this;
    }

    /**
     * @return string
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param string $type
     * @return \Google\AdsApi\Dfp\v201602\AudienceSegment
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
