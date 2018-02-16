<?php

namespace Google\AdsApi\Dfp\v201802;


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
     * @var int[] $categoryIds
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
     * @var int $mobileWebSize
     */
    protected $mobileWebSize = null;

    /**
     * @var int $idfaSize
     */
    protected $idfaSize = null;

    /**
     * @var int $adIdSize
     */
    protected $adIdSize = null;

    /**
     * @var int $ppidSize
     */
    protected $ppidSize = null;

    /**
     * @var \Google\AdsApi\Dfp\v201802\AudienceSegmentDataProvider $dataProvider
     */
    protected $dataProvider = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @param int $id
     * @param string $name
     * @param int[] $categoryIds
     * @param string $description
     * @param string $status
     * @param int $size
     * @param int $mobileWebSize
     * @param int $idfaSize
     * @param int $adIdSize
     * @param int $ppidSize
     * @param \Google\AdsApi\Dfp\v201802\AudienceSegmentDataProvider $dataProvider
     * @param string $type
     */
    public function __construct($id = null, $name = null, array $categoryIds = null, $description = null, $status = null, $size = null, $mobileWebSize = null, $idfaSize = null, $adIdSize = null, $ppidSize = null, $dataProvider = null, $type = null)
    {
      $this->id = $id;
      $this->name = $name;
      $this->categoryIds = $categoryIds;
      $this->description = $description;
      $this->status = $status;
      $this->size = $size;
      $this->mobileWebSize = $mobileWebSize;
      $this->idfaSize = $idfaSize;
      $this->adIdSize = $adIdSize;
      $this->ppidSize = $ppidSize;
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCategoryIds()
    {
      return $this->categoryIds;
    }

    /**
     * @param int[] $categoryIds
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setSize($size)
    {
      $this->size = (!is_null($size) && PHP_INT_SIZE === 4)
          ? floatval($size) : $size;
      return $this;
    }

    /**
     * @return int
     */
    public function getMobileWebSize()
    {
      return $this->mobileWebSize;
    }

    /**
     * @param int $mobileWebSize
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setMobileWebSize($mobileWebSize)
    {
      $this->mobileWebSize = (!is_null($mobileWebSize) && PHP_INT_SIZE === 4)
          ? floatval($mobileWebSize) : $mobileWebSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getIdfaSize()
    {
      return $this->idfaSize;
    }

    /**
     * @param int $idfaSize
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setIdfaSize($idfaSize)
    {
      $this->idfaSize = (!is_null($idfaSize) && PHP_INT_SIZE === 4)
          ? floatval($idfaSize) : $idfaSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getAdIdSize()
    {
      return $this->adIdSize;
    }

    /**
     * @param int $adIdSize
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setAdIdSize($adIdSize)
    {
      $this->adIdSize = (!is_null($adIdSize) && PHP_INT_SIZE === 4)
          ? floatval($adIdSize) : $adIdSize;
      return $this;
    }

    /**
     * @return int
     */
    public function getPpidSize()
    {
      return $this->ppidSize;
    }

    /**
     * @param int $ppidSize
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setPpidSize($ppidSize)
    {
      $this->ppidSize = (!is_null($ppidSize) && PHP_INT_SIZE === 4)
          ? floatval($ppidSize) : $ppidSize;
      return $this;
    }

    /**
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegmentDataProvider
     */
    public function getDataProvider()
    {
      return $this->dataProvider;
    }

    /**
     * @param \Google\AdsApi\Dfp\v201802\AudienceSegmentDataProvider $dataProvider
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
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
     * @return \Google\AdsApi\Dfp\v201802\AudienceSegment
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

}
