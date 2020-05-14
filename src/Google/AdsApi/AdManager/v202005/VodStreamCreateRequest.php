<?php

namespace Google\AdsApi\AdManager\v202005;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class VodStreamCreateRequest extends \Google\AdsApi\AdManager\v202005\StreamCreateRequest
{

    /**
     * @var int $contentSourceId
     */
    protected $contentSourceId = null;

    /**
     * @var string $videoId
     */
    protected $videoId = null;

    /**
     * @var int $contentId
     */
    protected $contentId = null;

    /**
     * @var string $contentName
     */
    protected $contentName = null;

    /**
     * @var int[] $cuePoints
     */
    protected $cuePoints = null;

    /**
     * @param string $url
     * @param string $userAgent
     * @param int $contentSourceId
     * @param string $videoId
     * @param int $contentId
     * @param string $contentName
     * @param int[] $cuePoints
     */
    public function __construct($url = null, $userAgent = null, $contentSourceId = null, $videoId = null, $contentId = null, $contentName = null, array $cuePoints = null)
    {
      parent::__construct($url, $userAgent);
      $this->contentSourceId = $contentSourceId;
      $this->videoId = $videoId;
      $this->contentId = $contentId;
      $this->contentName = $contentName;
      $this->cuePoints = $cuePoints;
    }

    /**
     * @return int
     */
    public function getContentSourceId()
    {
      return $this->contentSourceId;
    }

    /**
     * @param int $contentSourceId
     * @return \Google\AdsApi\AdManager\v202005\VodStreamCreateRequest
     */
    public function setContentSourceId($contentSourceId)
    {
      $this->contentSourceId = (!is_null($contentSourceId) && PHP_INT_SIZE === 4)
          ? floatval($contentSourceId) : $contentSourceId;
      return $this;
    }

    /**
     * @return string
     */
    public function getVideoId()
    {
      return $this->videoId;
    }

    /**
     * @param string $videoId
     * @return \Google\AdsApi\AdManager\v202005\VodStreamCreateRequest
     */
    public function setVideoId($videoId)
    {
      $this->videoId = $videoId;
      return $this;
    }

    /**
     * @return int
     */
    public function getContentId()
    {
      return $this->contentId;
    }

    /**
     * @param int $contentId
     * @return \Google\AdsApi\AdManager\v202005\VodStreamCreateRequest
     */
    public function setContentId($contentId)
    {
      $this->contentId = (!is_null($contentId) && PHP_INT_SIZE === 4)
          ? floatval($contentId) : $contentId;
      return $this;
    }

    /**
     * @return string
     */
    public function getContentName()
    {
      return $this->contentName;
    }

    /**
     * @param string $contentName
     * @return \Google\AdsApi\AdManager\v202005\VodStreamCreateRequest
     */
    public function setContentName($contentName)
    {
      $this->contentName = $contentName;
      return $this;
    }

    /**
     * @return int[]
     */
    public function getCuePoints()
    {
      return $this->cuePoints;
    }

    /**
     * @param int[]|null $cuePoints
     * @return \Google\AdsApi\AdManager\v202005\VodStreamCreateRequest
     */
    public function setCuePoints(array $cuePoints = null)
    {
      $this->cuePoints = $cuePoints;
      return $this;
    }

}
