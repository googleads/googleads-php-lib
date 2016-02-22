<?php

namespace Google\AdsApi\AdWords\v201601\cm;

class Media
{

    /**
     * @var int $mediaId
     */
    protected $mediaId = null;

    /**
     * @var string $type
     */
    protected $type = null;

    /**
     * @var int $referenceId
     */
    protected $referenceId = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Media_Size_DimensionsMapEntry[] $dimensions
     */
    protected $dimensions = null;

    /**
     * @var \Google\AdsApi\AdWords\v201601\cm\Media_Size_StringMapEntry[] $urls
     */
    protected $urls = null;

    /**
     * @var string $mimeType
     */
    protected $mimeType = null;

    /**
     * @var string $sourceUrl
     */
    protected $sourceUrl = null;

    /**
     * @var string $name
     */
    protected $name = null;

    /**
     * @var int $fileSize
     */
    protected $fileSize = null;

    /**
     * @var string $creationTime
     */
    protected $creationTime = null;

    /**
     * @var string $MediaType
     */
    protected $MediaType = null;

    /**
     * @param int $mediaId
     * @param string $type
     * @param int $referenceId
     * @param \Google\AdsApi\AdWords\v201601\cm\Media_Size_DimensionsMapEntry[] $dimensions
     * @param \Google\AdsApi\AdWords\v201601\cm\Media_Size_StringMapEntry[] $urls
     * @param string $mimeType
     * @param string $sourceUrl
     * @param string $name
     * @param int $fileSize
     * @param string $creationTime
     * @param string $MediaType
     */
    public function __construct($mediaId = null, $type = null, $referenceId = null, array $dimensions = null, array $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null)
    {
      $this->mediaId = $mediaId;
      $this->type = $type;
      $this->referenceId = $referenceId;
      $this->dimensions = $dimensions;
      $this->urls = $urls;
      $this->mimeType = $mimeType;
      $this->sourceUrl = $sourceUrl;
      $this->name = $name;
      $this->fileSize = $fileSize;
      $this->creationTime = $creationTime;
      $this->MediaType = $MediaType;
    }

    /**
     * @return int
     */
    public function getMediaId()
    {
      return $this->mediaId;
    }

    /**
     * @param int $mediaId
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setMediaId($mediaId)
    {
      $this->mediaId = $mediaId;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return int
     */
    public function getReferenceId()
    {
      return $this->referenceId;
    }

    /**
     * @param int $referenceId
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setReferenceId($referenceId)
    {
      $this->referenceId = $referenceId;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Media_Size_DimensionsMapEntry[]
     */
    public function getDimensions()
    {
      return $this->dimensions;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Media_Size_DimensionsMapEntry[] $dimensions
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setDimensions(array $dimensions)
    {
      $this->dimensions = $dimensions;
      return $this;
    }

    /**
     * @return \Google\AdsApi\AdWords\v201601\cm\Media_Size_StringMapEntry[]
     */
    public function getUrls()
    {
      return $this->urls;
    }

    /**
     * @param \Google\AdsApi\AdWords\v201601\cm\Media_Size_StringMapEntry[] $urls
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setUrls(array $urls)
    {
      $this->urls = $urls;
      return $this;
    }

    /**
     * @return string
     */
    public function getMimeType()
    {
      return $this->mimeType;
    }

    /**
     * @param string $mimeType
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setMimeType($mimeType)
    {
      $this->mimeType = $mimeType;
      return $this;
    }

    /**
     * @return string
     */
    public function getSourceUrl()
    {
      return $this->sourceUrl;
    }

    /**
     * @param string $sourceUrl
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setSourceUrl($sourceUrl)
    {
      $this->sourceUrl = $sourceUrl;
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
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setName($name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return int
     */
    public function getFileSize()
    {
      return $this->fileSize;
    }

    /**
     * @param int $fileSize
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setFileSize($fileSize)
    {
      $this->fileSize = $fileSize;
      return $this;
    }

    /**
     * @return string
     */
    public function getCreationTime()
    {
      return $this->creationTime;
    }

    /**
     * @param string $creationTime
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setCreationTime($creationTime)
    {
      $this->creationTime = $creationTime;
      return $this;
    }

    /**
     * @return string
     */
    public function getMediaType()
    {
      return $this->MediaType;
    }

    /**
     * @param string $MediaType
     * @return \Google\AdsApi\AdWords\v201601\cm\Media
     */
    public function setMediaType($MediaType)
    {
      $this->MediaType = $MediaType;
      return $this;
    }

}
