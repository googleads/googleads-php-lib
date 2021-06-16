<?php

namespace Google\AdsApi\AdWords\v201809\cm;


/**
 * This file was generated from WSDL. DO NOT EDIT.
 */
class Audio extends \Google\AdsApi\AdWords\v201809\cm\Media
{

    /**
     * @var int $durationMillis
     */
    protected $durationMillis = null;

    /**
     * @var string $streamingUrl
     */
    protected $streamingUrl = null;

    /**
     * @var boolean $readyToPlayOnTheWeb
     */
    protected $readyToPlayOnTheWeb = null;

    /**
     * @param int $mediaId
     * @param string $type
     * @param int $referenceId
     * @param \Google\AdsApi\AdWords\v201809\cm\Media_Size_DimensionsMapEntry[] $dimensions
     * @param \Google\AdsApi\AdWords\v201809\cm\Media_Size_StringMapEntry[] $urls
     * @param string $mimeType
     * @param string $sourceUrl
     * @param string $name
     * @param int $fileSize
     * @param string $creationTime
     * @param string $MediaType
     * @param int $durationMillis
     * @param string $streamingUrl
     * @param boolean $readyToPlayOnTheWeb
     */
    public function __construct($mediaId = null, $type = null, $referenceId = null, array $dimensions = null, array $urls = null, $mimeType = null, $sourceUrl = null, $name = null, $fileSize = null, $creationTime = null, $MediaType = null, $durationMillis = null, $streamingUrl = null, $readyToPlayOnTheWeb = null)
    {
      parent::__construct($mediaId, $type, $referenceId, $dimensions, $urls, $mimeType, $sourceUrl, $name, $fileSize, $creationTime, $MediaType);
      $this->durationMillis = $durationMillis;
      $this->streamingUrl = $streamingUrl;
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
    }

    /**
     * @return int
     */
    public function getDurationMillis()
    {
      return $this->durationMillis;
    }

    /**
     * @param int $durationMillis
     * @return \Google\AdsApi\AdWords\v201809\cm\Audio
     */
    public function setDurationMillis($durationMillis)
    {
      $this->durationMillis = (!is_null($durationMillis) && PHP_INT_SIZE === 4)
          ? floatval($durationMillis) : $durationMillis;
      return $this;
    }

    /**
     * @return string
     */
    public function getStreamingUrl()
    {
      return $this->streamingUrl;
    }

    /**
     * @param string $streamingUrl
     * @return \Google\AdsApi\AdWords\v201809\cm\Audio
     */
    public function setStreamingUrl($streamingUrl)
    {
      $this->streamingUrl = $streamingUrl;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getReadyToPlayOnTheWeb()
    {
      return $this->readyToPlayOnTheWeb;
    }

    /**
     * @param boolean $readyToPlayOnTheWeb
     * @return \Google\AdsApi\AdWords\v201809\cm\Audio
     */
    public function setReadyToPlayOnTheWeb($readyToPlayOnTheWeb)
    {
      $this->readyToPlayOnTheWeb = $readyToPlayOnTheWeb;
      return $this;
    }

}
